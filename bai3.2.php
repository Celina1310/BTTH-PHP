<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAI 3</title>
</head>
<body>
<?php
//BAI TAP SILDE TRANG 14

// Them DL
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "bai3";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) VALUES (:full_names, :gender, :contact_no, :email, :city, :country)");
    
    $full_names = "Artemis";
    $gender = "Female";
    $contact_no = "456";
    $email = "artemis@olympus.mt.co";
    $city = "Delphi";
    $country = "Greece";

    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);

    $stmt->execute();
    echo "Dữ liệu đã được thêm vào bảng".'<BR>';
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage().'<BR>';
}

//Cap nhat DL
$contact_id = 1; // ID của bản ghi cần cập nhật

$stmt = $conn->prepare("UPDATE my_contacts SET city = :city WHERE id = :id");
$stmt->bindParam(':city', $new_city);
$stmt->bindParam(':id', $contact_id);

$new_city = "Olympia";

$stmt->execute();
echo "Dữ liệu đã được cập nhật".'<BR>';

// Xoa DL
$contact_id = 2; // ID của bản ghi cần xoá

$stmt = $conn->prepare("DELETE FROM my_contacts WHERE id = :id");
$stmt->bindParam(':id', $contact_id);

$stmt->execute();
echo "Dữ liệu đã được xoá".'<BR>';


// Hien thi DL
$stmt = $conn->prepare("SELECT * FROM my_contacts");
$stmt->execute();
$results = $stmt->fetchAll();

foreach ($results as $row) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Tên: " . $row['full_names'] . "<br>";
    echo "Giới tính: " . $row['gender'] . "<br>";
    echo "Số điện thoại: " . $row['contact_no'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Thành phố: " . $row['city'] . "<br>";
    echo "Quốc gia: " . $row['country'] . "<br><br>";
}
?>



</body>
</html>