<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet"  href="style.css"/>
</head>
<body>
<div class="top_menu">
            <a class="active" href="Web.php">Trang chủ</a>
            <a href="" title="PC">PC</a>
            <a href="" title="eSport">eSport</a>
            <a href="" title="Game online">Game online</a>
            <a href="index.php?page_layout=thongtin" title="Thông tin">Thông tin</a>
            <a href="index.php?page_layout=them" title="capnhat">Cập nhật</a>
            <button id="switch-mode">
                <i class="bi bi-moon-stars-fill"></i>
            </button>
            <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Tìm kiếm.." name="search">
                <button type="submit">Tìm kiếm</button>
              </form>
            </div>
        </div>
</body>
</html>
<?php
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'trangchu':
                include 'Web.php';
                break;
                case 'thongtin':
                    include 'thongtin.php';    
                    break;
                case 'them':
                    include 'insert.php';    
                    break;       
                case 'delete':
                    include 'delete.php';    
                    break;    
                case 'update':
                    include 'update.php';    
                    break; 
        }
    }
?>