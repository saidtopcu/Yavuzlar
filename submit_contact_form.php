<?php
// MySQL bağlantı bilgilerinizi burada ayarlayın
$host = "localhost"; // Veritabanı sunucusu (genellikle localhost)
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$database = "yavuzlar"; // Kullanmak istediğiniz veritabanı adı

// Bağlantı oluşturma
$connection = mysqli_connect($host, $username, $password, $database);

// Bağlantı kontrolü
if (mysqli_connect_errno()) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Formdan gelen verileri alınması ve güvenliği sağlanması
    $fullname = mysqli_real_escape_string($connection, $_POST["fullname"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $subject = mysqli_real_escape_string($connection, $_POST["subject"]);
    $message = mysqli_real_escape_string($connection, $_POST["message"]);

    // Verileri veritabanına ekleme
    $query = "INSERT INTO iletisim_formu (fullname, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')";

    if (mysqli_query($connection, $query)) {
        echo "<h1>Teşekkürler</h1>";
        echo "<p>{$fullname}, teşekkürler! İletişiminiz alındı.</p>";
        echo '<script>
        setTimeout(function() {
            window.location.href = "contact.html";
        }, 3000);
      </script>';
    } else {
        echo "<h1>Bir hata oluştu</h1>";
        echo "<p>İletişiminiz kaydedilirken bir sorun oluştu. Lütfen daha sonra tekrar deneyin.</p>";
    }
}

// Bağlantıyı kapatma
mysqli_close($connection);
?>