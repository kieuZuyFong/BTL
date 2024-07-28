<?php
    include 'connect.php';
    $id = $_GET['id'];
    echo $_GET['id'];
    $sql = "DELETE FROM `new` WHERE id = $id";
    echo $sql;
    $result = $conn -> query($sql);
    echo $result;
    if ($result == TRUE){
        echo 'Xoa thanh cong';
        echo "<script>
        alert ('Xoa thanh cong');
        window.location.href = 'index.php?page_layout=thongtin';
        </script>";
    }
?>