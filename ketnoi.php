<?php 
//kết nối đến máy chủ csdl
$conn = new mysqli("localhost","root","","project");
if(!$conn){
    echo"<h2>Lỗi: ".mysqli_error($conn)."</h2>";
}else{}

?>
