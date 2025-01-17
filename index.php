<?php
$insert = false;
if(isset($_POST['name']))
{
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `portfolio`.`about` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>


</head>

<body>
    <header class="header">
        <a href="#" class="logo">Portfolio.</a>

        <nav class="navbar">
            <a href="#home" style="--i:1;" class="active">Home</a>
            <a href="#about" style="--i:2;">About</a>
            <a href="#services" style="--i:3;">Services</a>
            <a href="#skills" style="--i:4;">Skills</a>
            <a href="#project" style="--i:4;">Project</a>
            <a href="#contact" style="--i:5;">contact</a>

        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Abhinay Yadav</h1>
            <h3>And I'm a <span class="text"> </span></h3>
            <p>I'm a web Designer with extensive experience for over 3 months.
                <br>expertise is to create and website design, Frontend design , and many more....
            </p>
            <div class="home-sci">
                <a href="https://x.com/vinaybaba0007?t=wPCCFWDY8x40I85gTWh1tQ&s=09" target="_blank" style="--i:7;"><i class='bx bxl-twitter' ></i></a>
                <a href="https://whatsapp.com/channel/0029Vai5EFn77qVQnfnxrp3q" target="_blank" style="--i:8;"><i class='bx bxl-whatsapp'></i></a>
                <a href="https://github.com/vinayyadavbaba"target="_blank" style="--i:9;"><i class='bx bxl-github'></i></a>
                <a href="https://youtube.com/@thephysicsacademy1731?si=4KLl3VBZ2E64Jqok" target="_blank" style="--i:10;"><i class='bx bxl-youtube'></i></a>

            </div>
            <a href="MY CV .. Abhinay .pdf" target="_blank" class="btn-box">My Resume</a>

        </div>
        </div>



        </div>
        <span class="home-imgHover"></span>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="Futuristic Neon Blue And Pink Light Instagram Profile Picture.jpg">
        </div>

        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>Web Developer!</h4>
            <p>I am an enthusiasticJunior Web Developer with 3 month of Internship in Web      Development. I am a quick learner with excellent knowledge of HTML, CSS, JavaScript, 
                Python and other web-related technologies. My biggest achievement is the successful development of a website . My best qualities include strong attention to 
                detail, creative problem solving and excellent communication skills. I am highly 
                organized and efficient, which enables me to work on multiple projects simultaneously. I take pride in my ability to build customer relationships and ensure complete 
                satisfaction with the end product..</p>

            <a href="#" class="btn-box">HOME</a>

        </div>
    </section>


    <section>
        <div class="services" id="services">
            <div class="container">
                <h1 class="sub-title">My <span>Services</span></h1>
                <div class="services-list">
                    <div>
                        <i class='bx bx-code-alt' style='color:#00eeff'></i>
                        <h2>Chegg</h2>
                        <p>"Offering top-notch tutoring services on Chegg, I specialize in personalized academic support across various subjects. My goal is to help students excel with clear explanations, detailed guidance, and tailored study strategies."</p>
                        <a href="CHEGG1.pdf"target="_blank" class="read">learn more</a>
                    </div>
                    <div>
                        <i class='bx bxl-wordpress style='color:#00eeff'></i>
                        <h2>Wordpress</h2>
                        <p>"Providing expert WordPress services, I specialize in custom theme development, plugin integration, and site optimization. I ensure your website is user-friendly, responsive, and tailored to your specific needs."</p>
                        <a href="WordPres11.pdf"target="_blank" class="read">learn more</a>
                    </div>
                    <div>
                        <i class='bx bxl-dev-to style='color:#00eeff'></i>
                        <h2>Web Dev.</h2>
                        <p>"Offering comprehensive web development services, I specialize in creating responsive, user-friendly websites using HTML, CSS, JavaScript, and modern frameworks. From design to deployment, I ensure robust and visually appealing web solutions."</p>
                        <a href="web.pdf"target="_blank" class="read">learn more</a>
                    </div>
                </div>
            </div>
    </section>


    <h1 class="sub-title">My <span>Skills</span></h1>

    <section>

        <div class="container1" id="skills">


            <h1 class="heading1">Technical Skills</h1>
            <div class="Technical-bars">
                <div class="bar"><i style="color:#c95d2e" class="bx bxl-html5"></i>
                    <div class="info">
                        <span>HTML</span>
                    </div>
                    <div class="progress-line html">
                        <span></span>
                    </div>
                </div>
                <div class="bar"><i style="color:#147bbc" class="bx bxl-css3"></i>
                    <div class="info">
                        <span>CSS</span>
                    </div>
                    <div class="progress-line css">
                        <span></span>
                    </div>
                </div>
                <div class="bar"><i style="color:#b0bc1e" class="bx bxl-javascript"></i>
                    <div class="info">
                        <span>Javascript</span>
                    </div>
                    <div class="progress-line javascript">
                        <span></span>
                    </div>
                </div>
                <div class="bar"><i style="color:#c32ec9" class='bx bxl-python'></i>
                    <div class="info">
                        <span>Python</span>
                    </div>
                    <div class="progress-line python">
                        <span></span>
                    </div>
                </div>
                <div class="bar"><i style="color:#69BCBC" class="bx bxl-react"></i>
                    <div class="info">
                        <span>react</span>
                    </div>
                    <div class="progress-line react">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container1">
            <h1 class="heading1">Professional Skills</h1>
            <div class="radial-bars">

                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">90%</div>
                    <div class="text">Creativity</div>
                </div>

                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-2" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">65%</div>
                    <div class="text">Communication</div>
                </div>

                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-3" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">75%</div>
                    <div class="text">Problem Solving</div>
                </div>

                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-4" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">85%</div>
                    <div class="text">Teamwork</div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div id="portfolio" id="project">
            <div class="main-text" id="project">

                <h2>Latest<span>Project</span></h2>

                <div class="portfolio-content">
                    <div class="row">
                        <img src="123456.jpeg">
                        <div class="layer">
                            <h5>Rock Paper Scissor </h5>
                            <p>""Create a Rock-Paper-Scissors game with HTML, CSS, and JavaScript. This project features an interactive interface and instant feedback on game outcomes, perfect for practicing web development basics.""</p>
                            <a href=" https://vinayyadavbaba.github.io/Rock-Paper-Scissor/"><i class='bx bx-link' style='color:#ffffff'></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="4174812.webp">
                        <div class="layer" >
                            <h5>QR Code Generator</h5>
                            <p>"Develop a QR Code generator using HTML, CSS, and JavaScript. Users can input text or URLs, and the app will generate a corresponding QR Code. This project is great for learning web development basics while creating a practical and interactive tool."</p>
                            <a href="https://vinayyadavbaba.github.io/QR-Code-Generator/"><i class='bx bx-link' style='color:#ffffff'></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="4174812.jpeg" >
                        <div class="layer">
                            <h4>Tik Tak Toe</h4>
                            <p>"Build a Tic-Tac-Toe game with HTML, CSS, and JavaScript. Two players alternate turns marking Xs and Os, with logic to detect wins and draws. Great for practicing web development skills."</p>
                            <a href=" https://vinayyadavbaba.github.io/Tik-Tak-Toe/"><i class='bx bx-link' style='color:#ffffff' font-size=10px></i></a>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </section>

    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Me</span></h2>
            <h4>Let's Work Together</h4>
            <br><br><li> Share ideas and expertise</li></br>
                <br><li> Build on each other's strengths</li></br>
                <br><li> Support each other's weaknesses</li></br>
                <br><li> Achieve common goals and objectives</li></br>
                <br><li> Learn from each other's perspectives</li></br>
                <br><li> Create a positive and productive work environment</li></br>
                 </p>
                
                
            <div class="contact-list">
                <li><i class='bx bxl-gmail'></i></bx> vinaybaba8055@gmail.com</a></li>
                <li><i class='bx bx-phone-call'></i> 7905141039</a></li>
            </div>
            <div class="contact-icons">
                <a href="https://x.com/vinaybaba0007?t=wPCCFWDY8x40I85gTWh1tQ&s=09" target="_blank" style="--i:7;"><i class='bx bxl-twitter' ></i></a>
                <a href="https://whatsapp.com/channel/0029Vai5EFn77qVQnfnxrp3q" target="_blank" style="--i:8;"><i class='bx bxl-whatsapp'></i></a>
                <a href="https://github.com/vinayyadavbaba"target="_blank" style="--i:9;"><i class='bx bxl-github'></i></a>
                <a href="https://youtube.com/@thephysicsacademy1731?si=4KLl3VBZ2E64Jqok" target="_blank" style="--i:10;"><i class='bx bxl-youtube'></i></a>


            </div>
        </div>
        <div class="contact-form">
        <!-- <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?> -->

            <!-- <form action="index.php" method="post">
                <input type="name" placeholder="Enter Your Name" required>
                <input type="email" placeholder="Enter Your Email" required>

                <input type="subject" placeholder="Enter Your Subject">
                <textarea name="message" id="" cols="40" rows="10" placeholder="Enter Your Message" required></textarea> 
                <input type="submit" value="Submit" class="send"> 
                <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your Age">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>-->
                <!-- <button class="btn">Submit</button>  s -->
        

            <!-- </form> -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>

        </div>
    </section>

    <div class="last-text">
        <p>Developed with love by Abhinay Yadav © 2024 </p>
    </div>

    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>



    <script src="sript.js"></script>
    
</body>

</html>