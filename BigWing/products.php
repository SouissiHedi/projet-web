<?php
require'../config.php';
?>

<!DOCTYPE html><html><head><meta charset="utf-8"/>

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
  
    <title>startroc</title>
  
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>
  
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  
  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                  <span>
                    startroc
                  </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex  flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.html">Services </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="sign up.html">Sign up</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.html"> Login</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn"  type="button"  onclick="change()"></button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- end header section -->
    </div>
    
    <div id="searchform" hidden>
      <div  style="box-shadow: 0px 5px 5px -3px rgb(0 0 0 / 20%), 0px 8px 10px 1px rgb(0 0 0 / 14%), 0px 3px 14px 2px rgb(0 0 0 / 12%);">
          <br>
          <h4 style="margin-left:10%">Appliquer les paramètres de recherche :</h4>
          <br>
          <div class="container">
            <?php
              $srchprod =$srchdesc= "";
              $srchtype = "-Toutes les Catégories-";

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["srchprod"])) {
                  $srchprod = test_input($_POST["srchprod"]);
                }
                
                if (!empty($_POST["srchtype"])) {
                  $srchtype = test_input($_POST["srchtype"]);
                }
                  
                if (!empty($_POST["srchdesc"])) {
                  $srchdesc = test_input($_POST["srchdesc"]);
                }
              }

              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
            ?>
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="srchprod">Nom du Produit</label>
                  <input type="text" class="form-control" id="srchprod" name="srchprod" value="<?php echo $srchprod;?>"/>
                </div>
                <div class="form-group col-md-6">
                  <label for="srchtype">Selectionner le type de produit</label>
                  <select id="srchtype" name="srchtype" class="form-control">
                    <option selected><?php echo $srchtype;?></option>
                    <option value='Téléphone et Tablette'>Téléphone & Tablette</option>
                    <option value='Cuisine et Électroménager'>Cuisine & Électroménager</option>
                    <option value='Mode et Vêtements'>Mode & Vêtements</option>
                    <option value='Maison et Bureau'>Maison & Bureau</option>
                    <option value='Jeux vidéos et Consoles'>Jeux vidéos & Consoles</option>
                    <option>-Toutes les Catégories-</option>
                  </select>
                </div>

              </div>
              <div class="form-group">
                <label for="srchdesc">Description</label>
                <input type="text" class="form-control" id="srchdesc" name="srchdesc" placeholder="" value="<?php echo $srchdesc;?>"/>
              </div>
              </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="">Appliquer</button>
                </div>
            </form>
          <br>
          </div>

      </div>
    </div>
  
    <!-- contact section -->
    <section class="products_section layout_padding">
      <div class="container products_heading">
        <h2>
         Produits Disponibles
        </h2>
      </div>

      <div class="tab-content image" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
        </div>
        <div class="tab-pane fade active show" id="pills-products" role="tabpanel" aria-labelledby="pills-products-tab">
    
            <!-- DÉBUT CONTAINER -->
            <div class="container">
    
              <!-- DÉBUT DU ROW -->
              <?php
                if($srchtype=="-Toutes les Catégories-"){
                  if ( $srchprod!="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%'";
                  }elseif($srchprod!="" and $srchdesc==""){
                    $query = "SELECT * FROM produit WHERE NomProduit LIKE '%$srchprod%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE NomProduit LIKE '%$srchprod%'";
                  }elseif($srchprod=="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%'";
                  }else{
                    $query = "SELECT * FROM produit";
                    $query_count = "SELECT COUNT(*) FROM produit";
                  }
                }elseif($srchtype=='Cuisine et Électroménager'){
                  if ( $srchprod!="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Cuisine & Électroménager'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Cuisine & Électroménager'";
                  }elseif($srchprod!="" and $srchdesc==""){
                    $query = "SELECT * FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Cuisine & Électroménager'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Cuisine & Électroménager'";
                  }elseif($srchprod=="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Cuisine & Électroménager'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Cuisine & Électroménager'";
                  }else{
                    $query = "SELECT * FROM produit WHERE Type='Cuisine & Électroménager'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Type='Cuisine & Électroménager'";
                  }
                }elseif($srchtype=='Téléphone et Tablette'){
                  if ( $srchprod!="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Téléphone & Tablette'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Téléphone & Tablette'";
                  }elseif($srchprod!="" and $srchdesc==""){
                    $query = "SELECT * FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Téléphone & Tablette'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Téléphone & Tablette'";
                  }elseif($srchprod=="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Téléphone & Tablette'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Téléphone & Tablette'";
                  }else{
                    $query = "SELECT * FROM produit WHERE Type='Téléphone & Tablette'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Type='Téléphone & Tablette'";
                  }
                }elseif($srchtype=='Mode et Vêtements'){
                  if ( $srchprod!="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Mode & Vêtements'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Mode & Vêtements'";
                  }elseif($srchprod!="" and $srchdesc==""){
                    $query = "SELECT * FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Mode & Vêtements'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Mode & Vêtements'";
                  }elseif($srchprod=="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Mode & Vêtements'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Mode & Vêtements'";
                  }else{
                    $query = "SELECT * FROM produit WHERE Type='Mode & Vêtements'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Type='Mode & Vêtements'";
                  }
                }elseif($srchtype=='Maison et Bureau'){
                  if ( $srchprod!="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Maison & Bureau'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type='Maison & Bureau'";
                  }elseif($srchprod!="" and $srchdesc==""){
                    $query = "SELECT * FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Maison & Bureau'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type='Maison & Bureau'";
                  }elseif($srchprod=="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Maison & Bureau'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND Type='Maison & Bureau'";
                  }else{
                    $query = "SELECT * FROM produit WHERE Type='Maison & Bureau'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Type='Maison & Bureau'";
                  }
                }elseif($srchtype=='Jeux vidéos et Consoles'){
                  if ( $srchprod!="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type LIKE '%vid%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND NomProduit LIKE '%$srchprod%' AND Type LIKE '%vid%'";
                  }elseif($srchprod!="" and $srchdesc==""){
                    $query = "SELECT * FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type LIKE '%vid%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE NomProduit LIKE '%$srchprod%' AND Type LIKE '%vid%'";
                  }elseif($srchprod=="" and $srchdesc!=""){
                    $query = "SELECT * FROM produit WHERE Description LIKE '%$srchdesc%' AND Type LIKE '%vid%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Description LIKE '%$srchdesc%' AND Type LIKE '%vid%'";
                  }else{
                    $query = "SELECT * FROM produit WHERE Type LIKE '%vid%'";
                    $query_count = "SELECT COUNT(*) FROM produit WHERE Type LIKE '%vid%'";
                  }
                }
                $query_run = $conn->query($query);
                $res = $conn->query($query_count);
                $row = $res->fetchColumn();

                if ($row){
                  $affrow = floor($row/4)+1;
                  $arr=array();
                  foreach ($query_run as $produit){
                    $arr[]=$produit;
                  }
                  for($i=0;$i<$affrow;$i++){
              ?>
              <div class="row" style="padding-top: 2rem">
    
                <!-- PREMIER ARTICLE -->
                <?php
                  if($i==$affrow-1){
                    $endrow= (($row/4) - floor($row/4)) * 4;
                  } else {
                    $endrow=4;
                  }
                  for($j=0;$j<$endrow;$j++){
                ?>
                <div class="col-lg-3 col-sm-1">
                  <div class="card element box">
                      <!-- Image -->
                    <div class="card-image"><img class="fiximg" src='data:image/png;base64,<?=base64_encode($arr[$i*4+$j]['lienImg'])?>' alt="Responsive image"></div>
                    <!-- Corp de notre carte -->
                    <div class="card-body">
                      <!-- Titre du jeu -->
                      <div class="card-title">
                        <!-- Popover pour la description sur le titre du jeu -->
                        <button type="button" class="Abutton Abutton:hover" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="contact owner for more details">
                          <?=$arr[$i*4+$j]['NomProduit'];?>
                        </button>
                      </div>
                      <!-- Description du jeu -->
                      <div class="card-excerpt">
                        <p><?=$arr[$i*4+$j]['Description'];?></p>
                      </div>
                      <button name="prod1" class="Bbutton add-to-basket">Choisir le Produit</button>
                    </div>
                    <!-- Fin du corp -->
                  </div>
                </div>
                <?php
                  }
                ?>
              </div>
              <?php
                  }
                }
              ?>
              <!-- FIN DU ROW -->
              
            </div>
            <!-- FIN DU CONTAINER -->
            <br><br><br>
        </div>
      </div>
    </section>
  
  
    <!-- end contact section -->
    <div class="footer_bg">
      <!-- info section -->
      <section class="info_section layout_padding2-bottom">
        <div class="container">
          <h3 class="">
            startroc
          </h3>
        </div>
        <div class="container info_content">
  
          <div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                   des liens utiles
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About Departments
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                    The Services
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About Departments
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Lorem ipsum dolor
                      </a>
                    </li>
                    <li>
                      <a href="">
                        sit amet, consectetur
                      </a>
                    </li>
                    <li>
                      <a href="">
                        adipiscing elit,
                      </a>
                    </li>
                    <li>
                      <a href="">
                        sed do eiusmod
                      </a>
                    </li>
                    <li>
                      <a href="">
                        tempor incididunt
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                    contactez nous
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About Departments
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Lorem ipsum
                      </a>
                    </li>
                    <li>
                      <a href="">
                        dolor sit amet,
                      </a>
                    </li>
                    <li>
                      <a href="">
                        consectetur
                      </a>
                    </li>
                    <li>
                      <a href="">
                        adipiscing
                      </a>
                    </li>
                    <li>
                      <a href="">
                        elit, sed do eiusmod
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt=""/>
              </a>
  
              <a href="">
                <img src="images/twitter.png" alt=""/>
              </a>
              <a href="">
                <img src="images/linkedin1.png" alt=""/>
              </a>
              <a href="">
                <img src="images/instagram1.png" alt=""/>
              </a>
            </div>
            <div class="form_container mt-5">
              <form action="">
                <label for="subscribeMail">
                  Newsletter
                </label>
                <input type="email" placeholder="Enter Your email" id="subscribeMail"/>
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
  
      </section>
  
      <!-- end info_section -->
  
      <!-- footer section -->
      
    </div>
  
  
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
 
  </body></html>