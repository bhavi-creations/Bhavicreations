<?php
// 1. Database Connection
include './db.connection/db_connection.php';

// Identifier capture
$blog_input = isset($_GET['id']) ? $_GET['id'] : '';

if (empty($blog_input)) {
    echo "<h1 style='color:gold; text-align:center; margin-top:50px;'>Invalid Blog Request</h1>";
    exit;
}

// 2. Fetch Blog Data
$stmt = $conn->prepare("
    SELECT 
        id, title, slug, main_content, full_content, 
        title_image, main_image, video, 
        telugu_title, telugu_main_content, telugu_full_content,
        section1_image, service, hashtags, keypoints
    FROM blogs 
    WHERE id = ? OR slug = ?
");

if ($stmt === false) {
    die("Blog query error: " . htmlspecialchars($conn->error));
}

$stmt->bind_param("ss", $blog_input, $blog_input);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

if (!$blog) {
    echo "<h1 style='color:gold; text-align:center; margin-top:50px;'>Blog Not Found!</h1>";
    exit;
}

// Data mapping with Fallback Logic
$blog_id = $blog['id'];
$title = $blog['title'];
$main_content = $blog['main_content'];
$full_content = $blog['full_content'];
$main_image = $blog['main_image'];
$video = $blog['video'];
$telugu_title = !empty($blog['telugu_title']) ? $blog['telugu_title'] : $title;
$telugu_main_content = !empty($blog['telugu_main_content']) ? $blog['telugu_main_content'] : $main_content;
$telugu_full_content = !empty($blog['telugu_full_content']) ? $blog['telugu_full_content'] : $full_content;
$service = $blog['service'];

$stmt->close();

// 3. Fetch Likes/Dislikes
// IMPORTANT: bind_param() was failing because prepare() returned false.
// This usually means the blog_reactions table/column name does not exist
// or the SQL query has a database/schema problem.
//
// We check prepare() before calling bind_param(), so the page will not crash.
$likes_count = 0;
$dislikes_count = 0;

$count_sql = "SELECT reaction, COUNT(*) AS total
              FROM blog_reactions
              WHERE blog_id = ?
              GROUP BY reaction";

$count_stmt = $conn->prepare($count_sql);

if ($count_stmt !== false) {
    $count_stmt->bind_param("i", $blog_id);
    $count_stmt->execute();

    $res = $count_stmt->get_result();

    while ($row = $res->fetch_assoc()) {
        if ($row['reaction'] === 'like') {
            $likes_count = (int)$row['total'];
        } elseif ($row['reaction'] === 'dislike') {
            $dislikes_count = (int)$row['total'];
        }
    }

    $count_stmt->close();
} else {
    // Keep the blog page working even if the reaction table is missing.
    // Check your XAMPP MySQL database and create/verify blog_reactions.
    error_log("blog_reactions query failed: " . $conn->error);
}
?>

<!-- Latest blog listing uses a direct query later in the page -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description">
    <meta name="keywords" content="your,keywords,here">
    <meta name="author" content="Your Name">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Bhavi Creations</title>
    <link rel="icon" href="assests/images/Bhavi_Creations/best_digital_marketing_fav_blue logo_bhavi_creations.webp"
        type="image/x-icon">

    <link rel="stylesheet" href="assests/about.css">

    <link rel="stylesheet" href="assests/about_animation.css">
    <link rel="stylesheet" href="assests/footer_animations.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-lYFkg6eZ2q7hnkxZ9pPt2K/CszkQzPLhtlDwe2lnJQmI+iY9GM1f3tmzxoTfwUKl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="path_to_bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assests/branding.css">

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap'); */

        @media (max-width: 768px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* display 3 */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-right.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(33.333%);
            }

            .carousel-inner .carousel-item-left.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-33.333%);
            }
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0);
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 338px;
            perspective: 1000px;
            font-family: sans-serif;
        }

        .title {
            font-size: 1.5em;
            font-weight: 900;
            text-align: center;
            margin: 0;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border: 1px solid coral;
            border-radius: 1rem;
        }

        .flip-card-front {
            background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%,
                    rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
            color: coral;
        }

        .flip-card-back {
            background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%,
                    bisque 40%, rgb(255, 185, 160) 78%);
            color: white;
            transform: rotateY(180deg);
        }

        /* .img-fluid {
            width: auto;
            height: 350px;
        } */








        .team_devision_btn {
            position: relative;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;
            background: #4c83fa;
            font-size: 17px;
            font-weight: 1000;
            color: #ffffff;
            border: 3px solid #4c83fa;
            border-radius: 50px;
            box-shadow: 0 0 0 #ffffff;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        .star-1 {
            position: absolute;
            top: 20%;
            left: 20%;
            width: 25px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 1s cubic-bezier(0.05, 0.83, 0.43, 0.96);
        }

        .star-2 {
            position: absolute;
            top: 45%;
            left: 45%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 1scubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-3 {
            position: absolute;
            top: 40%;
            left: 40%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 1s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-4 {
            position: absolute;
            top: 20%;
            left: 40%;
            width: 8px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-5 {
            position: absolute;
            top: 25%;
            left: 45%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 0.6s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-6 {
            position: absolute;
            top: 5%;
            left: 50%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 0.8s ease;
        }

        .team_devision_btn:hover {
            background: transparent;
            color: #4c83fa;
            box-shadow: 0 0 0px #4c83fa;
        }

        .team_devision_btn:hover .star-1 {
            position: absolute;
            top: -80%;
            left: -30%;
            width: 25px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-2 {
            position: absolute;
            top: -0%;
            left: 10%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-3 {
            position: absolute;
            top: 55%;
            left: 25%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-4 {
            position: absolute;
            top: 30%;
            left: 80%;
            width: 8px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-5 {
            position: absolute;
            top: 25%;
            left: 115%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-6 {
            position: absolute;
            top: 5%;
            left: 60%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }


        .fil0 {
            fill: #4c83fa;
        }



        .section3 {
            background-color: #FFF1E1;
            padding-top: 100px;
            padding-bottom: 50px;
        }



        .sec_3_btn_team {
            display: inline-block;
            border-radius: 50px;
            border: none;
            background-image: linear-gradient(to bottom, #85c7ee, #0579ee);
            color: white;
            font-family: inherit;
            text-align: center;
            font-size: 13px;

            width: 10em;
            padding: 1em;
            transition: all 0.4s;
            cursor: pointer;
        }

        .sec_3_btn_team span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.4s;
        }

        .sec_3_btn_team span:after {
            content: 'Our Team';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.7s;
        }

        .sec_3_btn_team:hover span {
            padding-right: 5em;
        }

        .sec_3_btn_team:hover span:after {
            opacity: 4;
            right: 0;
        }

        .sec3-heading {
            font-family: Poppins;
            font-size: 36px;
            font-weight: 700;
            line-height: 54px;
            letter-spacing: 0em;
            text-align: left;
            color: #0C5077;
        }

        .sec3-paragraph {
            font-family: Poppins;
            font-size: 19px;
            font-weight: 500;
            line-height: 29px;
            letter-spacing: 0em;
            text-align: left;
            color: #3A3A3A;

        }




        .card {
            background-color: lightgrey;
            /* width: 250px;
      padding: 20px; */
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.03);
            background-color: #e0f7fa;

            /* light cyan on hover */
            box-shad img,
            video {
                max-width: 100%;
                height: auto;
            }

            @media (min-width: 1200px) {

                .container,
                .container-lg,
                .container-md,
                .container-sm,
                .container-xl {
                    max-width: 1300px !important;
                }
            }





            @media (min-width: 768px) and (max-width: 992px) {

                .container,
                .container-lg,
                .container-md,
                .container-sm,
                .container-xl {
                    max-width: 880px !important;
                }
            }

            @media (max-width:768px) {
                .team_devision_btn {
                    font-size: 14px;
                    /* Reduce font size */
                    padding: 6px 12px;
                    /* Smaller padding */

                }

            }
    </style>

    <style>
        .media-tab-buttons button {
            width: 100%;
            padding: 10px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }



        .media-tab-buttons button.active {
            background-color: #007BFF;

            /* background-color: #28323c; */
            color: #fff;
        }

        @media (max-width:768px) {
            .media-tab-buttons button.active {
                font-size: 12px !important;
            }
        }

        .media-tab-content {
            display: none;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .media-tab-content.active {
            display: block;
        }



        .media-box {
            margin: 10px 0;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        @media (max-width:768px) {
            .media-tab-content video {
                width: 100% !important;
            }

        }

        /* size  */

        .media-tab-content {
            display: none;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .media-tab-content.active {
            display: flex;
        }

        .equal-media {
            height: 250px;
            width: auto;
            object-fit: cover;
        }

        .media-tab-btn {
            padding: 10px 20px;
            margin: 5px;
            background-color: #ddd;
            border: none;
            cursor: pointer;
        }

        .media-tab-btn.active {
            background-color: #333;
            color: white;
        }

        @media (min-width:992px) and (max-width:1200px) {
            .logo_section {
                font-size: 10px !important;
            }

        }

        @media (min-width:992px) {
            .fullblogs_section {
                margin-top: -120px;
            }
        }

               @media (max-width:991px) {
            .fullblogs_section {
                margin-top: -200px;
              
            }
        }


        
    </style>


    <style>
        .post-box {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box-content {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .post-desc {
            flex-grow: 1;
        }

        .blog-date {
            margin-top: 10px;
            font-size: 13px;
            background: #000;
            color: #fff;
            display: inline-block;
            padding: 6px 12px;
            border-radius: 4px;
            font-weight: 600;
        }
    </style>


    <?php include('./navbar.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .fullblogs_section {
            background-color: white;
            padding-bottom: 50px;
        }

        /* LIVE SERVER FIX: Force Default Gold */
        .content-wrapper {
            color: #051aff !important;
        }

        /* Database nundi vacche default tags ki Gold apply avthundi */
        .content-wrapper p,
        .content-wrapper span,
        .content-wrapper div,
        .content-wrapper li,
        .content-wrapper h1,
        .content-wrapper h2,
        .content-wrapper h3,
        .content-wrapper h4,
        .content-wrapper h5,
        .content-wrapper h6 {
            color: inherit;
        }

        /* Admin panel text editor automatic ga black color (#000000) add chesthe, 
           manamu ikkada Gold tho override chestunnam. 
           But meeru vera colors (Red, Blue etc.) isthe avi work avthayi. */
        .content-wrapper [style*="color: #000000"],
        .content-wrapper [style*="color: rgb(0, 0, 0)"],
        .content-wrapper [style*="color: black"] {
            color: #000000 !important;
        }

        .blog-title {
            color: black;
            font-weight: 800;
        }

        .badge_service_name {
            background-color: gold;
            color: black;
            font-weight: bold;
            border-radius: 5px;
        }

        .lang-btn.active {
            background: gold !important;
            color: black !important;
            border: 2px solid gold !important;
        }

        /* Swiper & Cards */
        .custom-card {
            background: #111;
            border: 1px solid #333;
            transition: 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .custom-card:hover {
            border-color: gold;
        }

        .custom-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .blog-card-text {
            color: gold;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
        }

        .swiper-slide {
            height: auto !important;
            padding-bottom: 20px;
        }

        .blogs_color {
            color: black !important;
        }

        .fullblogs_section_1 {
            background-color: white !important;
        }
    </style>
</head>

<body>

    <?php if (file_exists('header.php')) include 'header.php'; ?>

    <main class="fullblogs_section">
        <div class="container py-5">
            <div class="d-flex justify-content-center mb-4">
                <button id="english-btn" class="lang-btn active btn btn-outline-warning">English</button>
                <button id="telugu-btn" class="lang-btn ms-3 btn btn-outline-warning">తెలుగు</button>
            </div>

            <?php if (!empty($service)): ?>
                <div class="text-center mb-4">
                    <span class="badge_service_name px-4 py-2"><?= htmlspecialchars($service) ?></span>
                </div>
            <?php endif; ?>

            <div class="text-center mb-5">
                <?php if (!empty($video)): ?>
                    <video controls class="w-100 shadow" style="max-width:800px; border-radius:15px;">
                        <source src="./admin/uploads/videos/<?= $video ?>" type="video/mp4">
                    </video>
                <?php elseif (!empty($main_image)): ?>
                    <img src="./admin/uploads/photos/<?= $main_image ?>" class="shadow" style="max-height:500px; width:auto; border-radius: 15px;">
                <?php endif; ?>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="blog-title text-center mb-4">
                        <span id="title-en"><?= $title ?></span>
                        <span id="title-te" style="display:none;"><?= $telugu_title ?></span>
                    </h1>

                    <div class="content-wrapper">
                        <div class="main-content fs-5 mb-4">
                            <div id="main-en"><?= $main_content ?></div>
                            <div id="main-te" style="display:none;"><?= $telugu_main_content ?></div>
                        </div>

                        <div class="full-content">
                            <div id="full-en"><?= $full_content ?></div>
                            <div id="full-te" style="display:none;"><?= $telugu_full_content ?></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <p id="like-btn"> </p>
                        <p id="dislike-btn"></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="fullblogs_section_1">
        <div class="container">
            <h1 class="d-flex justify-content-center py-5 blogs_color">LATEST BLOGS</h1>
            <div class="swiper blog-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $latest_sql = "SELECT id, title, main_image, slug FROM blogs ORDER BY created_at DESC LIMIT 10";
                    $latest_res = $conn->query($latest_sql);
                    if ($latest_res->num_rows > 0) {
                        while ($row = $latest_res->fetch_assoc()) {
                            $sidebar_img = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "default.png";
                            $sidebar_title = strlen($row['title']) > 50 ? substr(strip_tags($row['title']), 0, 50) . '...' : strip_tags($row['title']);
                            $blog_url = "fullblog.php?id=" . (!empty($row['slug']) ? $row['slug'] : $row['id']);
                            echo "
                            <div class='swiper-slide'>
                                <div class='custom-card p-3 text-center'>
                                    <img src='{$sidebar_img}' alt='Blog Image'>
                                    <a href='{$blog_url}' class='blog-card-text d-block'>{$sidebar_title}</a>
                                </div>
                            </div>";
                        }
                    }
                    ?>
                </div>
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Language Toggle Logic
        const enBtn = document.getElementById("english-btn");
        const teBtn = document.getElementById("telugu-btn");

        function switchLang(lang) {
            const isEn = (lang === 'en');
            document.getElementById("title-en").style.display = isEn ? "inline" : "none";
            document.getElementById("main-en").style.display = isEn ? "block" : "none";
            document.getElementById("full-en").style.display = isEn ? "block" : "none";

            document.getElementById("title-te").style.display = isEn ? "none" : "inline";
            document.getElementById("main-te").style.display = isEn ? "none" : "block";
            document.getElementById("full-te").style.display = isEn ? "none" : "block";

            enBtn.classList.toggle('active', isEn);
            teBtn.classList.toggle('active', !isEn);
        }

        enBtn.onclick = () => switchLang('en');
        teBtn.onclick = () => switchLang('te');

        // Voting system Logic
        const blogId = <?= json_encode($blog_id) ?>;
        const likeBtn = document.getElementById("like-btn");
        const dislikeBtn = document.getElementById("dislike-btn");

        if (localStorage.getItem("voted_" + blogId)) {
            likeBtn.disabled = dislikeBtn.disabled = true;
        }

        async function castVote(type) {
            const res = await fetch("update_vote.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `blog_id=${blogId}&vote_type=${type}`
            });
            const data = await res.json();
            if (data.success) {
                document.getElementById("like-count").innerText = data.new_likes;
                document.getElementById("dislike-count").innerText = data.new_dislikes;
                localStorage.setItem("voted_" + blogId, true);
                likeBtn.disabled = dislikeBtn.disabled = true;
            }
        }

        likeBtn.onclick = () => castVote('like');
        dislikeBtn.onclick = () => castVote('dislike');

        // Swiper Init
        new Swiper(".blog-swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>

</html>
<?php $conn->close(); ?>