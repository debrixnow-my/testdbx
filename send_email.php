<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Ganti dengan alamat email Anda
    $to = "brutalzh@gmail.com";
    $subject = "Pesan dari $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
