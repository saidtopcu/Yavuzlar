<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Your custom CSS file -->

    <!-- Add Bootstrap 5 JavaScript and other scripts if needed -->
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">TAHA OZEN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RED TEAM NEDİR.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="person-info-wrapper bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/1639073382825.jpg" alt="" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-7">
                    <div class="person-job fs-5">PENTESTER</div>
                    <h1 class="person-name mt-3 mb-4">TAHA OZEN</h1>
                    <div class="person-text">
                        Ben Taha şu an red team alanında uğraşıyorum. Go dilinde red team tools yazmayı çalışıyorum.
                    </div>
                    <div class="person-social-link mt-4">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://twitter.com/tahaoze23" target="_blank"><i
                                        class="flaticon-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UC3gjpeOQA_2acNfEtpIQauQ" target="_blank"><i
                                        class="flaticon-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/tahaozen/" target="_blank"><i
                                        class="flaticon-linkedin-1"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/DZXX21" target="_blank"><i class="flaticon-github"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="mailto:tahaeryetisozen@gmail.com"><i class="flaticon-email"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-post-wrapper py-5">
        <div class="container">
            <div class="blog-post-container">
                <h2 class="blog-post-top-title mb-4">Blog</h2>
                <div class="row">
                <?php

                foreach ($blogPosts as $post) {
                    $title = $post['title'];
                    $description = $post['description'];
                    $date = $post['date'];
                    $author = $post['author'];
                    ?>
                    <div class="col-md-6 mb-4">
                        <a href="blog-text.html" class="text-decoration-none">
                            <div class="blog-post-thumbnail">
                                <img src="assets/img/thumbnail.png" alt="" class="img-fluid rounded">
                            </div>
                            <div class="blog-post-text mt-3">
                                <h3 class="blog-post-title custom-title-style"><?php echo $title; ?></h3>
                                <p class="blog-post-description custom-description-style"><?php echo $description; ?>
                                </p>
                                <div class="blog-post-meta-info custom-meta-style">
                                    <ul class="list-inline">
                                        <li class="list-inline-item blog-post-date"><?php echo $date; ?></li>
                                        <li class="list-inline-item blog-post-meta-dot">·</li>
                                        <li class="list-inline-item blog-post-author"><?php echo $author; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <!-- ... (Footer section remains the same) ... -->
    </footer>

</body>

</html>