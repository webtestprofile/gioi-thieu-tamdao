<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Địa chỉ email nhận liên hệ
    $to = "btpvp2001@gmail.com";  
    $subject = "Liên hệ từ website Tam Đảo";
    $body = "Tên: $name\nEmail: $email\n\nNội dung:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Cảm ơn $name, tin nhắn đã được gửi!";
    } else {
        echo "❌ Xin lỗi, gửi thất bại. Vui lòng thử lại.";
    }
}
?>
