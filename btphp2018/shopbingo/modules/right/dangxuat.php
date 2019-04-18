<?php
session_start(); //kiểm tra xem có session nào đang mở không
session_destroy(); //xoá session
header("location:index.php"); //về lại trang index sau khi logout
exit();?>