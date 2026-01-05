<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bhavi Creation Pvt Ltd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .section-box {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <form action="submit.php" method="post">

            <h3 class="text-center mb-4">Bhavi Creation Pvt Ltd</h3>

            <!-- BASIC DETAILS -->
            <div class="section-box">
                <h5>Basic Details</h5>
                <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
                <input type="text" name="phone" class="form-control mb-2" placeholder="Phone Number" required>
                <textarea name="address" class="form-control" placeholder="Address"></textarea>
            </div>

            <!-- PHOTO -->
            <div class="section-box">
                <h5>Photos</h5>

                <div>
                    <label><input type="radio" name="photo_count" value="4" onclick="showPhotoType()"> 4</label>
                    <label><input type="radio" name="photo_count" value="8" onclick="showPhotoType()"> 8</label>
                    <label><input type="radio" name="photo_count" value="12" onclick="showPhotoType()"> 12</label>
                    <label><input type="radio" name="photo_count" value="16" onclick="showPhotoType()"> 16</label>
                    <label><input type="radio" name="photo_count" value="custom" onclick="showPhotoCustom()"> Custom</label>
                </div>

                <div id="photo_custom" style="display:none;">
                    <textarea name="photo_custom_msg" class="form-control mt-2" placeholder="Custom photo requirement"></textarea>
                </div>

                <div id="photo_type" style="display:none;" class="mt-2">
                    <label><input type="radio" name="photo_type" value="Basic"> Basic</label>
                    <label><input type="radio" name="photo_type" value="Standard"> Standard</label>
                    <label><input type="radio" name="photo_type" value="Premium"> Premium</label>
                </div>
            </div>

            <!-- VIDEOS -->
            <div class="section-box">
                <h5>Videos</h5>

                <div>
                    <label><input type="radio" name="video_count" value="4" onclick="showVideoType()"> 4</label>
                    <label><input type="radio" name="video_count" value="8" onclick="showVideoType()"> 8</label>
                    <label><input type="radio" name="video_count" value="12" onclick="showVideoType()"> 12</label>
                    <label><input type="radio" name="video_count" value="16" onclick="showVideoType()"> 16</label>
                    <label><input type="radio" name="video_count" value="custom" onclick="showVideoCustom()"> Custom</label>
                </div>

                <div id="video_custom" style="display:none;">
                    <textarea name="video_custom_msg" class="form-control mt-2"></textarea>
                </div>

                <div id="video_type" style="display:none;" class="mt-2">
                    <label><input type="radio" name="video_type" value="Basic"> Basic</label>
                    <label><input type="radio" name="video_type" value="Standard"> Standard</label>
                    <label><input type="radio" name="video_type" value="Premium"> Premium</label>
                </div>
            </div>

            <!-- REELS -->
            <div class="section-box">
                <h5>Reels</h5>

                <div>
                    <label><input type="radio" name="reels_count" value="4" onclick="showReelsType()"> 4</label>
                    <label><input type="radio" name="reels_count" value="8" onclick="showReelsType()"> 8</label>
                    <label><input type="radio" name="reels_count" value="12" onclick="showReelsType()"> 12</label>
                    <label><input type="radio" name="reels_count" value="16" onclick="showReelsType()"> 16</label>
                    <label><input type="radio" name="reels_count" value="custom" onclick="showReelsCustom()"> Custom</label>
                </div>

                <div id="reels_custom" style="display:none;">
                    <input type="number" name="reels_custom_msg" class="form-control mt-2" placeholder="No of reels">
                </div>

                <div id="reels_type" style="display:none;" class="mt-2">
                    <label><input type="radio" name="reels_type" value="Basic"> Basic</label>
                    <label><input type="radio" name="reels_type" value="Standard"> Standard</label>
                    <label><input type="radio" name="reels_type" value="Premium"> Premium</label>
                </div>
            </div>

            <!-- WEBSITE -->
            <div class="section-box">
                <h5>Website</h5>
                <label><input type="radio" name="website_type" value="Basic"> Basic</label>
                <label><input type="radio" name="website_type" value="Standard"> Standard</label>
                <label><input type="radio" name="website_type" value="Premium"> Premium</label>
                <label><input type="radio" name="website_type" value="Custom"> Custom</label>
            </div>

            <!-- SEO -->
            <div class="section-box">
                <h5>SEO</h5>
                <label><input type="radio" name="seo_option" value="Need"> Need</label>
                <label><input type="radio" name="seo_option" value="No Need"> No Need</label>
            </div>

            <!-- SOCIAL MEDIA -->
            <div class="section-box">
                <h5>Social Media Handling</h5>
                <select class="form-select" multiple name="social_media[]">
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>YouTube</option>
                    <option>LinkedIn</option>
                    <option>Twitter</option>
                    <option>Pintrest</option>
                    <option>Quera</option>
                    <option>Twitter</option>
                </select>
            </div>

            <!-- PAYMENT -->
            <div class="section-box">
                <h5>Payment Type</h5>
                <label><input type="radio" name="payment_type" value="Quarterly"> Quarterly</label>
                <label><input type="radio" name="payment_type" value="Half-Yearly"> Half-Yearly</label>
                <label><input type="radio" name="payment_type" value="Yearly"> Yearly</label>
            </div>

            <!-- GST -->
            <div class="section-box">
                <h5>GST</h5>
                <label><input type="radio" name="gst_option" value="With GST"> With GST</label>
                <label><input type="radio" name="gst_option" value="Without GST"> Without GST</label>
            </div>

            <button class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script>
        function showPhotoType() {
            document.getElementById('photo_type').style.display = 'block';
            document.getElementById('photo_custom').style.display = 'none';
        }

        function showPhotoCustom() {
            document.getElementById('photo_custom').style.display = 'block';
            document.getElementById('photo_type').style.display = 'block';
        }

        function showVideoType() {
            document.getElementById('video_type').style.display = 'block';
            document.getElementById('video_custom').style.display = 'none';
        }

        function showVideoCustom() {
            document.getElementById('video_custom').style.display = 'block';
            document.getElementById('video_type').style.display = 'block';
        }

        function showReelsType() {
            document.getElementById('reels_type').style.display = 'block';
            document.getElementById('reels_custom').style.display = 'none';
        }

        function showReelsCustom() {
            document.getElementById('reels_custom').style.display = 'block';
            document.getElementById('reels_type').style.display = 'block';
        }
    </script>
</body>

</html>