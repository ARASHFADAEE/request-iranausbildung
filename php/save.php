
<!DOCTYPE html>
<html lang="rtl" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشاوره ایران آوسبیلدونگ</title>
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- start header  -->
    <header class="main-header">
        <nav class="nav ">
            <a href="">
                <img src="./assets/img/logoausbildung.png" alt="">
            </a>
            <div class="nav__toggler">
                <div class="bar bar-one"></div>
                <div class="bar bar-two"></div>
                <div class="bar bar-three"></div>
            </div>
            <ul class="list nav__list ">
                <li class="nav__item" ><a href="">خانه</a></li>
                <li class="nav__item" ><a href="">مشاوره نظام وظیفه</a></li>
                <li class="nav__item" ><a href="">مشاوره آوسبیلدونگ </a></li>
                <li class="nav__item" ><a href="">مشاوره دوال اشتادیوم</a></li>
                <li class="nav__item" ><a href="">مشاوره ازمون زبان آلمانی</a></li>

            </ul>
        </nav>
    </header>
    <!-- End Header -->

    <main>
        
    <h1 id="h1-section" >فرم مشاوره آوسبیلدونگ</h1>
        <!-- start section input -->
        <div class="wrapper container">
            <div class="box">
                    
<?php



// اطلاعات دیتابیس
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'save';

// اتصال به دیتابیس
$conn = new mysqli($host, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
  die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}

// دریافت داده‌های فرم
$name = $_POST['name'];
$email = $_POST['email'];

// اضافه کردن داده‌ها به دیتابیس
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "<p id= 'mssgtrue'>اطلاعات با موفقیت ذخیره شد.</p>";
} else {
  echo "خطا در ذخیره اطلاعات: " . $conn->error;
}

// قطع اتصال به دیتابیس
$conn->close();
?>




                
            </div>
        </div>



    </main>


    <footer>
        <div class="footer">
            <div class="footer-box container">
                <div class=" section section1">
                    <h1>درباره ما</h1>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. د.</p>

                </div>
                <div class=" section section2">
                    <ul>
                        <li><a href="">متن 1</a></li>
                        <li><a href="">متن 2</a></li>
                        <li><a href="">متن 3</a></li>
                    </ul>
                </div>
                <div class=" section section3">
                    <a href="">
                        <img src="./assets/img/enamad1.png" alt="">
                    </a>
                    <a href="">
                        <img src="" alt="">
                    </a>

                </div>
            </div>
        </div>



        <script src="./assets/js/main.js"></script>
    </footer>
</body>
</html>

