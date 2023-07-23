<?php
// MySQL bağlantı bilgilerini burada ayarlayın
$host = "localhost";
$username = "root";
$password = "";
$database = "yavuzlar";

// Bağlantı oluşturma
$connection = mysqli_connect($host, $username, $password, $database);

// Bağlantı kontrolü
if (mysqli_connect_errno()) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

// Admin kullanıcılar tablosundan verileri çekme
$query_admin_users = "SELECT * FROM admin_users";
$result_admin_users = mysqli_query($connection, $query_admin_users);

// İletişim formundan gelen verileri çekme
$query_iletisim_formu = "SELECT * FROM iletisim_formu";
$result_iletisim_formu = mysqli_query($connection, $query_iletisim_formu);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Paneli</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="text-center mt-3">Hoş Geldiniz, Admin!</h1>
            <p class="text-center">YAVUZLAR</p>
        </div>
    </header>

    <main class="container mt-4">
        <!-- Admin Kullanıcılar Listesi -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3">Admin Kullanıcılar</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>E-posta</th>
                            <th>Şifre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Verileri admin_users tablosundan çekme ve tablo olarak listeleme
                        while ($row = mysqli_fetch_assoc($result_admin_users)) {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['password']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- İletişim Formu Mesajları Listesi -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-4 mb-3">İletişim Formu Mesajları</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Verileri iletisim_formu tablosundan çekme ve tablo olarak listeleme
                        while ($row = mysqli_fetch_assoc($result_iletisim_formu)) {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['message']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="logout.php" class="btn btn-primary">Çıkış Yap</a>
            </div>
        </div>
    </main>

    <footer>
        <!-- Footer content goes here -->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
