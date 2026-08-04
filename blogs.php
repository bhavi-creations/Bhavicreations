<?php
include './db.connection/db_connection.php';

// Service filter
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Query
$sql = "SELECT id, slug, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
    $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

$stmt = $conn->prepare($sql);

if (!empty($service)) {
    $stmt->bind_param("s", $service);
}

$stmt->execute();
$result = $stmt->get_result();
?>

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




        /* Blog Section Styles */
        .blog_section_stylings {
            background-color: #f8f9fa;
            padding: 40px 0;
        }

        .blog_section_stylings .text-center h1 {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 1px;
            border-radius: 50px !important;
            padding: 12px 40px !important;
        }

        /* Card Container */
        .blog-sidebar-list {
            max-width: 1200px;
        }

        /* Grid Items */
        .grid-item {
            margin-bottom: 30px;
        }

        /* Card Box */
        .card_bg_div_box {
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card_bg_div_box:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        /* Image Styling */
        .card_bg_div_box figure {
            margin: 0;
            overflow: hidden;
            position: relative;
            padding-top: 65%;
        }

        .blog_box_image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card_bg_div_box:hover .blog_box_image {
            transform: scale(1.05);
        }

        /* Box Content */
        .box-content {
            padding: 20px 25px 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Title Styling */
        .box-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
            text-decoration: none;
            line-height: 1.4;
            transition: color 0.3s ease;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 52px;
        }

        .box-title:hover {
            color: #007bff;
        }

        /* Description */
        .post-desc {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.6;
            flex: 1;
            margin: 15px 0 20px !important;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Read More Button */
        .blog_main_btn {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #ffffff;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            align-self: flex-start;
            margin-top: auto;
        }

        .blog_main_btn:hover {
            background: linear-gradient(135deg, #0056b3, #003d80);
            transform: translateX(5px);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        }

        .blog_main_btn:active {
            transform: scale(0.95);
        }

        /* Blog Date */
        .blog-date {
            color: #6c757d;
            font-size: 0.85rem;
            margin-top: 15px;
            margin-bottom: 0;
            padding-top: 10px;
            border-top: 1px solid #e9ecef;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .blog-date::before {
            content: '🕒';
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .grid-item {
                margin-bottom: 25px;
            }
        }

        @media (max-width: 768px) {
            .blog_section_stylings {
                padding: 30px 0;
            }

            .blog_section_stylings .text-center h1 {
                font-size: 2rem;
                padding: 10px 30px !important;
            }

            .box-content {
                padding: 18px 20px 20px;
            }

            .box-title {
                font-size: 1.1rem;
                min-height: 44px;
            }

            .blog_main_btn {
                padding: 8px 20px;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .blog_section_stylings .text-center h1 {
                font-size: 1.6rem;
                padding: 8px 25px !important;
            }

            .card_bg_div_box figure {
                padding-top: 60%;
            }

            .box-content {
                padding: 15px 15px 18px;
            }

            .post-desc {
                font-size: 0.9rem;
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

    <main class="blog_section_stylings">
        <div class="text-center">
            <h1 class="d-inline-block px-4 py-2 bg-primary text-white rounded">
                Blogs
            </h1>
        </div>

        <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid row">

                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                                // ✅ Image path
                                $image_path = !empty($row['main_image'])
                                    ? "admin/uploads/photos/" . htmlspecialchars($row['main_image'])
                                    : "default_image.png";

                                // ✅ SEO URL (slug)
                                $blog_link_val = !empty($row['slug']) ? urlencode($row['slug']) : $row['id'];
                                $final_url = "fullblog.php?id=" . $blog_link_val;

                                // ✅ Date format
                                $formatted_date = date("d M Y, h:i A", strtotime($row['created_at']));

                                // ✅ Safe preview (Quill content → text)
                                $preview = substr(strip_tags(html_entity_decode($row['main_content'])), 0, 100);

                                echo "
              <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                  <div class='post-box card_bg_div_box'>
                      <figure>
                          <a href='{$final_url}'>
                              <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                          </a>
                      </figure>

                      <div class='box-content'>
                          <h5 class='box-title'>
                              <a class='box-title' href='{$final_url}'>" . htmlspecialchars($row['title']) . "</a>
                          </h5>

                          <p class='post-desc mt-3' style='text-align: justify;'>
                              {$preview}...
                          </p>

                          <a href='{$final_url}'>
                              <button class='blog_main_btn'>Read More..</button>
                          </a>

                          <!-- ✅ FIXED DATE ICON -->
                          <p class='blog-date'> {$formatted_date}</p>
                      </div>
                  </div>
              </div>";
                            }
                        } else {
                            echo "<p>No blog posts found.</p>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('./footer.php'); ?>

    <?php
    $stmt->close();
    $conn->close();
    ?>