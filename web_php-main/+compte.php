<?php
$servername="localhost";
$username="root";
$password="";
$dbname="h20_helper";

//connexion
$lien=mysqli_connect($servername,$username,$password,$dbname);
//verifier la connexion 
if(mysqli_connect_error())
{
  echo"La connexion a echoue ! <br>" ;
}

session_start(); 
//$sessionid = $_SESSION['session_id'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>H20-helper</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- css du template -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- partie css -->
  <link href="assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <link rel="stylesheet" href="../assets/css/carte3.css" />

</head>

<body>

  
  <!--menu-->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/photo/3A7202EC-2136-45C5-BAA8-D0EA51EF4BB2.PNG" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">H20-helper</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/?lang=fr" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://fr-fr.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.skype.com/fr/" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://fr.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Qui sommes-nous ?</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Guide d'achats </span></a></li>
          <li><a href="#mapForm" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Carte</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Login</span></a></li>
        </ul>
        
      </nav>
    </div>
  </header>

  <!-- home -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>H20-helper</h1>
      <p><strong>QUE CHOISIR?</strong><br><br> <br>  <span class="typed" data-typed-items=", Ifri?, Guedilla?, Saida?, Lalla Khedija? "></span></p>
    </div>
  </section>
  

  <main id="main">

    <!-- Qui sommes-nous?  -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Qui sommes-nous?</h2>
         <p>Bienvenue sur notre site de comparateur d'eaux embouteillées ! Nous sommes une plateforme en ligne dédiée à vous aider à trouver la meilleure bouteille d'eau pour votre santé et votre style de vie. Nous comprenons que choisir la bonne eau embouteillée peut être difficile avec le nombre croissant de marques et de types d'eau disponibles sur le marché. C'est pourquoi nous avons créé un outil de comparaison facile à utiliser pour vous aider à trouver la bouteille d'eau parfaite pour vous. Notre site vous permet de comparer les caractéristiques et les avantages de différentes eaux embouteillées, telles que leur pH, leur minéralisation, leur empreinte carbone et leur prix, pour vous aider à prendre une décision éclairée. Nous sommes là pour vous aider à choisir la meilleure eau pour votre santé et votre bien-être, ainsi que pour l'environnement.</p>
        </div>

       
          <div class="col-lg-8 pt-4 pt-lg-0 content" >
            <h3>Comparateur d'eaux embouteillées</h3>
            <p class="fst-italic">
              "Un verre d'eau, ça vous tente ? Trouvez la meilleure bouteille grâce à notre comparateur !"
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nom</strong> <span>H20-helper</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Siteweb</strong> <a href="index.html">www.H20-helper.com</a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Numero de telephone</strong> <a href="tel:+1234567890">+213 456 7890</a></li>
                                                                                    


                  <li><i class="bi bi-chevron-right"></i> <strong>Pays</strong> <span>Alger, Algerie</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Date du projet</strong> S4  L2 info </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Createurs</strong> <span>chahinez/malak</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Montor</strong> prof de D.WEB</li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email</strong> <a href="mailto:H20-helper@esst.com">H20-helper@esst.com</a>
</li>
                </ul>                                                          
              </div>
            </div>
          </div>
        </div>
        </div>
           </div>
    </section>

    <!-- ======= Quelques chiffres Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Quelques Chiffres </h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clients satisfaits</strong> merci pour votre confiance!</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projets</strong> toujours plus d'innovation!</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>nombre de visiteurs/jrs</strong> toujours a votre service!</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Membres</strong> l'equipe s'agrandit</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <img src="../assets/img/photo/glass-water-macro-shot.jpg" class="img-fluid" alt="" >

   
    
    <!-- Guide d'achats -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Quelle eau boire ?</h2>
          <p>Eau du robinet, eau en bouteille ou eau filtrée à domicile, quelle eau boire ? Le choix n'est pas toujours facile, tant les informations sont multiples et contradictoires, les publicités influentes et les intérêts économiques puissants.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Eau du robinet?</a></h4>
            <p class="description">L'eau du robinet suscite de la méfiance bien qu'elle soit très contrôlée.En cas de doute, il faut éviter de consommer le premier jet du matin. C'est en effet quand l'eau stagne dans les canalisations qu'elle peut se charger en plomb, il faut donc la laisser couler quelques instants avant la première utilisation de la journée. Sauf cas particuliers, l'eau du robinet est donc potable et de qualité.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Eau de source?</a></h4>
            <p class="description">Contrairement aux eaux minérales, les eaux de source sont soumises à la même réglementation que l'eau du robinet, c'est-à-dire qu'elles doivent remplir tous les critères de potabilité. Leur composition peut varier dans le temps. Quand on prend l'habitude d'acheter une eau de source pour sa composition, il importe donc de vérifier son étiquette de temps à autre.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Eau en bouteille?</a></h4>
            <p class="description"> La baisse du pouvoir d'achat et la crise économique y ont été pour beaucoup, mais les eaux en bouteille doivent compter avec un nouvel ennemi, la prise de conscience de leur impact environnemental. Il existe deux grandes catégories d'eaux en bouteille : les eaux minérales et les eaux de source. Elles sont d'origine souterraine, comme d'ailleurs les deux tiers de l'eau du robinet distribuée en Algerie.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Eau minerale?</a></h4>
            <p class="description">Les eaux minérales présentent une forte particularité, elles ne répondent pas à la même réglementation que l'eau du robinet. La composition d'une eau minérale doit rester stable dans le temps, et, comparées à l'eau du robinet, les eaux minérales ont droit à peu de traitements. On peut intervenir sur le fer, le manganèse, le fluor, mais on ne fait aucun traitement de désinfection.Certaines eaux très minéralisées ne conviennent pas forcément à un usage quotidien ; mieux vaut en vérifier la composition, obligatoirement indiquée sur l'étiquette.</p>
          </div>
          
        </div>

      </div>
    </section>


    <!-- carte-->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Carte</h2>
        </div>

 <!--partie css -->
      <style>
          h3 {
    text-align: center;
    font-size: 2; 
    margin-bottom: auto; 
    margin-top: 0;
  }
  h4{
    text-align: center;
    font-size: 2; 
    margin-bottom: auto; 
  }
        </style>

      <h3> Carte interactive de la qualité de l’eau</h3>
      <br>
      <h4>Découvrez la qualité des eaux embouteillees de votre commune</h4>
      <br>
      <div class="mapForm" id="mapForm">
          <form id="formCarteEau" class="mapFormContainer" method="post" autocomplete="off">
              <div class="mapFormContainerInner input-wrapper">
                  <label for="zipCodeOrCity">Votre code postal/commune :</label>
                  <div class="field"><input type="text" id="zipCodeOrCity" class="autocomplete" name="zipCodeOrCity" placeholder="Code postal ou Ville">
                      <input type="hidden" id="communeId" name="communeId" value=""></div><div class="cal-error-text" id="zipCodeOrCity-erreur" role="alert"></div>
                      <div class="cal-error-text" id="zipCodeOrCity-autocomplete-erreur" role="alert"></div></div>
                      <div class="mapFormContainerInner select-wrapper"><label for="RadiusList">Dans un rayon de :</label>
                          <div class="field"><select class="select disabled" id="RadiusList" name="RadiusList">
                              <option value="0">Sélectionnez une distance</option><option value="5" selected>Moins de 5 km</option>
                              <option value="10">Moins de 10 km</option><option value="15">Moins de 15 km</option>
                              <option value="20">Moins de 20 km</option><option value="50">Moins de 50 km</option></select></div>
                              <div class="cal-error-text" id="RadiusList-erreur" role="alert"></div></div>
                              <div class="mapFormContainerInner"><button type="submit" class="btn-quaternary">
                                  <i class="icon-playarrow" aria-hidden="true"></i>
          Rechercher
      </button></div></form></div>
      <div class="mapContainer">
          <div id="mapBlocResult" class="mapBlocResult mapBlocResulteau"> </div>
          <div class="mapBlocMap mapBlocMapeau">
              <div id="js-mapLegendOverlay" class="mapLegendOverlay mapLegendOverlayEau">
                  <div id="js-mapLegendOverlayTitle" class="mapLegendOverlayTitle">
                      <i class="icon-picto_legende" aria-hidden="true"></i>
                      <br><br>
          <h5><strong><u>Légende</u></strong></h5>
          </div><div id="js-mapLegendOverlayContent" class="mapLegendOverlayContent mapLegendOverlayContentEau"><span><img title="Eau de bonne qualité" alt="Eau de bonne qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-carte-qualite-eau-vert.png"><img title="Eau de bonne qualité" alt="Eau de bonne qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-small-carte-qualite-eau-vert.png">
              Bon</span><span><img title="Eau de qualité satisfaisante" alt="Eau de qualité satisfaisante" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-carte-qualite-eau-vert-clair.png"><img title="Eau de qualité satisfaisante" alt="Eau de qualité satisfaisante" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-small-carte-qualite-eau-vert-clair.png">
              Satisfaisant</span><span><img title="Eau de qualité médiocre" alt="Eau de qualité médiocre" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-carte-qualite-eau-orange.png"><img title="Eau de bonne qualité" alt="Eau de bonne qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-small-carte-qualite-eau-orange.png">
              Médiocre</span><span><img title="Eau de mauvaise qualité" alt="Eau de mauvaise qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-carte-qualite-eau-rouge.png"><img title="Eau de bonne qualité" alt="Eau de bonne qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-small-carte-qualite-eau-rouge.png">
              Mauvais</span><span><img title="Eau de très mauvaise qualité" alt="Eau de très mauvaise qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-carte-qualite-eau-noir.png"><img title="Eau de bonne qualité" alt="Eau de bonne qualité" src="https://st.qccdn.fr/images/cartes/eau/pointeurs-small-carte-qualite-eau-noir.png">
              Très Mauvais</span> 

          <div id="map"></div>
      </div>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
      <script src="../assets/javascript/carte.js"></script>
   
      <br><br><br><br><br>
   <div class="mapForm" id="mapForm">
   <form action="bdd.php"  id="formCarteEau" class="mapFormContainer" method="post" autocomplete="off">
 <div class="mapFormContainerInner input-wrapper">
  <h5 align="center"><strong>Pour avoir des renseignements sur les composants d'une eau precise, il vous suffit d'entrer son nom !</strong></h5>
                 <br> <label for="zipCodeOrCity" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Veuillez entrer le nom de  la marque :</label>
                  <div align ="center"class="field"><input  type="text" id="marques"  name="reseign" placeholder="nom de la marque ">
                 <br><br>   <input type="submit" value="Valider" name="reseignements">
                  </form></div>     

                  <br><br><br><br><br> <br>
                  
                  <form action="bdd.php" id="formCarteEau" class="mapFormContainer" method="post" autocomplete="off">
                <div class="mapFormContainerInner input-wrapper">
                 <h5 align="center"><strong>Pour trouver l'equivalent d'une eau par rapport a un composant precis,  &nbsp;il vous suffit d'entrer son nom !</strong></h5>
                                <br> <label for="zipCodeOrCity" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Veuillez entrer le nom de  la marque :</label>
                                 <div align ="center"class="field"><input  type="text" id="marques"  name="equiva" placeholder="nom de la marque ">
                                  <br><br> <label for="zipCodeOrCity" align="center">Veuillez entrer le composant souhaite :</label>
                                  <div align ="center"class="field">
                                    <select name="choix" id="choix">
                                        <option value="Potassium">Potassium</option>
                                        <option value="Calcium">Calcium</option>
                                        <option value="Magnesium">Magnesium</option>
                                        <option value="Sodium">Sodium</option>
                                        <option value="Bicarbonate">Bicarbonate</option>
                                        <option value="sulfates">sulfates</option>
                                        <option value="Chlorure">Chlorure</option>
                                        <option value="Nitrate">Nitrate</option>
                                        <option value="Nitrite">Nitrite</option>
                                    </select>
                                <br><br>  
                                 <input type="submit" value="Valider" name="compare">
                                 </form> 

                                 <br><br><br><br><br> <br>
                <form action="bdd.php" id="formCarteEau" class="mapFormContainer" method="post" autocomplete="off">
                  <div class="mapFormContainerInner input-wrapper">
                   <h5 align="center"><strong>Vous voulez jeter un coup d'oeil a la liste des eaux minerales de notre base de donnees ?</strong></h5>
                                  <br>   <input type="submit" value="Oui" name="bdd">
                                   </form> 
                  </section>


    <!-- login  -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">




        <?php

$email_u=$_GET['email_u'];
          

 $sql2= "SELECT nom_u,prenom_u FROM utilisateur WHERE email_u='$email_u'";
 $result2 = $lien->query($sql2);
 
 if ($result2->num_rows > 0) {
 if ($row = $result2->fetch_assoc()) {
      $nom_u = $row['nom_u'];
      $prenom_u = $row['prenom_u'];
      
      echo "<h2>Bonjour " . $nom_u . " " . $prenom_u . "</h2>";
  }
} else {
  echo "Aucun résultat trouvé.";}





?>

          <style>
            input[type="submite"] {
              background-color: #2196f3;
              color: white;
              margin-left: 350px;
              padding: 10px;
              border: none;
              border-radius: 10px;
              
            }
          </style>
            
            <form action="bdd.php" method="POST">
              <label for="eleve"> Vous cherchez une eau avec un composant élevé spécifique ? Il vous suffit de l'entrer pour que nous effectuions la recherche pour vous trouver la meilleure correspondance.</label>
              
              <select name="choix+" id="choix+">
                <option value="Potassium">Potassium</option>
                <option value="Calcium">Calcium</option>
                <option value="Magnesium">Magnesium</option>
                <option value="Sodium">Sodium</option>
                <option value="Bicarbonate">Bicarbonate</option>
                <option value="sulfates">sulfates</option>
                <option value="Chlorure">Chlorure</option>
                <option value="Nitrate">Nitrate</option>
                <option value="Nitrite">Nitrite</option>
            </select>
            <br>
           <input type="submit" value="Chercher" name="recherche+" > Chercher</button>
          </form>
          
              <br><br><br>
              <form action="bdd.php" method="POST">
                <label for="faible"> Vous cherchez une eau avec un composant spécifique à faible niveau ? Il vous suffit de l'entrer pour que nous effectuions la recherche pour vous trouver la meilleure correspondance.</label>
                <select name="choix-" id="choix-">
                  <option value="Potassium">Potassium</option>
                  <option value="Calcium">Calcium</option>
                  <option value="Magnesium">Magnesium</option>
                  <option value="Sodium">Sodium</option>
                  <option value="Bicarbonate">Bicarbonate</option>
                  <option value="sulfates">sulfates</option>
                  <option value="Chlorure">Chlorure</option>
                  <option value="Nitrate">Nitrate</option>
                  <option value="Nitrite">Nitrite</option>
              </select>
              <br>
              <button type="submit" value="Chercher" name="recherche-" >Chercher</button>
              </form>
                <br><br><br><br><br>
              <form action="login.php" method="POST">
              <button type="submite" value="              LOGOUT" name="logout_u" >LOGOUT</button>
            </form>

            
          </div>
          
        
        </div>

    </section>

  </main>

  <!-- partie du bas dans le menu -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        ESST &nbsp;&nbsp;&nbsp;<strong><span>D.WEB</span></strong>
      </div>
      <div class="credits">
          <a href="https://malakchahinez.com/">H20-helper</a>
      </div>
    </div>
  </footer>

 
  <!-- animations javascript en + -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- animation javascript -->
  <script src="../assets/javascript/main.js"></script>

</body>

</html>