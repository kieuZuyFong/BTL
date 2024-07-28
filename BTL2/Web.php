<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website</title>
        <link rel="stylesheet"  href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            include 'connect.php';
            $sql = "SELECT * FROM `new`";
            $result = mysqli_query($conn, $sql);
        ?> 
    </head>
    <body class="">
        <div class="top_menu">
            <a class="active" href="index.php?page_layout=trangchu">Trang chủ</a>
            <a href="" title="PC">PC</a>
            <a href="" title="eSport">eSport</a>
            <a href="" title="Game online">Game online</a>
            <a href="index.php?page_layout=thongtin" title="Thông tin">Thông tin</a>
            <a href="index.php?page_layout=them" title="capnhat">Cập nhật</a>
            <?php
                if(isset($_GET['page_layout'])){
                    switch($_GET['page_layout']){
                        case 'trangchu':
                            include 'Web.php';
                            break;
                        case 'them':
                            include 'insert.php';
                            break;
                    }
                }
            ?>
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
        <div id="banner">
            <img src="pic/br.png"
        </div>
        <div id="main">
            <div id="left">
                <div>
                    <h3>TIN MỚI</h3>
                </div>
                <table border="1">
                <ul>
                    <li>
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                    ?>    
                        <a href="D:\Downloads\Study\Web\BTL/tin2.html">
                        <tr>
                            <th></th>
                            <th><?php echo $row['title'] ?></th>
                        </tr>
                        <tr>
                            <th><?php echo "<img src='".$row["picture"]."' style='width:200px;'>" ?></th>
                            <th><?php echo $row['text'] ?></th>
                        </tr>
                        </a>
                    <?php 
                        }
                    ?>    
                    </li>
                </ul>
                </table>
            </div>
            <div id="right">
                <div class="menu_right">
                    <h3>Danh mục</h3>
                    <ul>
                        <li><a href="D:\Files\XAMPP\htdocs\BTL2.Web.php">Trang chủ</a></li>
                        <li><a href="D:\Files\XAMPP\htdocs\BTL2.Web.php">eSport</a></li>
                        <li><a href="D:\Files\XAMPP\htdocs\BTL2.Web.php">PC</a></li>
                        <li><a href="D:\Files\XAMPP\htdocs\BTL2.Web.php">Game online</a></li>
                        <li><a href="D:\Files\XAMPP\htdocs\BTL2.Web.php">Liên hệ</a></li>
                        <li><a href="">Donate</a></li>
                        <li><a href="">Về chúng tôi</a></li>
                        <li><a href="">Dịch vụ</a></li>
                        <li><a href="">Chính sách</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="container">
            <!--Bắt Đầu Nội Dung Giới Thiệu-->
            <div class="noi-dung about">
                <h2>Về Chúng Tôi</h2>
                <p>Nhóm 6

                </p>
            </div>
            <!--Kết Thúc Nội Dung Giới Thiệu-->
            <!--Bắt Đầu Nội Dung Đường Dẫn-->
            <div class="noi-dung links">
                <h2>Đường Dẫn</h2>
                <ul>
                    <li><a href="D:\Files\XAMPP\htdocs\BTL2.Web.php">Trang Chủ</a></li>
                    <li><a href="#">Về Chúng Tôi</a></li>
                    <li><a href="#">Thông Tin Liên Lạc</a></li>
                    <li><a href="#">Dịch Vụ</a></li>
                    <li><a href="#">Điều Kiện Chính Sách</a></li>
                </ul>
            </div>
            <!--Kết Thúc Nội Dung Đường Dẫn-->
            <!--Bắt Đâu Nội Dung Liên Hệ-->
            <div class="noi-dung contact">
                <h2>Thông Tin Liên Hệ</h2>
                <ul class="info">
                    <li>
                        <span class="fa fa-map-marker"></span>
                        <span>Trường Đại học Mỏ - Địa chất<br />
                            Số 18 Phố Viên - Phường Đức Thắng - Q. Bắc Từ Liêm - Hà Nội<br />
                            Việt Nam</span>
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        <p><a href="#">+84 123 456 789</a>
                            <br />
                            <a href="#">+84 987 654 321</a></p>
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <p><a href="#">diachiemail@gmail.com</a></p>
                   </li>
                    
                </ul>
            </div>
            <!--Kết Thúc Nội Dung Liên Hệ-->
        </div>
    </footer>
        <script src="switch.js"></script>
</html>