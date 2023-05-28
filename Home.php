<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&display=swap');

        * {
            font-family: 'cairo';
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2c3e50;
            color: white;
            padding: 10px 100px;
            border-top: solid red 3px;
            position: fixed;
            z-index: 999;
            width: 100%;
        }

        header a {
            color: white;
            text-decoration: none;
            margin-right: 10px;
            font-size: 16px;
            transition: ease 0.1s;
        }

        header a:hover {
            color: #1abc9c;
            font-size: 20px;
        }

        .carsour {
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            padding: 0px 100px;
            background-image: url(img/4.jp.avif);
            background-size: cover;
            background-attachment: fixed;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.4);
            background-position: center;
        }

        .carsour span {
            color: #990000;
        }

        .carsour button {
            color: white;
            text-decoration: none;
            background-color: #990000;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 10px;
            font-size: 18px;
            transition: ease 1s;
        }

        .carsour button:hover {
            transform: scale(1.1);
            background-color: #990000;
        }

        .carsour h2 {
            color: #2c3e50;
        }

        .Services h2 {
            text-align: center;
            margin: 50px;
        }

        .Services .C {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0px 80px;
        }

        .Services  .Ca {
            /* border: solid; */
            margin-right: 20px;
            box-shadow: 3px 3px 6px 6px #ccc;
            padding: 10px;
            width: 16em;
            margin-bottom: 40px;
            text-align: center;
        }
        .Services .Ca h3 {
            color: crimson;
            font-weight: 1000px;
        }
        .Ca p {
            font-size: 14px;
        }
        .Services .Ca > div {
            color: #2c3e50;
            font-size: 50px;
        }

        .Protofilio {
            background-color: #2c3e50;
            text-align: center;
            /* color: white; */
            padding: 30px 100px;
        }
        .Protofilio h2 {
            color: white;
            margin-bottom: 20px;
            border-bottom: solid crimson;
            display: inline-block;
            margin-bottom: 40px;
        }
        .Protofilio .Container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .Protofilio .card {
            background-color: white;
            border: solid;
            border-radius: 20px;
            margin-right: 20px;
            /* padding: 0px 10px; */
            padding-bottom: 10px;
            width: 16em;
            margin-bottom: 30px;
            overflow: hidden;
            min-height: 250px ;
        }
        .Protofilio button {
            border-radius: 10px;
            color: white;
            background-color: #1abc9c;
            padding: 0px 5px;
            border: none;
            transition: 1s ease;
        }
        .Protofilio button:hover{
            transform: scale(1.2);
        }
        .Protofilio .Card desc {
            margin: 0px 10px;
            /* display: flex; */
        }
        .Protofilio img {
            height: 12em;
            width: 100%;
            object-fit: cover;
        }
        .Notilla {
            padding: 50px 100px;
            display: flex;
            align-items: center;
        }
        .Notilla p {
            font-size: 13px;
        }
        .Notilla h2 {
            color: crimson;
        }
        .Notilla-img {
            width: 40%;
            margin-right: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 2px rgb(0 0 0 / 40%);
            object-fit: cover;
        }
        .Notilla-dec {
            width: 60%;
            text-align: center;
        }
        .about {
            padding: 50px;
            background-image: url(img/9.jp.avif);
            min-height: 80vh;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.4);
            flex-wrap: wrap;
        }
        .about img {
            border-radius: 50%;
            width: 20em;
            height: 20em;
            border: solid white;
            margin-right: 20px;
            margin-bottom: 20px;
            object-fit: cover;
        }
        .Notilla-img-rtl {
            width: 40%;
            margin-left: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 2px rgb(0 0 0 / 40%);
            object-fit: cover;
        }

        footer {
            text-align: center;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }
        .up{
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #1abc9c;
            padding: 10px;
            border-radius: 50px;
            width: 40px;
            height: 40px;
            justify-content: center;
            display: flex;
            text-align: center;
            color: white;
        }

    </style>
    <script></script>
</head>

<body>
<header >
    <h2>Welcome to Youssef Code Academy</h2>
    <nav>
        <a href="#Home">Home</a>
        <a href="#Services">Services</a>
        <a href="#Protofilio">Protofilio</a>
        <a href="#about">about</a>
        <a href="#Why us">Why us</a>
        <a href="#Contant">Contant</a>

    </nav>
</header>

<section class="carsour" id="Home">
    <div>
        <h2>
            Code With
            <span>Yousf</span>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

    </div>
</section>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Function to retrieve all services from the database
function getServices() {
    global $conn;
    $sql = "SELECT * FROM services";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Retrieve all services from the database
$services = getServices();
?>

<section class="Services" id="Services">
    <h2>Services</h2>
    <div class="C">
        <?php foreach ($services as $service) { ?>
            <div class="Ca">
                <div>
                    <i class="<?php echo $service['icon']; ?>"></i>
                </div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['desc']; ?></p>
            </div>
        <?php } ?>
    </div>
</section>

<section class="Protofilio" id="Protofilio">
    <h2>Protofilio</h2>
    <div class="Container">
        <div class="card">
            <img src="img/7.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/6.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/5.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/9.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/13.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/11.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/12.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
        <div class="card">
            <img src="img/15.jp.avif" alt="" />
            <div class="Card desc">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                    consequatur rerum velit illum adipisci autem praesentium dolorum
                </p>
                <button>See more</button>
            </div>
        </div>
    </div>
</section>

<section class="Notilla" >
    <div class="Notilla-img">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
            src="https://assets9.lottiefiles.com/packages/lf20_smeycldf.json"
            background="transparent"
            speed="1"
            style="width: 400px; height: 300px;"
            loop
            autoplay
        ></lottie-player>
    </div>

    <div class="Notilla-dec">
        <h2>دورات تدريبية في مجال البرمجة</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ut
            vero mollitia? Reprehenderit, delectus dolorum quo iusto aut quibusdam
            voluptate atque quos mollitia vitae maiores aspernatur, facilis animi,
            dicta quas. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eum temporibus unde necessitatibus esse repellendus, totam ut delectus
            molestiae ab consectetur quibusdam corrupti vitae eaque soluta
            perspiciatis ducimus at consequatur quas. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Culpa tempore repellendus alias officia
            fugit, commodi, corrupti quo tenetur inventore voluptatum laborum ex
            nisi dolorem dolor obcaecati, maiores aut nesciunt aliquid?
        </p>
    </div>
</section>

<section class="about" id="about">
    <img src="img/11.jp.avif" alt="" />
    <img src="img/4.jp.avif" alt="" />
    <img src="img/12.jp.avif" alt="" />
</section>

<section class="Notilla" dir="rtl" id="Why us">
    <div class="Notilla-img-rtl">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_obidsi0t.json"  background="transparent"  speed="0.5"  style="width: 460px; height: 400px;"  loop  autoplay></lottie-player>
    </div>

    <div class="Notilla-dec">
        <h2>دورات تدريبية في مجال البرمجة</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ut
            vero mollitia? Reprehenderit, delectus dolorum quo iusto aut quibusdam
            voluptate atque quos mollitia vitae maiores aspernatur, facilis animi,
            dicta quas. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eum temporibus unde necessitatibus esse repellendus, totam ut delectus
            molestiae ab consectetur quibusdam corrupti vitae eaque soluta
            perspiciatis ducimus at consequatur quas. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Culpa tempore repellendus alias officia
            fugit, commodi, corrupti quo tenetur inventore voluptatum laborum ex
            nisi dolorem dolor obcaecati, maiores aut nesciunt aliquid?
        </p>
    </div>
</section>
<section class="Notilla">
    <div class="Notilla-img">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_vfpu2rpp.json"  background="transparent"  speed="1"  style="width: 460px; height: 400px;"  loop  autoplay></lottie-player>
    </div>

    <div class="Notilla-dec">
        <h2>دورات تدريبية في مجال البرمجة</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ut
            vero mollitia? Reprehenderit, delectus dolorum quo iusto aut quibusdam
            voluptate atque quos mollitia vitae maiores aspernatur, facilis animi,
            dicta quas. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eum temporibus unde necessitatibus esse repellendus, totam ut delectus
            molestiae ab consectetur quibusdam corrupti vitae eaque soluta
            perspiciatis ducimus at consequatur quas. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Culpa tempore repellendus alias officia
            fugit, commodi, corrupti quo tenetur inventore voluptatum laborum ex
            nisi dolorem dolor obcaecati, maiores aut nesciunt aliquid?
        </p>
    </div>
</section>
<section class="Notilla" dir="rtl">
    <div class="Notilla-img-rtl">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_bp5lntrf.json"  background="transparent"  speed="1"  style="width: 460px; height: 400px;"  loop  autoplay></lottie-player>
    </div>

    <div class="Notilla-dec">
        <h2>دورات تدريبية في مجال البرمجة</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ut
            vero mollitia? Reprehenderit, delectus dolorum quo iusto aut quibusdam
            voluptate atque quos mollitia vitae maiores aspernatur, facilis animi,
            dicta quas. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eum temporibus unde necessitatibus esse repellendus, totam ut delectus
            molestiae ab consectetur quibusdam corrupti vitae eaque soluta
            perspiciatis ducimus at consequatur quas. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Culpa tempore repellendus alias officia
            fugit, commodi, corrupti quo tenetur inventore voluptatum laborum ex
            nisi dolorem dolor obcaecati, maiores aut nesciunt aliquid?
        </p>
    </div>
</section>
<section class="Notilla">
    <div class="Notilla-img">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_kyu7xb1v.json"  background="transparent"  speed="1"  style="width: 460px; height: 400px;"  loop  autoplay></lottie-player>
    </div>

    <div class="Notilla-dec">
        <h2>دورات تدريبية في مجال البرمجة</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ut
            vero mollitia? Reprehenderit, delectus dolorum quo iusto aut quibusdam
            voluptate atque quos mollitia vitae maiores aspernatur, facilis animi,
            dicta quas. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eum temporibus unde necessitatibus esse repellendus, totam ut delectus
            molestiae ab consectetur quibusdam corrupti vitae eaque soluta
            perspiciatis ducimus at consequatur quas. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Culpa tempore repellendus alias officia
            fugit, commodi, corrupti quo tenetur inventore voluptatum laborum ex
            nisi dolorem dolor obcaecati, maiores aut nesciunt aliquid?
        </p>
    </div>
</section>

<footer>
    Copy right reserved with love Code with Yousf
</footer>

<a href="#">
    <div class="up">
        <i class="fa-solid fa-angle-up "></i>

    </div>
</a>








</body>
</html>

