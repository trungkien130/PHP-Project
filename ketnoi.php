<?php
//kết nối đến máy chủ csdl
$conn = new mysqli("localhost", "root", "", "project");
if ($conn->error) {
    echo "Lỗi kết nối, " . $conn->error;
} else {
}
