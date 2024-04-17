<!-- // session_start();
// $email=$_SESSION['user'];
// if ($email=null) { -->




    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Travel Agency - More</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Monday-Friday 08:00-18:00</a></li>
              <li><a href="http://wa.me/237621594365"><i class="fa fa-whatsapp"></i>Mon-Whatsapp 621-594-365</a></li>
 
            </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Travel Agency</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="admin.php">Admin
                              
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="hotels.php">Reservation Hotel
                            <span class="sr-only">  (current)   </span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="billets.php">Reservation Billet </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Se Deconnecter </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Travel abroad</h6>
                        <h4>Travel Agency<br> </h4>
                        <p>“Satisfaire le desir de nos clients est notre priorité. Avec Travel Agency resolvez tout vos
                            probleme
                            avec accompagnement de voyage pour l'etranger.”</p>
                        <a href="contact.html" class="filled-button">contact us</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Travel abroad</h6>
                        <h4>Travel Agency<br> </h4>
                        <p>“Satisfaire le desir de nos clients est notre priorité. Avec Travel Agency resolvez tout vos
                            probleme
                            avec accompagnement de voyage pour l'etranger.”</p>
                        <a href="services.html" class="filled-button">our services</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Travel abroad</h6>
                        <h4>Travel Agency<br> </h4>
                        <p>“Satisfaire le desir de nos clients est notre priorité. Avec Travel Agency resolvez tout vos
                            probleme
                            avec accompagnement de voyage pour l'etranger.”</p>
                        <a href="about.html" class="filled-button">learn more</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->




    <div class="container">
        <div class="billet">
            <br>
            <h2 align="center">Liste des Reservations d'Hotel</h2>
            <br><br>
            <center>
                <table>
                    <tr>
                        <th>NUMERO</th>
                        <th>NOM</th>
                        <th>EMAIL</th>
                        <th>TELEPHONE</th>
                        <th>VILLE</th>
                        <th>TYPE D'HOTEL</th>
                        <th>DATE DE RESERVATION</th>
                        <th>DUREE DE SEJOUR</th>
                        <th>BUDJET</th>
                        <th>STATUT</th>
                        <th>OPTION</th>
                    </tr>
                    <tr>
                        <?php
                        require_once 'viewHotel.php';
                        while ($datas = $recup->fetch()) {
                            ?>
                            <td>
                                <?php echo $datas['id'] ?>
                            </td>
                            <td>
                                <?php echo $datas['nom'] ?>
                            </td>
                            <td>
                                <?php echo $datas['email'] ?>
                            </td>
                            <td>
                                <?php echo $datas['telephone'] ?>
                            </td>
                            <td>
                                <?php echo $datas['ville'] ?>
                            </td>
                            <td>
                                <?php echo $datas['typehotel'] ?>
                            </td>
                            <td>
                                <?php echo $datas['date'] ?>
                            </td>
                            <td>
                                <?php echo $datas['duree'] ?>
                            </td>
                            <td>
                                <?php echo $datas['budjet'] ?>
                            </td>
                            <td>
                                <?php echo $datas['statut'] ?>
                            </td>
                            <td>
                                <form action="deleteHotel.php" method="POST"><button name="id"
                                        value="<?php echo $datas['id'] ?>"
                                        style="background-color: transparent;  color: rgb(77, 160, 205);  cursor: pointer; border: none;">Delete
                                    </button></form>
                                <form action="updateHotel.php" method="POST"> <button name="id"
                                        value="<?php echo $datas['id'] ?>"
                                        style="background-color: transparent;  color: rgb(77, 160, 205);  cursor: pointer; border: none;">Update
                                    </button></form>
                            </td>
                        </tr>
                    <?php
                        }
                        ?>
                </table>
            </center>
        </div>
        <br><br>
        
    </div>


    <br><br>


    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Travel Agency</h4>
                    <p>“Satisfaire le desir de nos clients est notre priorité. Avec Travel Agency resolvez tout vos
                        probleme avec
                        accompagnement de voyage pour l'etranger.”</p>
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Nos Destinations</h4>
                    <ul class="menu-list">
                        <li><a href="contact.html">Pays du Schengen</a></li>
                        <li><a href="contact.html">Pays Asiatique</a></li>
                        <li><a href="contact.html">Pays Americains</a></li>
                        <li><a href="contact.html">Pays Africains</a></li>
                        <li><a href="contact.html">Pays Australiens</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Nos Services</h4>
                    <ul class="menu-list">
                        <li><a href="contact.html">Accompagnement dans la procedure de voyage</a></li>

                        <li><a href="billet.html">Reservation des Billets d'avion</a></li>
                        <li><a href="hotel.html">Reservation d’hotel</a></li>
                        <li><a href="contact.html">Demande de visa en ligne</a></li>
                        <li><a href="about.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item last-item">
                    <h4>Contact Us</h4>
                    <div class="contact-form">
                        <form id="contact footer-contact" action="contact.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="tel" type="tel" class="form-control" id="tel" placeholder="Phone number" required="">
                    </fieldset>
                  </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your Message and your Phone number" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button" name="send">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright & 2024 | Travel Agency All right reserved 1.0 <a href="#"> Travel Agency </a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) {                   //declaring the array outside of the
            if (!cleared[t.id]) {                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value = '';         // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>
<?php
// } else {
// echo ' <script> alert("Desolée Vous voulez nous piratez."); </script>';
// header('Location:index.html');
// }
?>