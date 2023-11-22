<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="manifest" href="./manifest.json" />
    
    <script defer="defer" src="./static/js/main.626399a9.js"></script>
    <link href="./static/css/main.6c4349ff.css" rel="stylesheet" />
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Visite Burundi App</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

<!-- /leaflet -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
      <!-- Assurez-vous de placer ceci APRÈS le CSS de Leaflet -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>
 <!-- leaflet-routing-machine -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
 <style>
        #map {
            height: 700px;
            width: 1100px;
            margin:auto;

        }
        .leaflet-popup-content img {
  width: 300px;
  height: 200px;
}
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">VisiteBurundi</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Acueil</a>
                        <a href="#about" class="nav-item nav-link">A propro du Burundi</a>
                        <a href="#feature" class="nav-item nav-link">Carte</a>
                        <a href="#pricing" class="nav-item nav-link">Ajout</a>
                        <a href="#review" class="nav-item nav-link">Site Touristique</a>
                        <a href="#contact" class="nav-item nav-link">Maison</a>
                    </div>
                    <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Actualiser</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">La beauté du Burundi avec notre application de visite</h1>
                            <p class="text-white pb-3 animated slideInDown">Découvrez la beauté du Burundi à travers notre application de visite. Plongez-vous dans la richesse culturelle de ce pays enchanteur et explorez ses paysages à couper le souffle. Que vous soyez intéressé par la nature, l'histoire ou la gastronomie,
                                 notre application vous guidera dans votre voyage pour découvrir tous les trésors cachés du Burundi.
                                  Laissez-vous séduire par la diversité de ce pays et vivez des expériences uniques grâce à notre application de visite personnalisée.
                                   Que vous soyez un voyageur en solo, en famille ou en groupe, notre application vous accompagnera tout au long de votre aventure au Burundi.</p>
                            <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Accueil</a>
                            <a href="" class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Contactez-Nous</a>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                
                                <img class="img-fluid" src="img/c.jpg" alt="">
                                <img class="img-fluid" src="img/imd.webp" alt="">
                                <img class="img-fluid" src="img/imga.webp" alt="">
                                <img class="img-fluid" src="img/DncAIBuWwAA6k-6.jpg" alt="">
                                
                                
                                <!-- <img class="img-fluid" src="img/screenshot-5.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">A Propos du Burundi</h5>
                        <h1 class="mb-4">#1 Burundi </h1><h2>Pays en Afrique de l'Est</h2>
                        <p class="mb-4">Le Burundi, en forme longue la république du Burundi, est un pays d'Afrique de l'Est sans accès à la mer mais possédant un grand rivage sur le lac Tanganyika, situé dans la région des Grands
                             Lacs et bordé à l'ouest par la république démocratique du Congo, au nord par le Rwanda et à l'est et au sud par la Tanzanie.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <!-- <i class="fa fa-cogs fa-2x text-primary-gradient flex-shrink-0 mt-1"></i> -->
                                    <i class=""></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0" data-toggle="counter-up">17</h2>
                                        <p class="text-primary-gradient mb-0">Provinces</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <!-- <i class="fa fa-comments fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i> -->
                                    <i class=""></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0" data-toggle="counter-up">27834</h2>
                                        <p class="text-secondary-gradient mb-0">Superficie en km2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Retour a l'Accueil</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="img/imag.webp">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
 <!-- Features Start -->
 <div class="container-xxl py-5" id="feature">
            <div class="container">
                <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s"> -->
        <nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Visite Burundi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color: #e3f2fd;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <?php
        include("conexion.php");
        ?>
        <?php
            $selectexc=$bdd->query("select * from province where nom='Bujumbura Mairie'");
            $Gitega=$bdd->query("select * from province where nom='Gitega'");
            $Rutana=$bdd->query("select * from province where nom='Rutana'");
            $Rumonge=$bdd->query("select * from province where nom='Rumonge'");
            $Ngozi=$bdd->query("select * from province where nom='Ngozi'");
            $Kayanza=$bdd->query("select * from province where nom='Kayanza'");
//bujumbura
            $hotel=$bdd->query("select hotel.nom, hotel.latitude, hotel.longitude from province inner join hotel on province.idpro=hotel.idpro where province.nom='Bujumbura Mairie'");
            $hopital=$bdd->query("select hopital.nom, hopital.latitude, hopital.longitude from province inner join hopital on province.idpro=hopital.idpro where province.nom='Bujumbura Mairie'");
            $pharmacie=$bdd->query("select pharmacie.nom, pharmacie.latitude, pharmacie.longitude from province inner join pharmacie on province.idpro=pharmacie.idpro where province.nom='Bujumbura Mairie'");
            $station=$bdd->query("select station.nom, station.latitude, station.longitude from province inner join station on province.idpro=station.idpro where province.nom='Bujumbura Mairie'");
            $site=$bdd->query("select site.nom, site.latitude, site.longitude from province inner join site on province.idpro=site.idpro where province.nom='Bujumbura Mairie'");
            $parking=$bdd->query("select parking.nom, parking.latitude, parking.longitude from province inner join parking on province.idpro=parking.idpro where province.nom='Bujumbura Mairie'");
            $maison=$bdd->query("select maison.description,maison.categorie,maison.latitude, maison.longitude from province inner join maison on province.idpro=maison.idpro where province.nom='Bujumbura Mairie'");
            $shop=$bdd->query("select shop.nom, shop.latitude, shop.longitude from province inner join shop on province.idpro=shop.idpro where province.nom='Bujumbura Mairie'");
//gitega
            $hotelg=$bdd->query("select hotel.nom, hotel.latitude, hotel.longitude from province inner join hotel on province.idpro=hotel.idpro where province.nom='Gitega'");
            $hopitalg=$bdd->query("select hopital.nom, hopital.latitude, hopital.longitude from province inner join hopital on province.idpro=hopital.idpro where province.nom='Gitega'");
            $pharmacieg=$bdd->query("select pharmacie.nom, pharmacie.latitude, pharmacie.longitude from province inner join pharmacie on province.idpro=pharmacie.idpro where province.nom='Gitega'");
            $stationg=$bdd->query("select station.nom, station.latitude, station.longitude from province inner join station on province.idpro=station.idpro where province.nom='Gitega'");
            $siteg=$bdd->query("select site.nom, site.latitude, site.longitude from province inner join site on province.idpro=site.idpro where province.nom='Gitega'");
            $parkingg=$bdd->query("select parking.nom, parking.latitude, parking.longitude from province inner join parking on province.idpro=parking.idpro where province.nom='Gitega'");
            $maisong=$bdd->query("select maison.description,maison.categorie,maison.latitude, maison.longitude from province inner join maison on province.idpro=maison.idpro where province.nom='Gitega'");
            $shopg=$bdd->query("select shop.nom, shop.latitude, shop.longitude from province inner join shop on province.idpro=shop.idpro where province.nom='Gitega'");
//Rutana
            $hotelr=$bdd->query("select hotel.nom, hotel.latitude, hotel.longitude from province inner join hotel on province.idpro=hotel.idpro where province.nom='Rutana'");
            $hopitalr=$bdd->query("select hopital.nom, hopital.latitude, hopital.longitude from province inner join hopital on province.idpro=hopital.idpro where province.nom='Rutana'");
            $pharmacier=$bdd->query("select pharmacie.nom, pharmacie.latitude, pharmacie.longitude from province inner join pharmacie on province.idpro=pharmacie.idpro where province.nom='Rutana'");
            $stationr=$bdd->query("select station.nom, station.latitude, station.longitude from province inner join station on province.idpro=station.idpro where province.nom='Rutana'");
            $siter=$bdd->query("select site.nom, site.latitude, site.longitude from province inner join site on province.idpro=site.idpro where province.nom='Rutana'");
            $parkingr=$bdd->query("select parking.nom, parking.latitude, parking.longitude from province inner join parking on province.idpro=parking.idpro where province.nom='Rutana'");
            $maisonr=$bdd->query("select maison.description,maison.categorie,maison.latitude, maison.longitude from province inner join maison on province.idpro=maison.idpro where province.nom='Rutana'");
            $shopr=$bdd->query("select shop.nom, shop.latitude, shop.longitude from province inner join shop on province.idpro=shop.idpro where province.nom='Rutana'");
//Ngozi
            $hoteln=$bdd->query("select hotel.nom, hotel.latitude, hotel.longitude from province inner join hotel on province.idpro=hotel.idpro where province.nom='Ngozi'");
            $hopitaln=$bdd->query("select hopital.nom, hopital.latitude, hopital.longitude from province inner join hopital on province.idpro=hopital.idpro where province.nom='Ngozi'");
            $pharmacien=$bdd->query("select pharmacie.nom, pharmacie.latitude, pharmacie.longitude from province inner join pharmacie on province.idpro=pharmacie.idpro where province.nom='Ngozi'");
            $stationn=$bdd->query("select station.nom, station.latitude, station.longitude from province inner join station on province.idpro=station.idpro where province.nom='Ngozi'");
            $siten=$bdd->query("select site.nom, site.latitude, site.longitude from province inner join site on province.idpro=site.idpro where province.nom='Ngozi'");
            $parkingn=$bdd->query("select parking.nom, parking.latitude, parking.longitude from province inner join parking on province.idpro=parking.idpro where province.nom='Ngozi'");
            $maisonn=$bdd->query("select maison.description,maison.categorie,maison.latitude, maison.longitude from province inner join maison on province.idpro=maison.idpro where province.nom='Ngozi'");
            $shopn=$bdd->query("select shop.nom, shop.latitude, shop.longitude from province inner join shop on province.idpro=shop.idpro where province.nom='Ngozi'");
//Kayanza
            $hotelk=$bdd->query("select hotel.nom, hotel.latitude, hotel.longitude from province inner join hotel on province.idpro=hotel.idpro where province.nom='Kayanza'");
            $hopitalk=$bdd->query("select hopital.nom, hopital.latitude, hopital.longitude from province inner join hopital on province.idpro=hopital.idpro where province.nom='Kayanza'");
            $pharmaciek=$bdd->query("select pharmacie.nom, pharmacie.latitude, pharmacie.longitude from province inner join pharmacie on province.idpro=pharmacie.idpro where province.nom='Kayanza'");
            $stationk=$bdd->query("select station.nom, station.latitude, station.longitude from province inner join station on province.idpro=station.idpro where province.nom='Kayanza'");
            $sitek=$bdd->query("select site.nom, site.latitude, site.longitude from province inner join site on province.idpro=site.idpro where province.nom='Kayanza'");
            $parkingk=$bdd->query("select parking.nom, parking.latitude, parking.longitude from province inner join parking on province.idpro=parking.idpro where province.nom='Kayanza'");
            $maisonk=$bdd->query("select maison.description,maison.categorie,maison.latitude, maison.longitude from province inner join maison on province.idpro=maison.idpro where province.nom='Kayanza'");
            $shopk=$bdd->query("select shop.nom, shop.latitude, shop.longitude from province inner join shop on province.idpro=shop.idpro where province.nom='Kayanza'");


            $i=0;
            // $m=$bdd->query("SELECT photo1 FROM maison");
            

//Bujumbura          
            
            
            echo"<ul>";
            
            while($lignematrice=$selectexc->fetch())
            {
              echo"<details><summary>".$lignematrice[1]."</summary>";
 //debut hotel                    
              $i=0;
            echo"<ul>";
              echo"<details><summary>Hotels</summary>";
              while ($lignematric = $hotel->fetch()) {
                echo "<li>";
                echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematric["nom"] . "', '" . $lignematric["latitude"] . "', '" . $lignematric["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematric["nom"] . "' data-latitude='" . $lignematric["latitude"] . "' data-longitude='" . $lignematric["longitude"] . "'>" . $lignematric["nom"] . "</a>";
                echo "</li>";
                $i = $i + 1;
            }
      
              echo"</details>";
            echo"</ul>";
//fin hotel 
//debut hopital                    
$i=0;
echo"<ul>";
  echo"<details><summary>Hopitals</summary>";
  while ($lignematri = $hopital->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematri["nom"] . "', '" . $lignematri["latitude"] . "', '" . $lignematri["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematri["nom"] . "' data-latitude='" . $lignematri["latitude"] . "' data-longitude='" . $lignematri["longitude"] . "'>" . $lignematri["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin hopital 
//debut pharamcie                    
$i=0;
echo"<ul>";
  echo"<details><summary>Pharmacies</summary>";
  while ($lignematrip = $pharmacie->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieupha(event, '" . $lignematrip["nom"] . "', '" . $lignematrip["latitude"] . "', '" . $lignematrip["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrip["nom"] . "' data-latitude='" . $lignematrip["latitude"] . "' data-longitude='" . $lignematrip["longitude"] . "'>" . $lignematrip["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin pharamcie 

//debut site                    
$i=0;
echo"<ul>";
  echo"<details><summary>Sites Touristiques</summary>";
  while ($lignematris = $site->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieusite(event, '" . $lignematris["nom"] . "', '" . $lignematris["latitude"] . "', '" . $lignematris["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematris["nom"] . "' data-latitude='" . $lignematris["latitude"] . "' data-longitude='" . $lignematris["longitude"] . "'>" . $lignematris["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin site 
//debut shop                    
$i=0;
echo"<ul>";
  echo"<details><summary>Shops</summary>";
  while ($lignematrish = $shop->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieushop(event, '" . $lignematrish["nom"] . "', '" . $lignematrish["latitude"] . "', '" . $lignematrish["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrish["nom"] . "' data-latitude='" . $lignematrish["latitude"] . "' data-longitude='" . $lignematrish["longitude"] . "'>" . $lignematrish["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin site 
//debut maison                    
$i=0;
echo"<ul>";
  echo"<details><summary>maison</summary>";
  while ($lignematrig = $maison->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieum(event, '" . $lignematrig["description"] . "', '" . $lignematrig["categorie"] . "', '" . $lignematrig["latitude"] . "', '" . $lignematrig["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrig["description"] . "' data-latitude='" . $lignematrig["latitude"] . "' data-longitude='" . $lignematrig["longitude"] . "'>" . $lignematrig["categorie"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin maison 
//debut station                    
$i=0;
echo"<ul>";
  echo"<details><summary>Stations</summary>";
  while ($lignematrist = $station->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieustation(event, '" . $lignematrist["nom"] . "', '" . $lignematrist["latitude"] . "', '" . $lignematrist["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrist["nom"] . "' data-latitude='" . $lignematrist["latitude"] . "' data-longitude='" . $lignematrist["longitude"] . "'>" . $lignematrist["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin station 
//debut Parkings                    
$i=0;
echo"<ul>";
  echo"<details><summary>Parkings</summary>";
  while ($lignematrisp = $parking->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrisp["nom"] . "', '" . $lignematrisp["latitude"] . "', '" . $lignematrisp["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrisp["nom"] . "' data-latitude='" . $lignematrisp["latitude"] . "' data-longitude='" . $lignematrisp["longitude"] . "'>" . $lignematrisp["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin Parkings 




            echo"</details>";
                           
              $i=$i+1;
            }            
            echo"</ul>";
            echo"</details>";


//Gitegga          
           
            
            echo"<ul>";
            
            while($lignematrice=$Gitega->fetch())
              {
              echo"<details><summary>".$lignematrice[1]."</summary>";
 //debut hotel                    
              $i=0;
            echo"<ul>";
              echo"<details><summary>Hotels</summary>";
              while ($lignematricgi = $hotelg->fetch()) {
                echo "<li>";
                echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematricgi["nom"] . "', '" . $lignematricgi["latitude"] . "', '" . $lignematricgi["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematricgi["nom"] . "' data-latitude='" . $lignematricgi["latitude"] . "' data-longitude='" . $lignematricgi["longitude"] . "'>" . $lignematricgi["nom"] . "</a>";
                echo "</li>";
                $i = $i + 1;
            }
      
              echo"</details>";
            echo"</ul>";
//fin hotel 

//debut site Touristique                    
$i=0;
echo"<ul>";
  echo"<details><summary>Site Touristique</summary>";
  while ($lignematrisitet = $siteg->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieusite(event, '" . $lignematrisitet["nom"] . "', '" . $lignematrisitet["latitude"] . "', '" . $lignematrisitet["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrisitet["nom"] . "' data-latitude='" . $lignematrisitet["latitude"] . "' data-longitude='" . $lignematrisitet["longitude"] . "'>" . $lignematrisitet["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin site Touristique 

//hopiatl                    
$i=0;
echo"<ul>";
  echo"<details><summary>Hopital</summary>";
  while ($lignematrihgf = $hopitalg->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgf["nom"] . "', '" . $lignematrihgf["latitude"] . "', '" . $lignematrihgf["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgf["nom"] . "' data-latitude='" . $lignematrihgf["latitude"] . "' data-longitude='" . $lignematrihgf["longitude"] . "'>" . $lignematrihgf["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin hopiatl 
//pharmacie                   
$i=0;
echo"<ul>";
  echo"<details><summary>Pharmacie</summary>";
  while ($lignematrihgfp = $pharmacieg->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieupha(event, '" . $lignematrihgfp["nom"] . "', '" . $lignematrihgfp["latitude"] . "', '" . $lignematrihgfp["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfp["nom"] . "' data-latitude='" . $lignematrihgfp["latitude"] . "' data-longitude='" . $lignematrihgfp["longitude"] . "'>" . $lignematrihgfp["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin pharmacie 
//parking                   
$i=0;
echo"<ul>";
  echo"<details><summary>Parking</summary>";
  while ($lignematrihgfpa = $parkingg->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgfpa["nom"] . "', '" . $lignematrihgfpa["latitude"] . "', '" . $lignematrihgfpa["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfpa["nom"] . "' data-latitude='" . $lignematrihgfpa["latitude"] . "' data-longitude='" . $lignematrihgfpa["longitude"] . "'>" . $lignematrihgfpa["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin parking 
//shop                   
$i=0;
echo"<ul>";
  echo"<details><summary>Shop</summary>";
  while ($lignematrihgfpas = $shopg->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieushop(event, '" . $lignematrihgfpas["nom"] . "', '" . $lignematrihgfpas["latitude"] . "', '" . $lignematrihgfpas["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfpas["nom"] . "' data-latitude='" . $lignematrihgfpas["latitude"] . "' data-longitude='" . $lignematrihgfpas["longitude"] . "'>" . $lignematrihgfpas["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin shop 
//debut maison                    
$i=0;
echo"<ul>";
  echo"<details><summary>maison</summary>";
  while ($lignematrigma = $maisong->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieum(event, '" . $lignematrigma["description"] . "', '" . $lignematrigma["categorie"] . "', '" . $lignematrigma["latitude"] . "', '" . $lignematrigma["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrigma["description"] . "' data-latitude='" . $lignematrigma["latitude"] . "' data-longitude='" . $lignematrigma["longitude"] . "'>" . $lignematrigma["categorie"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin maison 
//station                   
$i=0;
echo"<ul>";
  echo"<details><summary>Shop</summary>";
  while ($lignematrihgfpast = $stationg->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgfpast["nom"] . "', '" . $lignematrihgfpast["latitude"] . "', '" . $lignematrihgfpast["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfpast["nom"] . "' data-latitude='" . $lignematrihgfpast["latitude"] . "' data-longitude='" . $lignematrihgfpast["longitude"] . "'>" . $lignematrihgfpast["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin station 



        
echo"</details>";
                           
$i=$i+1;
}            
echo"</ul>";
echo"</details>";

//Rutana
echo"<ul>";
            
            while($lignematrice=$Rutana->fetch())
            {
              echo"<details><summary>".$lignematrice[1]."</summary>";
 //debut hotel                    
              $i=0;
            echo"<ul>";
              echo"<details><summary>Hotels</summary>";
              while ($lignematricr = $hotelr->fetch()) {
                echo "<li>";
                echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematricr["nom"] . "', '" . $lignematricr["latitude"] . "', '" . $lignematricr["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematricr["nom"] . "' data-latitude='" . $lignematricr["latitude"] . "' data-longitude='" . $lignematricr["longitude"] . "'>" . $lignematricr["nom"] . "</a>";
                echo "</li>";
                $i = $i + 1;
            }
      
              echo"</details>";
            echo"</ul>";
//fin hotel 

//hopiatl                    
$i=0;
echo"<ul>";
  echo"<details><summary>Hopital</summary>";
  while ($lignematrihgfrr = $hopitalr->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgfr["nom"] . "', '" . $lignematrihgfr["latitude"] . "', '" . $lignematrihgfr["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfr["nom"] . "' data-latitude='" . $lignematrihgfr["latitude"] . "' data-longitude='" . $lignematrihgfr["longitude"] . "'>" . $lignematrihgfr["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin hopiatl 
//debut site Touristique                    
$i=0;
echo"<ul>";
  echo"<details><summary>Site Touristique</summary>";
  while ($lignematrisitetr = $siter->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieusite(event, '" . $lignematrisitetr["nom"] . "', '" . $lignematrisitetr["latitude"] . "', '" . $lignematrisitetr["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrisitetr["nom"] . "' data-latitude='" . $lignematrisitetr["latitude"] . "' data-longitude='" . $lignematrisitetr["longitude"] . "'>" . $lignematrisitetr["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin site Touristique 
//stationr                   
$i=0;
echo"<ul>";
  echo"<details><summary>Shop</summary>";
  while ($lignematrihgfpast = $stationr->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieustation(event, '" . $lignematrihgfpast["nom"] . "', '" . $lignematrihgfpast["latitude"] . "', '" . $lignematrihgfpast["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfpast["nom"] . "' data-latitude='" . $lignematrihgfpast["latitude"] . "' data-longitude='" . $lignematrihgfpast["longitude"] . "'>" . $lignematrihgfpast["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin stationr 
//parking                   
$i=0;
echo"<ul>";
  echo"<details><summary>Parking</summary>";
  while ($lignematrihgfpar = $parkingr->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgfpar["nom"] . "', '" . $lignematrihgfpar["latitude"] . "', '" . $lignematrihgfpar["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfpar["nom"] . "' data-latitude='" . $lignematrihgfpar["latitude"] . "' data-longitude='" . $lignematrihgfpar["longitude"] . "'>" . $lignematrihgfpar["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin parking 

//debut maison                    
$i=0;
echo"<ul>";
  echo"<details><summary>maison</summary>";
  while ($lignematrigmar = $maisonr->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieum(event, '" . $lignematrigmar["description"] . "', '" . $lignematrigmar["categorie"] . "', '" . $lignematrigmar["latitude"] . "', '" . $lignematrigmar["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrigmar["description"] . "' data-latitude='" . $lignematrigmar["latitude"] . "' data-longitude='" . $lignematrigmar["longitude"] . "'>" . $lignematrigmar["categorie"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin maison 

echo"</details>";
                           
$i=$i+1;
}            
echo"</ul>";
echo"</details>";

//Ngozi
echo"<ul>";
            
            while($lignematrice=$Ngozi->fetch())
            {
              echo"<details><summary>".$lignematrice[1]."</summary>";
 //debut hotel                    
              $i=0;
            echo"<ul>";
              echo"<details><summary>Hotels</summary>";
              while ($lignematricn = $hoteln->fetch()) {
                echo "<li>";
                echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematricn["nom"] . "', '" . $lignematricn["latitude"] . "', '" . $lignematricn["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematricn["nom"] . "' data-latitude='" . $lignematricn["latitude"] . "' data-longitude='" . $lignematricn["longitude"] . "'>" . $lignematricn["nom"] . "</a>";
                echo "</li>";
                $i = $i + 1;
            }
      
              echo"</details>";
            echo"</ul>";
            
//fin hotel 
//debut maison                    
$i=0;
echo"<ul>";
  echo"<details><summary>maison</summary>";
  while ($lignematrigmarn = $maisonn->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieum(event, '" . $lignematrigmarn["description"] . "', '" . $lignematrigmarn["categorie"] . "', '" . $lignematrigmarn["latitude"] . "', '" . $lignematrigmarn["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrigmarn["description"] . "' data-latitude='" . $lignematrigmarn["latitude"] . "' data-longitude='" . $lignematrigmarn["longitude"] . "'>" . $lignematrigmarn["categorie"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin maison 
//debut site Touristique                    
$i=0;
echo"<ul>";
  echo"<details><summary>Site Touristique</summary>";
  while ($lignematrisitetrn = $siten->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieusite(event, '" . $lignematrisitetrn["nom"] . "', '" . $lignematrisitetrn["latitude"] . "', '" . $lignematrisitetrn["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrisitetrn["nom"] . "' data-latitude='" . $lignematrisitetrn["latitude"] . "' data-longitude='" . $lignematrisitetrn["longitude"] . "'>" . $lignematrisitetrn["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin site Touristique 
//parking                   
$i=0;
echo"<ul>";
  echo"<details><summary>Parking</summary>";
  while ($lignematrihgfparn = $parkingn->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgfparn["nom"] . "', '" . $lignematrihgfparn["latitude"] . "', '" . $lignematrihgfparn["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfparn["nom"] . "' data-latitude='" . $lignematrihgfparn["latitude"] . "' data-longitude='" . $lignematrihgfparn["longitude"] . "'>" . $lignematrihgfparn["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin parking 
//hopiatl                    
$i=0;
echo"<ul>";
  echo"<details><summary>Hopital</summary>";
  while ($lignematrihgfrrn = $hopitaln->fetch()) {
    echo "<li>";
    echo "<a href='#' onclick=\"afficherLieu(event, '" . $lignematrihgfrn["nom"] . "', '" . $lignematrihgfrn["latitude"] . "', '" . $lignematrihgfrn["longitude"] . "')\" id='lieu" . $i . "' class='lieu-link' data-nom='" . $lignematrihgfrn["nom"] . "' data-latitude='" . $lignematrihgfrn["latitude"] . "' data-longitude='" . $lignematrihgfrn["longitude"] . "'>" . $lignematrihgfrn["nom"] . "</a>";
    echo "</li>";
    $i = $i + 1;
}

  echo"</details>";
echo"</ul>";
//fin hopiatl 

echo"</details>";
                           
$i=$i+1;
}            
echo"</ul>";
echo"</details>";
                           




                           
              
            
            
            
         ?> 

            
            
            
         

         
         
          
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Recherche">
          <button class="btn btn-success" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<div id="map"></div>

<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>




<!-- //hotel,parking,pharmacie,site -->
<script>
function afficherLieu(event,nomLieu, latitude, longitude) {
    // Vérifier si la carte existe déjà
    event.preventDefault();
    if (typeof carte !== 'undefined') {
        // Supprimer la carte existante
        carte.remove();
    }
    if ("geolocation" in navigator) {
    // Demander la permission d'accéder à la localisation de l'appareil
    navigator.geolocation.getCurrentPosition(function(position) {
        // Récupérer les coordonnées de la localisation
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;


    // Créer une instance de la carte
    var carte = L.map('map').setView([latitude, longitude], 14.52);
    var marker = L.marker([latitud, longitud]).addTo(carte);

// map click event
carte.on('click',function(e) {
   console.log(e)
   var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(carte);

   
L.Routing.control({
waypoints: [
L.latLng(latitud, longitud),
L.latLng(e.latlng.lat, e.latlng.lng)
]
}).on('routesfound',function(e){
console.log(e)
e.routes[0].coordinates.forEach(function(coord,index){
setTimeout(() =>{
   marker.setLatLng([coord.lat,coord.lng])
},100*index);
})
})
.addTo(carte);

})     

    // Ajouter une couche de tuiles pour afficher la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(carte);

    // Ajouter un marqueur pour le lieu
    var marqueur = L.marker([latitude, longitude]).addTo(carte);
    // L.marker([-3.37335, 29.359]).addTo(carte);
    var test=L.marker([latitud, longitud]).addTo(carte);

    // Ajouter une fenêtre contextuelle pour le marqueur
    test.bindPopup('votre position').openPopup();
    
    marqueur.bindPopup('<b>' + nomLieu +'</br>'+latitude+'</br>'+longitude+'</b>'+ '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' +
  '<div class="carousel-inner">' +
    '<div class="carousel-item active">' +
      '<img src="img/téléchargement.jpg" class="d-block w-200" alt="Image 1">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (3).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
  '</div>' +
  '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' +
    '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Previous</span>' +
  '</button>' +
  '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' +
    '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Next</span>' +
  '</button>' +
'</div>').openPopup();
    L.marker([-3.37900, 29.357]).addTo(carte).bindPopup('<img src="img/téléchargement (3).jpg" alt="Image"/> Golf De Bujumbura');
    //le cercle pour l coordonnee venant de la bdd
    var circle=L.circle([latitude, longitude],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte);  

        //le cercle pour la localisation
    var circle=L.circle([latitud,longitud],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte); 
    

    // var map = L.map('map').setView([-3.37335,29.359], 13);

    // var ligne = L.polyline([ [latitude, longitude],[latitud, longitud]], {
    //         color: 'red'
    //     }).addTo(carte);
   
        //localisatiom

    });
    

}       
 // Disable card popup on initial load
document.querySelectorAll('.lieu-link').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()
  })
})

// Show card after page fully loads
window.onload = function() {
  document.querySelectorAll('.lieu-link').forEach(link => {
    link.removeEventListener('click', e => {
      e.preventDefault()
    })  
  })
}
    
    
}
</script>
<!-- // fin hotel,parking,pharmacie,station -->

<!-- //maison -->
<script>
function afficherLieum(event,description,categorie, latitude, longitude) {
    // Vérifier si la carte existe déjà
    event.preventDefault();
    if (typeof carte !== 'undefined') {
        // Supprimer la carte existante
        carte.remove();
    }
    if ("geolocation" in navigator) {
    // Demander la permission d'accéder à la localisation de l'appareil
    navigator.geolocation.getCurrentPosition(function(position) {
        // Récupérer les coordonnées de la localisation
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;


    // Créer une instance de la carte
    var carte = L.map('map').setView([latitude, longitude], 14.52);
    var marker = L.marker([latitud, longitud]).addTo(carte);

// map click event
carte.on('click',function(e) {
   console.log(e)
   var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(carte);

   
L.Routing.control({
waypoints: [
L.latLng(latitud, longitud),
L.latLng(e.latlng.lat, e.latlng.lng)
]
}).on('routesfound',function(e){
console.log(e)
e.routes[0].coordinates.forEach(function(coord,index){
setTimeout(() =>{
   marker.setLatLng([coord.lat,coord.lng])
},100*index);
})
})
.addTo(carte);

})     

    // Ajouter une couche de tuiles pour afficher la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(carte);

    // Ajouter un marqueur pour le lieu
    var marqueur = L.marker([latitude, longitude]).addTo(carte);
    // L.marker([-3.37335, 29.359]).addTo(carte);
    var test=L.marker([latitud, longitud]).addTo(carte);

    // Ajouter une fenêtre contextuelle pour le marqueur
    test.bindPopup('votre position').openPopup();
    
    marqueur.bindPopup('<b>' + categorie + '</b>' + '<br>' + '<b>' + description + '</b>' + '<br>' +
  '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' +
    '<div class="carousel-inner">' +
      '<div class="carousel-item active">' +
        '<img src="img/téléchargement (8).jpg" class="d-block w-200" alt="Image 1">' +
      '</div>' +
      '<div class="carousel-item">' +
        '<img src="img/téléchargement (7).jpg" class="d-block w-200" alt="Image 2">' +
      '</div>' +
      '<div class="carousel-item active">' +
        '<img src="img/téléchargement (9).jpg" class="d-block w-200" alt="Image 1">' +
      '</div>' +
      '<div class="carousel-item">' +
        '<img src="img/téléchargement (6).jpg" class="d-block w-200" alt="Image 2">' +
      '</div>' +
    '</div>' +
    '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' +
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
      '<span class="visually-hidden">Previous</span>' +
    '</button>' +
    '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' +
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
      '<span class="visually-hidden">Next</span>' +
    '</button>' +
  '</div>').openPopup();
    L.marker([-3.37900, 29.357]).addTo(carte).bindPopup('<img src="img/téléchargement (3).jpg" alt="Image"/> Golf De Bujumbura');
    //le cercle pour l coordonnee venant de la bdd
    var circle=L.circle([latitude, longitude],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte);  

        //le cercle pour la localisation
    var circle=L.circle([latitud,longitud],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte); 
    

    // var map = L.map('map').setView([-3.37335,29.359], 13);

    // var ligne = L.polyline([ [latitude, longitude],[latitud, longitud]], {
    //         color: 'red'
    //     }).addTo(carte);
   
        //localisatiom

    });
    

}       
 // Disable card popup on initial load
document.querySelectorAll('.lieu-link').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()
  })
})

// Show card after page fully loads
window.onload = function() {
  document.querySelectorAll('.lieu-link').forEach(link => {
    link.removeEventListener('click', e => {
      e.preventDefault()
    })  
  })
}
    
    
}
</script>
<!-- // fin hotel,parking,pharmacie,station -->

<!-- //shop -->
<script>
function afficherLieushop(event,nomLieu, latitude, longitude) {
    // Vérifier si la carte existe déjà
    event.preventDefault();
    if (typeof carte !== 'undefined') {
        // Supprimer la carte existante
        carte.remove();
    }
    if ("geolocation" in navigator) {
    // Demander la permission d'accéder à la localisation de l'appareil
    navigator.geolocation.getCurrentPosition(function(position) {
        // Récupérer les coordonnées de la localisation
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;


    // Créer une instance de la carte
    var carte = L.map('map').setView([latitude, longitude], 14.52);
    var marker = L.marker([latitud, longitud]).addTo(carte);

// map click event
carte.on('click',function(e) {
   console.log(e)
   var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(carte);

   
L.Routing.control({
waypoints: [
L.latLng(latitud, longitud),
L.latLng(e.latlng.lat, e.latlng.lng)
]
}).on('routesfound',function(e){
console.log(e)
e.routes[0].coordinates.forEach(function(coord,index){
setTimeout(() =>{
   marker.setLatLng([coord.lat,coord.lng])
},100*index);
})
})
.addTo(carte);

})     

    // Ajouter une couche de tuiles pour afficher la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(carte);

    // Ajouter un marqueur pour le lieu
    var marqueur = L.marker([latitude, longitude]).addTo(carte);
    // L.marker([-3.37335, 29.359]).addTo(carte);
    var test=L.marker([latitud, longitud]).addTo(carte);

    // Ajouter une fenêtre contextuelle pour le marqueur
    test.bindPopup('votre position').openPopup();
    
    marqueur.bindPopup('<b>' + nomLieu +'</br>'+latitude+'</br>'+longitude+'</b>'+ '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' +
  '<div class="carousel-inner">' +
    '<div class="carousel-item active">' +
      '<img src="img/fbfb.jpg" class="d-block w-200" alt="Image 1">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/bv.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/d.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/fb.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/dvv.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/dvdvd.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/dv.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
  '</div>' +
  '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' +
    '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Previous</span>' +
  '</button>' +
  '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' +
    '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Next</span>' +
  '</button>' +
'</div>').openPopup();
    L.marker([-3.37900, 29.357]).addTo(carte).bindPopup('<img src="img/téléchargement (3).jpg" alt="Image"/> Golf De Bujumbura');
    //le cercle pour l coordonnee venant de la bdd
    var circle=L.circle([latitude, longitude],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte);  

        //le cercle pour la localisation
    var circle=L.circle([latitud,longitud],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte); 
    

    // var map = L.map('map').setView([-3.37335,29.359], 13);

    // var ligne = L.polyline([ [latitude, longitude],[latitud, longitud]], {
    //         color: 'red'
    //     }).addTo(carte);
   
        //localisatiom

    });
    

}       
 // Disable card popup on initial load
document.querySelectorAll('.lieu-link').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()
  })
})

// Show card after page fully loads
window.onload = function() {
  document.querySelectorAll('.lieu-link').forEach(link => {
    link.removeEventListener('click', e => {
      e.preventDefault()
    })  
  })
}
    
    
}
</script>
<!-- // fin hotel,parking,pharmacie,station -->

<!-- //pharmacie -->
<script>
function afficherLieupha(event,nomLieu, latitude, longitude) {
    // Vérifier si la carte existe déjà
    event.preventDefault();
    if (typeof carte !== 'undefined') {
        // Supprimer la carte existante
        carte.remove();
    }
    if ("geolocation" in navigator) {
    // Demander la permission d'accéder à la localisation de l'appareil
    navigator.geolocation.getCurrentPosition(function(position) {
        // Récupérer les coordonnées de la localisation
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;


    // Créer une instance de la carte
    var carte = L.map('map').setView([latitude, longitude], 14.52);
    var marker = L.marker([latitud, longitud]).addTo(carte);

// map click event
carte.on('click',function(e) {
   console.log(e)
   var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(carte);

   
L.Routing.control({
waypoints: [
L.latLng(latitud, longitud),
L.latLng(e.latlng.lat, e.latlng.lng)
]
}).on('routesfound',function(e){
console.log(e)
e.routes[0].coordinates.forEach(function(coord,index){
setTimeout(() =>{
   marker.setLatLng([coord.lat,coord.lng])
},100*index);
})
})
.addTo(carte);

})     

    // Ajouter une couche de tuiles pour afficher la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(carte);

    // Ajouter un marqueur pour le lieu
    var marqueur = L.marker([latitude, longitude]).addTo(carte);
    // L.marker([-3.37335, 29.359]).addTo(carte);
    var test=L.marker([latitud, longitud]).addTo(carte);

    // Ajouter une fenêtre contextuelle pour le marqueur
    test.bindPopup('votre position').openPopup();
    
    marqueur.bindPopup('<b>' + nomLieu +'</br>'+latitude+'</br>'+longitude+'</b>'+ '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' +
  '<div class="carousel-inner">' +
    '<div class="carousel-item active">' +
      '<img src="img/téléchargement (14).jpg" class="d-block w-200" alt="Image 1">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (15).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (16).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    
    
  
  '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' +
    '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Previous</span>' +
  '</button>' +
  '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' +
    '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Next</span>' +
  '</button>' +
'</div>').openPopup();
    L.marker([-3.37900, 29.357]).addTo(carte).bindPopup('<img src="img/téléchargement (3).jpg" alt="Image"/> Golf De Bujumbura');
    //le cercle pour l coordonnee venant de la bdd
    var circle=L.circle([latitude, longitude],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte);  

        //le cercle pour la localisation
    var circle=L.circle([latitud,longitud],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte); 
    

    // var map = L.map('map').setView([-3.37335,29.359], 13);

    // var ligne = L.polyline([ [latitude, longitude],[latitud, longitud]], {
    //         color: 'red'
    //     }).addTo(carte);
   
        //localisatiom

    });
    

}       
 // Disable card popup on initial load
document.querySelectorAll('.lieu-link').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()
  })
})

// Show card after page fully loads
window.onload = function() {
  document.querySelectorAll('.lieu-link').forEach(link => {
    link.removeEventListener('click', e => {
      e.preventDefault()
    })  
  })
}
    
    
}
</script>
<!-- // pharmacie -->

<!-- //station -->
<script>
function afficherLieustation(event,nomLieu, latitude, longitude) {
    // Vérifier si la carte existe déjà
    event.preventDefault();
    if (typeof carte !== 'undefined') {
        // Supprimer la carte existante
        carte.remove();
    }
    if ("geolocation" in navigator) {
    // Demander la permission d'accéder à la localisation de l'appareil
    navigator.geolocation.getCurrentPosition(function(position) {
        // Récupérer les coordonnées de la localisation
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;


    // Créer une instance de la carte
    var carte = L.map('map').setView([latitude, longitude], 14.52);
    var marker = L.marker([latitud, longitud]).addTo(carte);

// map click event
carte.on('click',function(e) {
   console.log(e)
   var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(carte);

   
L.Routing.control({
waypoints: [
L.latLng(latitud, longitud),
L.latLng(e.latlng.lat, e.latlng.lng)
]
}).on('routesfound',function(e){
console.log(e)
e.routes[0].coordinates.forEach(function(coord,index){
setTimeout(() =>{
   marker.setLatLng([coord.lat,coord.lng])
},100*index);
})
})
.addTo(carte);

})     

    // Ajouter une couche de tuiles pour afficher la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(carte);

    // Ajouter un marqueur pour le lieu
    var marqueur = L.marker([latitude, longitude]).addTo(carte);
    // L.marker([-3.37335, 29.359]).addTo(carte);
    var test=L.marker([latitud, longitud]).addTo(carte);

    // Ajouter une fenêtre contextuelle pour le marqueur
    test.bindPopup('votre position').openPopup();
    
    marqueur.bindPopup('<b>' + nomLieu +'</br>'+latitude+'</br>'+longitude+'</b>'+ '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' +
  '<div class="carousel-inner">' +
    '<div class="carousel-item active">' +
      '<img src="img/téléchargement (10).jpg" class="d-block w-200" alt="Image 1">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (11).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (12).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (13).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    
  '</div>' +
  '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' +
    '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Previous</span>' +
  '</button>' +
  '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' +
    '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Next</span>' +
  '</button>' +
'</div>').openPopup();
    L.marker([-3.37900, 29.357]).addTo(carte).bindPopup('<img src="img/téléchargement (3).jpg" alt="Image"/> Golf De Bujumbura');
    //le cercle pour l coordonnee venant de la bdd
    var circle=L.circle([latitude, longitude],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte);  

        //le cercle pour la localisation
    var circle=L.circle([latitud,longitud],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte); 
    

    // var map = L.map('map').setView([-3.37335,29.359], 13);

    // var ligne = L.polyline([ [latitude, longitude],[latitud, longitud]], {
    //         color: 'red'
    //     }).addTo(carte);
   
        //localisatiom

    });
    

}       
 // Disable card popup on initial load
document.querySelectorAll('.lieu-link').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()
  })
})

// Show card after page fully loads
window.onload = function() {
  document.querySelectorAll('.lieu-link').forEach(link => {
    link.removeEventListener('click', e => {
      e.preventDefault()
    })  
  })
}
    
    
}
</script>
<!-- // pharmacie -->

<!-- //site -->
<script>
function afficherLieusite(event,nomLieu, latitude, longitude) {
    // Vérifier si la carte existe déjà
    event.preventDefault();
    if (typeof carte !== 'undefined') {
        // Supprimer la carte existante
        carte.remove();
    }
    if ("geolocation" in navigator) {
    // Demander la permission d'accéder à la localisation de l'appareil
    navigator.geolocation.getCurrentPosition(function(position) {
        // Récupérer les coordonnées de la localisation
        var latitud = position.coords.latitude;
        var longitud = position.coords.longitude;


    // Créer une instance de la carte
    var carte = L.map('map').setView([latitude, longitude], 14.52);
    var marker = L.marker([latitud, longitud]).addTo(carte);

// map click event
carte.on('click',function(e) {
   console.log(e)
   var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(carte);

   
L.Routing.control({
waypoints: [
L.latLng(latitud, longitud),
L.latLng(e.latlng.lat, e.latlng.lng)
]
}).on('routesfound',function(e){
console.log(e)
e.routes[0].coordinates.forEach(function(coord,index){
setTimeout(() =>{
   marker.setLatLng([coord.lat,coord.lng])
},100*index);
})
})
.addTo(carte);

})     

    // Ajouter une couche de tuiles pour afficher la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(carte);

    // Ajouter un marqueur pour le lieu
    var marqueur = L.marker([latitude, longitude]).addTo(carte);
    // L.marker([-3.37335, 29.359]).addTo(carte);
    var test=L.marker([latitud, longitud]).addTo(carte);

    // Ajouter une fenêtre contextuelle pour le marqueur
    test.bindPopup('votre position').openPopup();
    
    marqueur.bindPopup('<b>' + nomLieu +'</br>'+latitude+'</br>'+longitude+'</b>'+ '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">' +
  '<div class="carousel-inner">' +
    '<div class="carousel-item active">' +
      '<img src="img/DncAIBuWwAA6k-6.jpg" class="d-block w-200" alt="Image 1">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/imga.webp" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/Livingstone_monument_burundi.jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (4).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    '<div class="carousel-item">' +
      '<img src="img/téléchargement (5).jpg" class="d-block w-200" alt="Image 2">' +
    '</div>' +
    
  '</div>' +
  '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">' +
    '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Previous</span>' +
  '</button>' +
  '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">' +
    '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
    '<span class="visually-hidden">Next</span>' +
  '</button>' +
'</div>').openPopup();
    L.marker([-3.37900, 29.357]).addTo(carte).bindPopup('<img src="img/téléchargement (3).jpg" alt="Image"/> Golf De Bujumbura');
    //le cercle pour l coordonnee venant de la bdd
    var circle=L.circle([latitude, longitude],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte);  

        //le cercle pour la localisation
    var circle=L.circle([latitud,longitud],{
            color:'red',
            fillcolor:'#f03',
            fillopacity:0.5,
            radius:500,
        }).addTo(carte); 
    

    // var map = L.map('map').setView([-3.37335,29.359], 13);

    // var ligne = L.polyline([ [latitude, longitude],[latitud, longitud]], {
    //         color: 'red'
    //     }).addTo(carte);
   
        //localisatiom

    });
    

}       
 // Disable card popup on initial load
document.querySelectorAll('.lieu-link').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()
  })
})

// Show card after page fully loads
window.onload = function() {
  document.querySelectorAll('.lieu-link').forEach(link => {
    link.removeEventListener('click', e => {
      e.preventDefault()
    })  
  })
}
    
    
}
</script>
<!-- // site -->
</script>

       

               
                    
</div>
        <!-- Features End -->


        <!-- Screenshot Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Burundi--Bujumbura </h5>
                        <h1 class="mb-3">"Le Burundi : Un trésor d'émerveillement au cœur de l'Afrique"</h1>
                        <p class="mb-4">Ces aspects du Burundi contribuent à en faire une destination attrayante pour les voyageurs en quête de nature, de culture et de gastronomie.</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i><strong>La beauté naturelle :</strong> Le Burundi est connu pour sa beauté naturelle, avec ses paysages pittoresques, ses collines verdoyantes, ses lacs magnifiques et ses cascades impressionnantes.</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i><strong>La richesse culturelle :</strong> Le Burundi est un pays riche en diversité culturelle. Les Burundais sont connus pour leur hospitalité chaleureuse et leur fierté de leur patrimoine culturel.</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i><strong>La cuisine délicieuse :</strong>  La cuisine burundaise est savoureuse et variée. Les plats traditionnels mettent en valeur des ingrédients locaux tels que le maïs, le manioc, les haricots, les bananes plantains et les légumes frais.</p>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Actualiser</a>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel">
                            <img class="img-fluid" src="img/c.jpg" alt="">
                            <img class="img-fluid" src="img/pr.jpeg" alt="">
                            <img class="img-fluid" src="img/images (5).jpg" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot End -->


        <!-- Process Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium"></h5>
                    <h1 class="mb-5">Quizz</h1>
                </div>
                <div class="justify-content-center">
                     <noscript>You need to enable JavaScript to run this app.</noscript>
                    <div id="root"></div>
                </div>
            </div>
        </div>
        <!-- Process Start -->


        <!-- Download Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="img/p.webp">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">SE. NDAYISHIMIYE EVARISTE</h5>
                        <h1 class="mb-4">President Du Burundi</h1>
                        <p class="mb-4"></p>
                        <div class="row g-4">
                            <!-- <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <a href="" class="d-flex bg-primary-gradient rounded py-3 px-4">
                                    <i class="fab fa-apple fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">App Store</h5>
                                    </div>
                                </a>
                            </div> -->
                            <!-- <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <a href="" class="d-flex bg-secondary-gradient rounded py-3 px-4">
                                    <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">Play Store</h5>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Chers internautes, nous vous invitons à contribuer à notre communauté en ajoutant des hôtels, des parkings, des pharmacies, et bien d'autres informations via notre formulaire dédié.</h5>
                    <h1 class="mb-5">Vos précieuses contributions aideront à enrichir notre base de données et à faciliter la vie de tous. Merci d'avance pour votre participation !</h1>
                </div>
                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                    
                    <div class="tab-content text-start">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        
                                    <?php
        include("conexion.php");
 ?>
<?php
  
    $Afficherprovince=$bdd->query("SELECT * from province ");
   
    ?>
    
    
            <div class="container text-center " >
                <div class="row">
                    <div class="col-md-6 col-sm-12 mx-auto  ">
                    <form method="POST" >
                    <label for="table">Choisissez une table :</label>
                            <select name="table" id="table">
                                <option value="hotel">hotel </option>
                                <option value="pharmacie">Pharmacie </option>
                                <option value="parking">Parking </option>
                                <option value="shop">Shop </option>
                                <option value="hopital">Hopital </option>
                                <option value="station">Station </option>
                                <option value="site">Site </option>
                                
                            </select>
                        <div class="mb-3">
                            <label  class="form-label">NOM</label>
                            <input type="text" name="nom" class="form-control"  required>
                            
                        </div>
                        
                        <div class="mb-3">
                            <label  class="form-label">LATITUDE</label>
                            <input type="text" name="lat" class="form-control"  required>
                            
                        </div>

                        <div class="mb-3">
                                        <label  class="form-label">LONGITUDE</label>
                                        <input type="text" name="long" class="form-control"  required>   
                        </div>

                        <div class="mb-3">
                                
                                <tr>
                                <td class="width30">Province:</td>
                                <select  name="pro" id="">
                                                    
                                                    <?php
                                while($bddCat=$Afficherprovince->fetch()){
                                    ?>
                                <option  value="<?php echo $bddCat["idpro"];  ?>">
                                <?php echo $bddCat["nom"];  ?>
                                </option>
                                    <?php 
                                    }
                                    ?>

                                        
                                   </select> 
                     
                    </tr>
                </div>

                        
                        
                        
                        
                        
                            <!-- Ajoutez ici les autres champs du formulaire -->
                           
                        <div>
                            <button type="submit" name="Enregistrer" class="btn btn-primary">Enregistrer</button>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
            
            <?php
                if(isset($_POST["Enregistrer"]))
                {
                $nom=$_POST["nom"];
                $LAT=$_POST["lat"];
                $LONG=$_POST["long"];
                $pr=$_POST["pro"];
                $table =$_POST["table"];
                    // Enregistrer les données dans la table appropriée
                        if ($table == "hotel") {
                            // Code pour enregistrer les données dans la table 1
                            $InsertionP=$bdd->prepare("INSERT INTO hotel (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $InsertionP->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                        } elseif ($table == "pharmacie") {
                            // Code pour enregistrer les données dans la table 2
                            $Insertion=$bdd->prepare("INSERT INTO pharmacie (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $Insertion->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                        } elseif ($table == "parking") {
                            // Code pour enregistrer les données dans la table 3
                            $Insertion=$bdd->prepare("INSERT INTO parking (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $Insertion->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                            
                        } elseif ($table == "shop") {
                            // Gérer le cas où aucune table n'est sélectionnée
                            $Insertion=$bdd->prepare("INSERT INTO shop (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $Insertion->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                        }else if ($table == "hopital"){
                            $Insertion=$bdd->prepare("INSERT INTO hopital (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $Insertion->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                        }else if($table == "station"){
                            $Insertion=$bdd->prepare("INSERT INTO station (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $Insertion->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                        }else if($table == "site"){
                            $Insertion=$bdd->prepare("INSERT INTO site (nom,latitude,longitude,idpro) 
                            values (?,?,?,?)");
                            $Insertion->execute(array($nom,$LAT,$LONG,$pr));
                            echo "Insertion avec success";
                        }else{
                            //erreur
                        }
               
                  }
             
            ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5" id="review">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Site Touristique</h5>
                    <h1 class="mb-5">Les Beautes de Chez Nous!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/DncAIBuWwAA6k-6.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Rumonge</h5>
                                <p class="mb-1">La pierre de Livingston et Stanley</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">La pierre de Livingston et Stanley est une pierre érigée le 25 novembre 1871 à Mugere, à une dizaine de kilomètres au sud de Bujumbura sur la rive est du lac Tanganyika. Une pierre (déplacée) fut érigée sur place pour immortaliser la rencontre entre le savant David Livingstone et le jeune reporter Henry Morton Stanley, parti à sa recherche.

Cette rencontre intervient quelques jours plus tôt, le 10 novembre, à Ujiji, dans l'actuelle Tanzanie. Le lieu marqué par la pierre est en fait un endroit où stationnent les deux explorateurs du 25 au 27 novembre 1871.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/imga.webp" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">RUTANA</h5>
                                <p class="mb-1">Chutes de Karera</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Les chutes de la Karera sont une série de cascades située au Burundi dans la province de Rutana.
Elles sont orientées du nord au sud et s'étendent sur 142 ha. Elles sont subdivisées en six branches et réparties sur trois paliers1..</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/téléchargement (4).jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Gitega</h5>
                                <p class="mb-1">Gishora</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Le champ de Gishora est situé à environ 7 km au nord de la ville de Gitega, dans la province de Gitega au Burundi. Il abrite un palais royal et un domaine royal.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/téléchargement (5).jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Bujumbura</h5>
                                <p class="mb-1">Parc national de Ruzizi</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Le Parc National de la Rusizi a une histoire complexe qui a régulièrement changé sa dénomination. En effet, dénommé Réserve Naturelle avec environ 8000ha à sa création, en 1980, elle a reçu l’appellation de Parc National en 1990 avec 12350 ha pour encore une fois revenir à la dénomination de Réserve avec le décret de 2000 qui ampute près de la moitié de sa superficie.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium"></h5>
                    <h1 class="mb-5">Formulaire de mise en vente ou en location de maisons</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Formulaire de mise en vente ou en location de maisons</a>.</p>
                            <?php
  
    $Afficherprovince=$bdd->query("SELECT * from province ");
   
    ?>
    
            <div class="container  text-center">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mx-auto ">
                    <form method="POST" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                            <label  class="form-label">DESCRIPTION</label>
                            <textarea type="text" name="desc" class="form-control" placeholder="tel75498944:,chambre:3,douche:2"  required></textarea>
                            
                        </div>
                        
                        <div class="mb-3">
                        <label  class="form-label">CATEGORIE</label>
                          <select class="form-select" name="categ" aria-label="Default select example">
                            <option selected>Choisir la categorie</option>
                            <option value="A Vendre">A Vendre</option>
                            <option value="A Louer">A Louer</option>
                            
                          </select>
                            
                        </div>
                        <div class="mb-3">
                                        <label  class="form-label">LATITUDE</label>
                                        <input type="text" name="lat" class="form-control"  required>   
                        </div>
                        <div class="mb-3">
                                        <label  class="form-label">LONGITUDE</label>
                                        <input type="text" name="long" class="form-control"  required>   
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">PHOTO</label>
                            <input type="file" name="ph1" class="form-control"  required>
                            
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">PHOTO2</label>
                            <input type="file"  name="ph2" class="form-control"  required>
                            
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">DATE</label>
                            <input  type="date" name="date" class="form-control"  required>
                            
                        </div>

                        <div class="mb-3">
                                
                                <tr>
                                <td class="width30">Province:</td>
                                <select  name="pro" id="">
                                                    
                                                    <?php
                                while($bddCat=$Afficherprovince->fetch()){
                                    ?>
                                <option  value="<?php echo $bddCat["idpro"];  ?>">
                                <?php echo $bddCat["nom"];  ?>
                                </option>
                                    <?php 
                                    }
                                    ?>

                                        
                                   </select> 
                     
                    </tr>
                </div>
                        

                        
                     
                    </tr>
                </div>

                            <!-- Ajoutez ici les autres champs du formulaire -->
                           
                        <div>
                            <button type="submit" name="Enregistrer" class="btn btn-primary">Enregistrer</button>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
    
            <?php
                if(isset($_POST["Enregistrer"]))
                {
                $descr=$_POST["desc"];
                $categorie=$_POST["categ"];
                // $phot1=$_POST["ph1"];
                // $phot2=$_POST["ph2"];
                $LAT=$_POST["lat"];
                $LONG=$_POST["long"];
                $DATE=$_POST["date"];
                $pr=$_POST["pro"];

                $phot1 = file_get_contents($_FILES['ph1']['tmp_name']);
                $phot2 = file_get_contents($_FILES['ph2']['tmp_name']);
                // $table =$_POST["table"];
                    // Enregistrer les données dans la table appropriée
                        
                            // Code pour enregistrer les données dans la table 1
                            $InsertionP=$bdd->prepare("INSERT INTO maison (categorie,description,photo1,photo2,latitude,longitude,date,idpro) 
                            values (?,?,?,?,?,?,?,?)");
                            $InsertionP->execute(array($categorie,$descr,$phot1,$phot2,$LAT,$LONG,$DATE,$pr));
                            echo "Insertion avec success";
                }
             
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <!-- <h4 class="text-white mb-4">Address</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p> -->
                        <!-- <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                    <!-- <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Quick Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Popular Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary-gradient fs-4"></i></button>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <!-- &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.  -->
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                        </div>
                        <!-- <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>