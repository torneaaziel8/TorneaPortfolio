<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tornea | Personal Website Design </title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo"></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Knowledge</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- home section design  -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hi there, It's Me</h3>
            <h1>Aziel Tornea</h1>
            <h3>And I'm a <span>BSIT-MI Student</span></h3>
            <p>Even if I fail many times in this course, 
                <br>I believe in saying that 
                <br>"Failure teaches me."</p>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/aziel-tornea-149461252/" target="_blank"><i class="bx bxl-linkedin" ></i></a>
                <a href="https://www.facebook.com/aziel.tornea" target="_blank"><i class="bx bxl-facebook" ></i></a>
                <a href="https://github.com/torneaaziel7" target="_blank"><i class='bx bxl-github' ></i></a>
                
            </div>
            <a href="AZIEL TORNEA-CV.pdf" class="btn" target="_blank">Check my CV</a>
        </div>

        <div class="home-img">
            <img src="Images/Home.png" alt="">
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Images/about.jpg" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>BSIT-MI Student</h3>
            <p>I am currently studying second-year college at N.U Fairview as BSIT-MI the skills I have is I can type 75-85 words per minute in Medium Text Level. I have experience coding in languages such as Python and Java but not at an advanced level, my skills in programming aren't that much. I treat myself as a beginner because I still studying at school but I like to learn more.</p>
            <a href="https://www.facebook.com/messages/t/100024481400845" target="_blank" class="btn">Chat Me to know more!</a>
        </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
        <h2 class="heading">Have <span>Knowledge</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code-alt" ></i>
                <h3>Mobile App Development</h3>
                <p>The process of creating software for smartphones, tablets, and digital assistants—most often for the Android and iOS operating systems—is known as mobile application development. The program can be accessed via a mobile web browser, downloaded from a mobile app store, or preinstalled on the device.</p>
                <a href="#portfolio" class="btn">More</a>
            </div>

                <div class="services-box">
                    <i class='bx bx-data' ></i>
                    <h3>Database Management</h3>
                    <p>All that a database management system (DBMS) is an electronic data-keeping system. Users can manipulate data in the database or modify the database structure through various operations that can be performed on the system.</p>
                    <a href="#portfolio" class="btn">More</a>
                </div>

                <div class="services-box">
                    <i class='bx bxs-palette' ></i>
                    <h3>User Interface Designing</h3>
                    <p>The process of creating software or electronic device interfaces with an emphasis on aesthetics is known as user interface (UI) design. The goal of interface designers is to make things that are enjoyable and simple for users to use. </p>
                    <a href="#portfolio" class="btn">More</a>
                </div> 

                <div class="services-box">
                    <i class='bx bx-certification'></i>
                    <h3>Webinars I attended:</h3>
                    <h4>Python Data Structures: Linked Lists <a href="CertificateOfCompletion_Python Data Structures  Linked Lists.pdf" target="_blank"><h5>View Cert</h5></a></h4>
                    <h4>Excel Essential Training Office 365/Microsoft 365 <a href="CertificateOfCompletion_Excel Essential Training Office 365Microsoft 365.pdf" target="_blank"><h5>View Cert</h5></a></h4>
                    <h4>PowerPoint Essential Training (Office 365/Microsoft 365) (2020)
                        Power Point Tips and Tricks <a href="CertificateOfCompletion_PowerPoint Tips and Tricks-merged.pdf" target="_blank"><h5>View Cert</h5></a></h4>
                    <h4>Word Tips and Tricks
                        Word Essential Training (Office
                        365/Microsoft 365) <a href="CertificateOfCompletion_Word Tips and Tricks-merged.pdf" target="_blank"><h5>View Cert</h5></a></h4>
                </div> 
        

        </div>
    </section>

    <!-- portfolio section design -->
    <section class="porfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="Images/Mobile App Development.png" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile App Development</h4>
                    <p>An information app, like a library, is a digital platform or software application designed to provide access to a wide range of information and resources. Much like a traditional library, these apps aim to organize, categorize and make information easily accessible to users.</p>
                    <a href="#services"><i class="bx bx-code-alt" ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="Images/Database Management.png" alt="">
                <div class="portfolio-layer">
                    <h4>Database Management</h4>
                    <p>The mobile Application "Intellidex" is connected to Firebase Realtime Database it is a cloud-hosted NoSQL database that lets you store and sync data between your users in realtime. It is simply just a mechanism for keeping digitized records.</p>
                    <a href="#services"><i class='bx bx-data' ></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="Images/User Interface Design.png" alt="">
                <div class="portfolio-layer">
                    <h4>User Interface Designing</h4>
                    <p>There are websites that you can make a user interface such as Abobe XD, Behance, UX Archive, Dribble, Wix and many more but we use Figma in our project "Intellidex". With the help of Figma, a strong design tool, you can make anything, including logos, websites, and apps.</p>
                    <a href="#services"><i class='bx bxs-palette' ></i></a>
                </div>
            </div>
        </div>
    </section>

   <!-- contactsection design -->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>
    <h2>You can email me @torneaaziel7@gmail.com</h2>
    <h2>Or contact me at my Phone Number: 099465542538</h2>

    <?php
    require_once "database.php"; // Include your database connection file

    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $errors = array();

        if(empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
            array_push($errors, "All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }

        if(count($errors) > 0) {
            foreach($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            $sqlInsertInfo = "INSERT INTO contact_details_db (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)";
            $stmtInsertInfo = mysqli_stmt_init($conn);

            if(mysqli_stmt_prepare($stmtInsertInfo, $sqlInsertInfo)) {
                mysqli_stmt_bind_param($stmtInsertInfo, "sssss", $name, $email, $phone, $subject, $message);
                mysqli_stmt_execute($stmtInsertInfo);
                echo "<div class='alert alert-success success-alert w-50 mx-auto text-center'>Thanks the message you provided was successfully submitted.</div>";
            } else {
                die("Error in preparing SQL statement to insert contact details");
            }
        }
    }
    ?>

    <form method="post" action="#">
        <div class="input-box">
            <input type="text" placeholder="Full Name" name="name" required>
            <input type="email" placeholder="Email Address" name="email" required>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Mobile Number" name="phone" required>
            <input type="text" placeholder="Email Subject" name="subject" required>
        </div>
        <textarea name="message" cols="30" rows="10" placeholder="Your Message/Send Feedbacks" required></textarea>
        <input type="submit" value="Send Message" class="btn" name="submit">
    </form>
</section>


        <div class="social-media">
            <a href="https://www.linkedin.com/in/aziel-tornea-149461252/" target="_blank"><i class="bx bxl-linkedin" ></i></a>
            <a href="https://www.facebook.com/aziel.tornea" target="_blank"><i class="bx bxl-facebook" ></i></a>
            <a href="https://github.com/torneaaziel7" target="_blank"><i class='bx bxl-github' ></i></a>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Aziel Tornea | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bxs-up-arrow-square' ></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- custom js-->
    <script src="js/script.js"></script>
</body>
</html>