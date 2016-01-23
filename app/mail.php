<!DOCTYPE html>

<html>
    <head>
        <title>Marat Web Developer</title>
        <meta name="description" content="Front End Developer">
        <meta name="keywords" content="HTML, CSS, SASS, JavaScript, jQuery">
        <meta name="author" content="Marat Faizov">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>

    <body>
        <div id="wrapper">
            <header class="main-header">
                <div class="box-content">
                    <div id="logo"><a href="/">MaratWebDev</a></div>
                    <a class="nav-icon" href="#menu"><img src="img/icons/nav-icon.png" alt="Nav-icon"></a>
                    <div class="header-text">
                        <h1>Front End Developer</h1>
                        <p>I will build your website in <span id="textslider">HTML5, CSS3, JavaScript &amp; jQuery</span>.</p><p> Your Project will have great mobile/tablet responsive design and fully customisable on your demand.</p>
                    </div>
                    <nav id="menu" class="nav-collapse">
                        <ul>
                            <li><a href="#project">Projects</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </header>
            <section id="content">
            <?php
            if(isset($_POST['email'])) {
                 
                // EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = "maratfaizov83@gmail.com";
                $email_subject = "Email from MaratWebDev";
                 
                $name = $_POST['name']; // required
                $email_from = $_POST['email']; // required
                $contact_from = $_POST['contact'];
                $comments = $_POST['project_details']; // required
                 
                $email_message = "Form details below.\n\n";
                 
                function clean_string($string) {
                  $bad = array("content-type","bcc:","to:","cc:","href");
                  return str_replace($bad,"",$string);
                }
                 
                $email_message .= "Name: ".clean_string($name)."\n";
                $email_message .= "Email: ".clean_string($email_from)."\n";
                $email_message .= "Contact: ".clean_string($contact_from)."\n";
                $email_message .= "Message: ".clean_string($comments)."\n";
                 
                 
            // create email headers
            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers); 
            ?>
             
           
           <div class="box-content">
               <p>Thank you for contacting me. I will be in touch with you very soon.</p>
            </div>  
             
            <?php
            }
            ?>  


            </section>

            <footer>
                <div class="box-content">
                    <small>2016 &copy; MaratWebDev</small>
                    <a href="https://github.com/MaratWebDev" class="icon-github4"></a>
                </div>
            </footer>
        </div>
        <script src="js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script charset="utf-8" type="text/javascript" src="js/jquery.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-62013338-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>

</html>