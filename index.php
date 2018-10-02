<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>MS Motor Services</title> -->
    <title>Car Stats</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme|Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <!-- Header/Nav -->
    <header class="scrollspy" id="home">
        <div class="navbar-fixed">
            <nav class="nav-wrapper black navbar-fixed">
                <div class="container">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="right-nav" href="#home">Home</a></li>
                        <li><a class="right-nav" href="#about">About</a></li>
                        <li><a class="right-nav" href="#services">Services</a></li>
                        <li><a class="right-nav" href="#contact">Contact</a></li>
                        <li><a href="#" class="btn-floating black tooltipped"
                                data-tooltip="Facebook"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                    <ul class="hide-on-med-and-down">
                        <li><a class="disabled" href="tel:+44123456789"><i class="fas fa-phone"></i>01234 56789</a></li>
                        <li><a class="disabled" href="#"><i class="far fa-clock"></i>Mon–Fri 9am–5.30pm</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav grey lighten-4">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="tel:+440123456789"><i class="fas fa-phone"></i></a></li>
        </ul>
        <div class="expand">
            <a class="btn-floating btn-large pulse red darken-3 " href="#about"><i class="material-icons">expand_more</i></a>
        </div>
        <div class="hero">
            <img src="img/logo1.png" alt="Logo image">
        </div>
    </header>

    <!-- About -->
    <section class="section scrollspy grey lighten-4" id="about">
        <div class="container">
            <h3 class="center-align about">About</h3>
            <div class="row">
                <div class="col s12 l6">
                    <img src="img/repair.jpg" alt="food picture" class="responsive-img materialboxed">
                </div>
                <div class="col s12 l5 offset-l1">
                    <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section" id="services">
        <div class="container">
            <h3 class="center-align services">Our Services...</h3>
            <div class="row">
                <div class="col s12 l4">
                    <div class="card red">
                        <div class="card-image">
                            <img class="activator" src="img/services.jpg" alt="Engine image">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text">Services<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Services<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card red">
                        <div class="card-image">
                            <img class="activator" src="img/tyre.jpg" alt="Wheel image">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text">Tyres<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Tyres<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card red">
                        <div class="card-image">
                            <img class="activator" src="img/exhaust.jpg" alt="Exhaust image">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text">Exhausts<i class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Exhausts<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4 push-l2">
                    <div class="card red">
                        <div class="card-image">
                            <img class="activator" src="img/mot.jpg" alt="Wheel image">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text">Mot/Testing<i class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Mot/Testing<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 push-l2">
                    <div class="card red">
                        <div class="card-image">
                            <img class="activator" src="img/courtesy.jpg" alt="Car image">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator white-text">Courtesy Car<i class="material-icons right">more_vert</i></span>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Courtesy Car<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- parallax -->

    <div class="parallax-container">
        <div class="parallax"><img src="img/parallax.jpg" alt="Car Image"></div>
    </div>

    <!-- Contact -->
    <section class="section scrollspy" id="contact">
        <div class="container">
            <h3 class="center-align contact">Contact Us</h3>
            <div class="row">
                <div class="col s12 l5 offset-l1">
                    <div id="map"></div>
                </div>
                <div class="col s12 l5 offset-l1">

                            <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                            } if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oops! Something went wrong, please try again.</div>";
                            }
                            ?>
                            
                    <form method="post" action="mailer.php">
                        <div class="input-field">
                            <i class="material-icons prefix red-text">person</i>
                            <input id="name" type="text" name="name" required="" oninvalid="this.setCustomValidity('Please enter your name')">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix red-text">email</i>
                            <input type="email" id="email" name="email" required="" oninvalid="this.setCustomValidity('Please enter your email')">
                            <label for="email">Your Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix red-text">message</i>
                            <textarea name="message" id="message" class="materialize-textarea" required="" oninvalid="this.setCustomValidity('Please type a message')"></textarea>
                            <label for="message">Your message</label>
                        </div>
                        <div class="input-field center">
                            <button class="btn red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer red">
        <div class="container">
            <div class="row">
                <div class="col s12 l5 white-text">
                    <h5 class="grey-text text-lighten-3">Our Address</h5>
                    <p>Car Stats <br>
                        Unit 15 <br>
                        Bristol Industrial Estate <br>
                        Bristol <br>
                        BS7 9SJ <br>
                        Email: info@carstats.co.uk <br>
                        Monday – Friday 9am – 5.30pm
                    </p>
                </div>
                <div class="col s12 l5 push-l2 white-text">
                    <h5>Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">About</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Services</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Contact</a></li>
                        <li><a class="grey-text text-lighten-3" href="#"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright black center">
            <div class="container">
                <p>&copy;2018 <a href="https://github.com/PampuchSkrytozerca">Mariusz Stanosz</a></p>
            </div>
        </div>
    </footer>


    <script src="vendors/js/jquery-3.3.1.min.js"></script>
    <script src="vendors/js/materialize.min.js"></script>
    <script src="map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv4Fkc6Q1m2NAmSFyoJRlq60rQQK4ZUqE&callback=initMap"
        type="text/javascript"></script>
    <script src="script.js"></script>
</body>

</html>