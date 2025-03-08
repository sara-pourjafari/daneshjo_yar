<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Theme/css/style.css" type="text/css">
    <link rel="stylesheet" href="Theme/css/font-awesome.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset( 'css/style.css') }}">
    <title>home</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="{{asset('img/logo.png ')}}"alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">خانه</a></li>
                    <li><a href="about.html">درباره ما</a></li>
                    <li><a href="course.html">دوره ها</a></li>
                    <li><a href="blog.html">وبلاگ</a></li>
                    <li style="background-color: rgb(18, 21, 67) ; border-radius:6px; color: rgb(14, 9, 9)"><a href={{route('Form.Register')}}>ثبت نام</a></li>
                    <li><a href="contact.html">تماس با ما</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>بزرگترین دانشگاه جهان</h1>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            <a href="#" class="hero-btn">برای اطلاعات بیشتر به ما مراجعه کنید</a>
        </div>
    </section>

    <!----------------- Course ------------------->
    <section class="course">
        <h1>دوره هایی که ارائه می دهیم</h1>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>

        <div class="row">
            <div class="course-col">
                <h3>حد واسط</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد 
                </p>
            </div>
            <div class="course-col">
                <h3>درجه</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد 
                </p>
            </div>
            <div class="course-col">
                <h3>پس از فارغ التحصیلی</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد 
                </p>
            </div>
        </div>
    </section>

    <!--------------------- campus -------------------------->

    <section class="campus">
        <h1>پردیس جهانی ما</h1>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
        <div class="row">
            <div class="campus-col">
                <img src="{{asset('img/london.png ')}}" alt="campus london">
                <div class="layer">
                    <h3>لندن</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="{{asset('img/newyork.png ')}}"alt="campus london">
                <div class="layer">
                    <h3>نیویورک</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="{{asset('img/washington.png ')}}" alt="campus london">
                <div class="layer">
                    <h3>واشنگتن</h3>
                </div>
            </div>
        </div>
    </section>

    <!------------------ Facilities -------------------->
    <section class="facilities">
        <h1>امکانات ما</h1>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
        <div class="row">
            <div class="facilities-col">
                <img src="{{asset('img/library.png ')}}"alt="library">
                <h3>کتابخانه کلاس جهانی</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            </div>
            <div class="facilities-col">
                <img src="{{asset('img/basketball.png ')}}" alt="library">
                <h3>بزرگترین زمین بازی</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            </div>
            <div class="facilities-col">
                <img src="{{asset('img/cafeteria.png ')}}"alt="library">
                <h3>غذای خوشمزه و سرحال</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            </div>
        </div>
    </section>

    <!------------------ testimonial ---------------------->
    <section class="testimonials">
        <h1>آنچه دانش آموز ما می گوید</h1>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
        <div class="row">
            <div class="testimonial-col">
                <img src=alt="user">
                <div>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد 
                    </p>
                    <h3>سارا رمضانزاده</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="public/img/user2.jpg" alt="user">
                <div>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد 
                    </p>
                    <h3>حسین امانی</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!------------------- Call To Action ---------------------->
    <section class="cta">
        <h1>برای دوره های مختلف آنلاین ما در هر کجای دنیا ثبت نام کنید</h1>
        <a href="" class="hero-btn">تماس با ما</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
    <script src="public/js/script.js"></script>
</body>
</html>