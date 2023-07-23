<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Text</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <!-- Header content here -->
            </div>
        </div>
    </header>

    <div class="blog-wrapper py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <?php
                    // MySQL bağlantı bilgilerinizi burada ayarlayın
                    $host = "localhost"; // Veritabanı sunucusu (genellikle localhost)
                    $username = "root"; // Veritabanı kullanıcı adı
                    $password = ""; // Veritabanı şifresi
                    $database = "yavuzlar"; // Kullanmak istediğiniz veritabanı adı

                    // Bağlantı oluşturma
                    $conn = mysqli_connect($host, $username, $password, $database);

                    // Bağlantı kontrolü
                    if (mysqli_connect_errno()) {
                        die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
                    }

                    // Include the fetch_blog.php file and pass $conn variable
                    require_once 'fetch_blog.php';
                    fetchBlogContent($conn); // Call the function and pass the $conn variable

                    // Bağlantıyı kapatma
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">
            <!-- Footer content here -->
        </div>
    </footer>

    <!-- Add Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
