<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "havvakibar30@gmail.com"; 
    $subject = "Geri Dönüş Formu Mesajı";
    $body = "Ad: $name\nE-posta: $email\n\nMesaj:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mesajınız başarıyla gönderildi.'); window.location.href = 'gerid.html';</script>";
    } else {
        echo "<script>alert('Mesaj gönderilirken bir hata oluştu. Lütfen tekrar deneyin.'); window.location.href = 'gerid.html';</script>";
    }
} else {
    header("Location: gerid.html");
    exit;
}
?>
