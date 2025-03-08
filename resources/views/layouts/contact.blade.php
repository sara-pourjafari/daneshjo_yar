<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Theme/css/style.css" type="text/css">
    <link rel="stylesheet" href="Theme/css/font-awesome.min.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="Theme/img/logo.png" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">خانه</a></li>
                    <li><a href="about.html">درباره ما</a></li>
                    <li><a href="course.html">دوره ها</a></li>
                    <li><a href="blog.html">وبلاگ</a></li>
                    <li><a href="contact.html">تماس با ما</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>ارتباط با ما</h1>
    </section>

    <!------------------- contact us ---------------------->

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831610.7315378715!2d52.32787807449308!3d35.49242192746866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0184f52c957f%3A0x55b32674bc21ead0!2z2KfYs9iq2KfZhiDYqtmH2LHYp9mG2Iwg2KfbjNix2KfZhg!5e0!3m2!1sfa!2sde!4v1622375755799!5m2!1sfa!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>ایران , تهران</h5>
                        <p>لواسان , ساختمان طبعیت , طبقه 4</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>0935123456789</h5>
                        <p>شنبه تا چهارشنبه از ساعت 7 صبح تا 7 بعد از ظهر</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>info@gmail.com</h5>
                        <p>درخواست خود را برای ما ایمیل کنید</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form>
                    <input type="text" placeholder="نام خود را وارد کنید" required>
                    <input type="email" placeholder="ایمیل خود را وارد کنید" required>
                    <input type="text" placeholder="موضوع پیام" required>
                    <textarea rows="8" placeholder="پیام خود را وارد کنید" required></textarea>
                    <button type="submit" class="hero-btn red-btn">ارسال پیام</button>
                </form>
            </div>
        </div>
    </section>
 
    <!------------------- FOOTER ---------------------->

    <section class="footer">
        <h4>درباره ما</h4>
        <p>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله <br>در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد 
        </p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>طراحی شده با <i class="fa fa-heart-o"></i> توسط حسین امانی </p>
    </section>

    <script src="Theme/js/script.js"></script>
</body>
</html>