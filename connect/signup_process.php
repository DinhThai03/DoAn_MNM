<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $conn = connectdb(); // Kết nối đến cơ sở dữ liệu

    if ($conn) {
        // Lấy thông tin từ form
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['userpass'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // Kiểm tra xem username đã tồn tại chưa
        $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user) {
            echo "Username đã tồn tại. Vui lòng chọn tên khác.";
        } else {
            // Chuẩn bị truy vấn để chèn thông tin người dùng
            $sql = "INSERT INTO taikhoan (username,name ,password,email,phone,address) VALUES (:username, :name,:password,:email,:phone,:address)";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute(['username' => $username, 'name' => $name, 'password' => $password, 'email' => $email, 'phone' => $phone, 'address' => $address])) {
                echo "Đăng ký thành công!";
                header('location: ./index.php');
            } else {
                echo "Có lỗi xảy ra!";
            }
        }
    } else {
        echo "Kết nối cơ sở dữ liệu thất bại!";
    }
}
