<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - FitLife </title>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
    <style>
        /* Chat icon */
        #chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            z-index: 1001;
        }

        #chat-icon img {
            width: 60px;
            height: 60px;
        }

        /* Chat box */
        .chat-box {
            display: none;
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 300px;
            height: 400px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            border-radius: 25px;
        }

        .chat-header {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 25px;
        }

        .chat-header button {
            background: none;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .chat-body {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            background-color: #f9f9f9;
        }

        .chat-footer {
            padding: 10px;
            display: flex;
        }

        .chat-footer input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .chat-footer button {
            margin-left: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body onload="myFunction()">
    <div class="load" id="loader">
        <hr />
        <hr />
        <hr />
        <hr />
    </div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="hero" class="nav-animate">
            <h3 class="sub-title animate__animated animate__fadeInUp">Chào mừng bạn đến với FitLife</h3>
            <h2 class="main-title animate__animated animate__fadeInUp">Giúp bạn có lộ trình và chế độ rõ ràng</h2>
            <div class="btn-grp">
                <a href="./lost-pet.php" class="btn-primary hero-btn-1 animate__animated animate__fadeInUp">Làm bài test</a>
                <a href="./found-pet.php" class="btn-primary hero-btn-2 animate__animated animate__fadeInUp">Vào luyện tập</a>
            </div>
            <!-- <img src="./images/hero-bg.png" alt="pet-image" class="pet-image animate__animated animate__fadeInUp"> -->
            <img src="./images/hbg.png" alt="pet-image" class="pet-image animate__animated animate__fadeInUp">
            <h1 class="bg-text animate__animated animate__fadeInUp">Body</h1>
        </div>

        <div id="about">
            <div class="left-abt">
                <h1 class="bg-text">Love</h1>
                <!-- <img src="./images/abt-section.png" alt="about" class="abt-img"> -->
            </div>
            <div class="right-abt">
                <h3 class="sub-title">A Little About PawFinder</h3>
                <h2 class="main-title">The Heart Behind PawFinder</h2>
                <p class="abt-content">Chào mừng bạn đến với FitLife, nơi sẽ giúp bạn đẹp từ trong ra ngoài, từ ngoài vào trong, nói chung là đẹp hết nước chấm.</p>
                <a href="about-us.php" class="btn-primary">Read More</a>
            </div>
        </div>


        <div id="testimonial">
            <div class="uper-testi">
                <h1 class="main-title">Testimonials</h1>
                <p class="sub-title">Real experiences from our community of pet lovers.</p>
            </div>
            <div class="lower-testi">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="testi-content">
                            <p class="text-justify">"PawFinder was a godsend when Rocky went missing. Mumbai is a big city, and I was terrified. The support and encouragement I received from the PawFinder community were heartwarming. Within a day of posting a 'Lost Pet' listing, Rocky was found! PawFinder, you're a true friend to pet owners."</p>
                            <div>
                                <h3>Ananya Gupta.</h3>
                                <h3>Mumbai, Maharashtra</h3>
                            </div>
                            <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                        </div>
                    </div>

                    <div class="item">
                        <div class="testi-content">
                            <p class="text-justify">"PawFinder changed the game for us! Whiskey had been missing, and I was anxious. Posting on PawFinder not only connected me with other pet lovers but also provided valuable tips. The 'Lost Pet' community supported me, and now, with Whiskey back home, I'm immensely grateful to PawFinder!"</p>
                            <div>
                                <h3>Rajesh Sharma.</h3>
                                <h3>Delhi, NCR</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testi-content">
                            <p class="text-justify">"PawFinder was a savior when Golu went missing. In the vast city of Delhi, I was filled with worry. The 'Found Pet' section on PawFinder quickly connected me with Golu's owner. Now, Golu is back with his family, and I owe it all to PawFinder. Thank you!"</p>
                            <div>
                                <h3>Priya Malik.</h3>
                                <h3>Bengaluru, Karnataka</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>

    <!-- Chat icon -->
    <div id="chat-icon">
        <img src="./images/chat.png" alt="Chat Icon" onclick="toggleChatBox()">
    </div>

    <!-- Chat box -->
    <div id="chat-box" class="chat-box">
        <div class="chat-header">
            <span>Chat với chúng tôi</span>
            <button onclick="toggleChatBox()">X</button>
        </div>
        <div class="chat-body">
            <!-- Nội dung chat sẽ hiển thị ở đây -->
        </div>
        <div class="chat-footer">
            <input type="text" placeholder="Nhập tin nhắn...">
            <button>Gửi</button>
        </div>
    </div>


    <script src="./scripts/script.js"></script>
    <script>
        // Testimonials

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
    <script>
    function toggleChatBox() {
        var chatBox = document.querySelector('.chat-box');
        var chatIcon = document.querySelector('#chat-icon');
        
        if (chatBox.style.display === 'none' || chatBox.style.display === '') {
            chatBox.style.display = 'flex';
            chatIcon.style.display = 'none';
        } else {
            chatBox.style.display = 'none';
            chatIcon.style.display = 'block';
        }
    }

    document.getElementById('chat-icon').addEventListener('click', toggleChatBox);
    document.querySelector('.chat-header button').addEventListener('click', toggleChatBox);
</script>
</body>

</html>