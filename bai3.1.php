<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAI 3</title>
</head>
<body>
<?php

//BAI TAP SLIDE TRANG 6

/*SELECT*/
$dbh = mysqli_connect('localhost', 'root','', 'bai3'); 
// Kết nối tới MySQL server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

if (!mysqli_select_db($dbh,'bai3'))     
die("Unable to select database: " . mysqli_error());
// Thông báo lỗi nếu chọn CSDL thất bại

$sql_stmt = "SELECT * FROM my_contacts"; 
// Câu lệnh select

$result = mysqli_query($dbh,$sql_stmt);
// Thực thi câu lệnh SQL
 
if (!$result)     
    die("Database access failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi thất bại
    
    $rows = mysqli_num_rows($result); 
    // Lấy số hàng trả về

if ($rows) {
    while ($row = mysqli_fetch_array($result)) {         
        echo 'ID: ' . $row['id'] . '<br>';         
        echo 'Full Names: ' . $row['full_names'] . '<br>';        
        echo 'Gender: ' . $row['gender'] . '<br>';         
        echo 'Contact No: ' . $row['contact_no'] . '<br>';         
        echo 'Email: ' . $row['email'] . '<br>';         
        echo 'City: ' . $row['city'] . '<br>';         
        echo 'Country: ' . $row['country'] . '<br><br>';     
    } 
} 
mysqli_close($dbh); // Đóng kết nối CSDL

/* INSERT */
$dbh = mysqli_connect('localhost', 'root','', 'bai3'); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh, 'bai3'))     
    die("Unable to select database: " . mysql_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Adding record failed: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Poseidon has been successfully added to your contacts list".'<br>';
    }

    mysqli_close($dbh); // Đóng kết nối CSDL 

    /*UPDATE*/
    $dbh = mysqli_connect('localhost', 'root','', 'bai3'); 
    // Kết nối tới MySQL Server
    
    if (!$dbh)    
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh,'bai3'))     
    die("Unable to select database: " . mysql_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại
    } else {
        echo "ID number 5 has been successfully updated".'<br>';
    }
    
    mysqli_close($dbh); //close the database connection
    
    /*DELETE*/
    
    $dbh = mysqli_connect('localhost', 'root','', 'bai3'); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại

    if (!mysqli_select_db($dbh,'bai3'))     
    die("Unable to select database: " . mysqli_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại

    $id = 4; 
    // ID của Venus trong CSQL

    $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    // Câu lệnh SQL Delete

    $result = mysqli_query($dbh,$sql_stmt); 
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại 
    } else {
        echo "ID number $id has been successfully deleted".'<br>';
    }

    mysqli_close($dbh); // Đóng kết nối CSDL



?> 

</body>
</html>


