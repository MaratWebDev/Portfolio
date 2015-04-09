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
                <header>
                    <div class="box-content">
                        <h2>Projects</h2>
                    </div>
                    
                </header>
                <article class="project" id="project">
                        <h3>Wales By Bike</h3>
                        <div class="project-item">
                            <figure>
                                <img  src="img/project_image.jpg" alt="Screenshots from project">
                            </figure>
                            <p>
                                Wales by Bike is my personal project. I decided to create this example website to practise my front end development skills I've learned at <a href="http://teamtreehouse.com/maratfaizov">Treehouse</a>.<br>
                                The site is responsive and built with HTML5, SCSS and jQuery. Map on the Contact page is customised using Google Maps API. Feel free to take a look at the code on my <a href="https://github.com/MaratWebDev/WalesByBike.git">GitHub</a> account.<br>
                                <a href="http://www.maratwebdev.com/walesbybike/">View demo</a>.
                            </p>
                        </div>
                </article>
            </section>
            <section id="about">
                <header>
                    <div class="box-content">
                        <h2>About Marat</h2>
                        <h3>Front End Developer</h3>
                    </div>
                </header> 
                <article>
                    <h3>Skills</h3>
                    <ul>
                        <li>
                            <img src="img/icons/html5.png" alt="HTML5">
                            <strong>HTML5</strong>
                        </li>
                        <li>
                            <img src="img/icons/css3.png" alt="CSS3">
                            <strong>CSS3</strong>
                        </li>
                        <li>
                            <img src="img/icons/jquery.png" alt="JQuery">
                            <strong>jQuery</strong>
                        </li>
                        <li>
                            <img src="img/icons/javascript.png" alt="JavaScript">
                            <strong>JavaScript</strong>
                        </li>
                    </ul>
                </article>
            </section>
            <section id="contact">
                <header>
                    <div class="box-content">
                        <h2>Let's Discuss Your Project</h2>
                    </div>    
                </header>
                <form method="post" name="Emailform" action="mail.php" target="_self" onSubmit="return checkemail(this)">
                    <div id="form-content">
                        <fieldset>
                            <label for="name"><span>Name:</span></label> 
                            <input type="text" name="name" required="required" id="name">
                        </fieldset>
                        <fieldset>
                            <label for="email"><span>Email:</span></label>
                            <input type="email" name="email" required="required" id="email">
                        </fieldset>
                        <fieldset>
                            <label for="contact"><span>Phone or Skype:</span></label>
                            <input type="text" name="contact" id="contact">
                        </fieldset>
                        <fieldset>
                            <label for="project_details"><span>Project Details:</span></label>
                            <textarea rows="10" cols="50" id="project_details" onkeyup="adjust_textarea(this)"></textarea>
                        </fieldset>
                        <input name="submit" id="submit" type="submit" value="Email Me">
                    </div>
                </form>
            </section>
            <footer>
                <div class="box-content">
                    <small>2015 &copy; MaratWebDev</small>
                    <a href="https://github.com/MaratWebDev" class="icon-github4"></a>
                </div>
            </footer>
        </div>
        <script src="js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script charset="utf-8" type="text/javascript" src="js/jquery.js"></script>
    </body>

</html>











