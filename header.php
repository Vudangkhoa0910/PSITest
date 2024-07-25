<?php
// function to get the current page name
function PageName()
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$current_page = PageName();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="manifest" href="manifest.json" />
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


    <!-- A2HS -->

    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Manan Kanani">
    <meta name="apple-mobile-web-app-title" content="Manan Kanani">
    <meta name="theme-color" content="#202020">
    <meta name="msapplication-navbutton-color" content="#202020">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/index.html">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="images/favicons/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <nav>
        <div class="left-nav">
            <!-- <a href="index.php" class="logo"><img src="images/logos/PawFinder Logo_black_transparent.png" alt=""></a> -->
            <!-- <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a> -->
            <a href="index.php" class="logo"><img src="images/logos/logo-3.png" alt=""></a>
        </div>
        <div class="menu menu-close">
            <i class="ri-close-fill hide-pc" id="button-close"></i>
            <ul id="navMenus" class="w-nav-link">
                <li><a class="<?php echo $current_page == 'index.php' ? 'active' : NULL ?>" href="index.php"><b>Trang Chủ</b></a></li>
                <li><a class="<?php echo $current_page == 'about-us.php' ? 'active' : NULL ?>" href="about-us.php"><b>Về Chúng Tôi</b></a></li>
                <li><a class="<?php echo $current_page == 'lost-pet.php' ? 'active' : NULL ?>" href="lost-pet.php"><b>Sức Khoẻ & Làm Đẹp</b></a></li>
                <li><a class="<?php echo $current_page == 'found-pet.php' ? 'active' : NULL ?>" href="found-pet.php"><b>Tiện Ích</b></a></li>
                <li><a class="<?php echo $current_page == 'contact-us.php' ? 'active' : NULL ?>" href="contact-us.php"><b>Cửa Hàng</b></a></li>
                <!-- <li><a href="./admin">Admin</a></li> -->
            </ul>
        </div>

        <div class="right-nav">
            <button id="chat-button" class="btn-primary">Đăng Nhập / Đăng Ký</button>
            <i class="ri-menu-2-line hide-pc" id="button-open"></i>
        </div>

    </nav>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/scripts/script.js"></script>
    <script>
        $("#button-open").click(function() {
            $(".menu-close").toggleClass("menu-open");
        });

        $("#button-close").click(function() {
            $(".menu-close").toggleClass("menu-open");
        });
    </script>
    <script>
        //Login/Register
        document.getElementById('chat-button').addEventListener('click', function() {
            // Gọi hàm để mở hộp chat
            openChatBox();
        });

        function openChatBox() {
            // Thêm mã để mở hộp chat tại đây
            alert('Hộp chat được mở');
        }
    </script>
</body>

</html>