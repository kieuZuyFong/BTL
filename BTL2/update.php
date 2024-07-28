<?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql = "Select * FROM `new` WHERE id = '$id'";
?>
<form method="post">
            <div>
                <label for="">Tiêu đề</label>
                <input type="text" name="title" value = "<?php echo $title; ?>"><br>
                <label for="">Nội dung</label>
                <input type="text" name="text" value = "<?php echo $text; ?>"><br>
                <button type="submit" name="add">Xác nhận</button>
            </div>
        </form>
<?php
    include 'connect.php';
    if(isset($_POST['add'])) {
        $title = $_POST['title'];
        $text = $_POST['text'];

    if (isset($title) &&
        isset($text) && 
        !empty($title) && 
        !empty($text)
        
         ){
            $query = "UPDATE `new` SET `title`='$title', `text`='$text' WHERE `id`= $id;";
            if(mysqli_query($conn,$query)){
                echo"<script>
                alert('Cập nhật thành công');
                window.location.href = 'index.php?page_layout=thongtin';
                </script>";
            }
            else {
                echo "Chua them duoc";
            }           
        }else {
            if(!empty($title) ||
                !empty($text)) {
                echo"<h2 style=\"color: red\">Điền cho đủ vào</h2>";
            }
        }
    }
    
?>        