<?php
    include 'connect.php'; 

    $sql = "SELECT * FROM `new`";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
    } else {
?>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Chức năng</th>
        </tr>
<?php
        while ($row = mysqli_fetch_array($result)) {
?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo "<img src='".$row["picture"]."' style='width:200px;'>" ?></td>
            <td><a href="index.php?page_layout=update&id=<?php echo $row["id"]?>">Sửa</a>|<a href="index.php?page_layout=delete&id=<?php echo $row["id"]?>">Xóa</a></td>
        </tr>
<?php
        }
?>
    </table>
<?php
    }
?>
