<?php
    $con = mysqli_connect("localhost","root","","sample");
    if(!$con) {
        die('connection failure:'.mysqli_connect_error());
    }

    //------------MySQL QUERY FOR LIVINGROOM----------------//
    $livingroom_sql = "SELECT * FROM `vortex` WHERE Category = 'living_room'";
    $livingroom_result = mysqli_query($con,$livingroom_sql);
    $livingroom_array = mysqli_fetch_all($livingroom_result);

    //-------------MySQL QUERY FOR SPACIOUS----------------//
    $spacious_sql = "SELECT * FROM `vortex` WHERE Category = 'spacious'";
    $spacious_result = mysqli_query($con,$spacious_sql);
    $spacious_array = mysqli_fetch_all($spacious_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Simply Vibe Design Portfolio</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <!--------------------- PRE-LOADER ---------------------->
    <div class="pre_loder">
        <div class="loder_container">
            <div class="spiner"></div>
            <div class="head">
               SIMPLY VIBE
            </div>
        </div>
    </div>
    <!----------------- END OF PRE-LOADER ------------------->

    <!-- Navigation Bar -->
    <nav>
        <div class="navigation">
            <div class="head">SIMPLY VIBE</div>
        <ul>
            <li><a href="#home"><i class="uil uil-estate"></i> Home</a></li>
            <li><a href="#Category"><i class="uil uil-layer-group"></i> Category</a></li>
            <li><a href="#out"><i class="uil uil-file-shield-alt"></i> About</a></li>
            <li><a href="#sec2"><i class="uil uil-phone-volume"></i> Contact</a></li>
        </ul>
        </div>
    </nav>

    <!-- Header Section -->
    <header id="home">
        <h1>Pc And Console Games Platform </h1>
        <p>Welcome to our showcase of stunning pc and console games.</p>
    </header>

    <!----------------------------PASSAGE--------------------------->

    <section>
        <div class="container intro_quote">
            <div class="quote" id="Category">
                " Picture yourself in your living room, lounging on the couch with your favorite console hooked up to the TV. 
                You've got your controller in hand, 
                and you're ready to kick back and relax with some gaming.Imagine you're sitting at your desk, 
                surrounded by your customized gaming setup. You've got your powerful computer with a high-resolution monitor,
                 a comfortable gaming chair, and your favorite peripherals—whether it's a gaming mouse and keyboard or a controller. 
                You're ready to dive into a vast world of gaming possibilities."
            </div>
        </div>
    </section>

    <!--------------------------END OF PASSAGE-------------------------->
 
    <!-- Main Content Section (Gallery) -->
    <div class="gallery" id="sec1">
        <div class="head">
            Pc Games
        </div>
        <!-- Gallery items go here -->
        <div class="container" id="gallery_container">
        <?php
            foreach ($livingroom_array as $key => $value) {
                $row = $value;
                $image = $row[1];
                $topic = $row[2];

                echo '<div class="gallery-item">
                        <img src="'. $image .'">
                        <div class="title" >'. $topic .'</div>
                    </div>';
            }
        ?>
        </div>
        <div class="more_btn" id="more_btn" onclick="toggler()">
            show more
        </div>
    </div>

    <!-------------------------------HOW IT'S DONE------------------------------->

    <section>
        <div class="container HowItsDone">
            <div class="topic">Coming Soon Games</div>
            <div class="steps_panel">
                <article class="step">
                    <div class="image_icone toggler">
                        <div class="image">
                            <img src="images\Screenshot 2024-02-04 162852.png" 
                            alt="interior designers near you for free consultings">
                        </div>
                    </div>
                    <div class="step_num">
                        Release On 2026
                    </div>
                    <div class="head">
                        <h3> GTA VI</h3>
                    </div>
                    <div class="discrbtion">
                       It is a open world game and one main character based on the decision move the storyline  
                       This revelation comes from Take-Two Interactive, the parent company of Rockstar Games, 
                       during a recent conference call where they outlined their projected roadmap for revenue and profit.
                    </div>
                </article>

                <article class="step">
                    <div class="image_icone toggler">
                        <div class="image">
                            <img src="images\Screenshot 2024-02-04 162937.png" 
                            alt="interior designers near you for free consultings">
                        </div>
                    </div>
                    <div class="step_num">
                        Under Development
                    </div>
                    <div class="head">
                        <h3>Need For Speed Remaster</h3>
                    </div>
                    <div class="discrbtion">
                        It is based on the car race game and story game 2005's Need for Speed: Most Wanted was one of the most popular games in India, 
                        and it appears that a remake of the game is on the horizon. 
                        Voice actor Simone Bailly took to Twitter to announce that an NFS: Most Wanted remake is in the works, 
                        stating that EA plans to release it upcomming years.
                    </div>
                </article>

                <article class="step">
                    <div class="image_icone toggler">
                        <div class="image">
                            <img src="images\Screenshot 2024-02-04 162816.png" 
                            alt="interior designers near you for free consultings">
                        </div>
                    </div>
                    <div class="step_num">
                        Under Development
                    </div>
                    <div class="head">
                        <h3>Marvel Wolvarien</h3>
                    </div>
                    <div class="discrbtion">
                       Its like a super hero game it also a story gameMarvel’s Wolverine is currently in development for the PlayStation®5 console. 
                       Created in collaboration with PlayStation and Marvel Games.. 
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!----------------------------END OF HOWIT'S DONE--------------------------->
  
 
    <!-- Main Content Section (Gallery) -->
    <div class="gallery">
        <div class="head">
            Console Games
        </div>
        <!-- Gallery items go here -->
        <div class="container" id="gallery_container_1">
        <?php
            foreach ($spacious_array as $key => $value) {
                $row = $value;
                $image = $row[1];
                $topic = $row[2];

                echo '<div class="gallery-item">
                        <img src="'. $image .'">
                        <div class="title">'. $topic .'</div>
                    </div>';
            }
        ?>
        </div>
        <div class="more_btn" id="more_btn_1" onclick="toggler_1()">
            show more
        </div>
    </div>

    <!-- Subheading Section (About) -->
    <section class="about" id="out">

        <h2>About Us</h2>
        <p>Learn more about our passion for creating beautiful and functional spaces.</p>
    </section>

    <!-----------------------------LOCATION MAP EMBED-------------------------->
 
    <section>
        <div class="container mapLocation">
            <div class="topic">
                "Begin your exploration. Find your way to us and uncover hidden treasures in our vibrant location."
            </div>
            <div class="pannel">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.848533637785!2d80.26299387216565!3d13.085738046534217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265fbe6a909ab%3A0x5a6046dfc9f0d784!2sJawaharlal%20Nehru%20Stadium!5e0!3m2!1sen!2sin!4v1706013316879!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="content">
                    <div class="address">
                        <div class="head">
                            Address:
                        </div>
                        <div class="brief">
                            Greater Area Chennai, Tamil Nadu 600129
                        </div>
                        <div class="landmark">
                            <span>Land-Mark: </span>Near Chennai Central Railway
                        </div>
                    </div>
                    <div class="mobile">
                        <span>Mobile : </span><a href="tel:9^^^^^^^^3">9********6</a>
                    </div>
                    <div class="direction">
                        <a href="https://maps.app.goo.gl/cyds83gGqzmTrFAh8">Direction</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------END OF LOCATION MAP EMBED---------------------------->

    <!-------------------------------FOOTER---------------------------------->

    <footer class="footer" id="sec2">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="home.php" class="footer_logo"><h4>Simple Vibe Games</h4></a>
                <p>
                Are you tired of complicated processes just to download and play your favorite games? Look no further! 
                SimpleVibe Games is here to provide you with a  gaming experience.At SimpleVibe Games, we believe in keeping things, well, simple. 
                Our user-friendly website makes it easy for you to browse, download, and 
                start playing your favorite games in just a few clicks. No more navigating through confusing menus or dealing with unnecessary 
                steps—just pure gaming enjoyment.
                </p>
            </div>
            
            <div class="footer_2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Category</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Primary</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and condition</a></li>
                    <li><a href="#">Payment Norms</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <p>+91 9********8</p>
                    <p>mukeshchakkaravarthy31@gmail.com</p>
                </div>

                <ul class="footer_socials">
                    <li><a href="https://www.facebook.com/mukesh.c.35513?mibextid=ZbWKwL"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/mukeshchakkaravarthy31?igsh=MW14YWY4MjF5cWIzNA=="><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href=""><i class="uil uil-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/mukesh-c-991236229?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer_copyright" >
            <small>Copyright &copy; Mukesh</small>
            <br><label><span>Designed By </span>MUKESH</label>
        </div>
    </footer>
    <!---------------------------END OF FOOTER----------------------------->

    <!---------------------------------------- JS FOR PRE-LOADER ------------------------------------------------------>

    <script>
        const home_tag = document.querySelector('.home_tag');
        window.onload = function(){
            document.querySelector('.pre_loder').style.display = 'none';
        }
    </script>

    <!---------------------------------------- JS FOR GALERY ------------------------------------------------------>
  
    <script>
        const gallery_container = document.getElementById('gallery_container');
        const more_btn = document.getElementById('more_btn');
        var triger = 0;
        toggler();
        function toggler() {
            if(triger%2 === 0) {
                gallery_container.style.maxHeight = '25vw';
                more_btn.innerHTML = 'show more';
            }
            else {
                gallery_container.style.maxHeight = gallery_container.scrollHeight + 'px';
                more_btn.innerHTML = 'show less';
            }
            triger++;
        }
    </script>

    <script>
        const gallery_container_1 = document.getElementById('gallery_container_1');
        const more_btn_1 = document.getElementById('more_btn_1');
        var triger = 0;
        toggler_1();
        function toggler_1() {
            if(triger%2 === 0) {
                gallery_container_1.style.maxHeight = '25vw';
                more_btn_1.innerHTML = 'show more';
            }
            else {
                gallery_container_1.style.maxHeight = gallery_container_1.scrollHeight + 'px';
                more_btn_1.innerHTML = 'show less';

            }
            triger++;
        }
    </script>
    
    <!-------------------------JAVASCRIPT FOR TOGGLER-------------------------------->  

    <script>

        const toggle_grade = document.querySelectorAll('.toggler');
        
        const option = { root:null,thershold:0,rootmargin:"0px" };
        const observer = new IntersectionObserver(function(entries,observer){
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    entry.target.classList.add("toggle");
                }
                else{
                entry.target.classList.remove("toggle");}
            }); 
        },option);
        
            toggle_grade.forEach(toggle_grade_element => {
                observer.observe(toggle_grade_element);
            });
    
    </script>

</body>
</html>
 