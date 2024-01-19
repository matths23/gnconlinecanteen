<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>GNC ONLINE CANTEEN</title>
    <style>
  .card{
  margin: 5% 0%;
}

  .card-body{
  margin: 0% 0% 0% 3%;
  padding: 6% 0%;
}
#gnc{
  font: bold;
  color: green;
}
#online{
  color: yellow;
}
#canteen{
  color: red;
}
    </style>
</head>
<body style="font-family: 'Roboto Mono', monospace;">
  <section>
      <!-- Navbar section -->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-success ">
          <div class="container-fluid navbar-custom">
              <a class="navbar-brand" href="#"> <img src="logo.png" alt="Logo image" width="45"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a style="color: #FDD684;" class="nav-link active " aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a style="color: #FDD684;" class="nav-link" href="#Services">Services</a>
                </li>
                <li class="nav-item">
                  <a style="color: #FDD684;" class="nav-link" href="#About">About</a>
                </li>
                <li class="nav-item">
                  <a style="color: #FDD684;" class="nav-link" href="#Contact">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
  </svg></a> 
            </li>
                <li class="nav-item">
                <a style="color: #FDD684;" class="nav-link" href="logout.php">logout</a>
                </li>
              </ul>
            </div>
  
            
            
          </div>
        </nav>

      </div>

      <!-- Hero Section -->
      <div class="container-fluid pt-5" id="home" style="background-color: #D0AA7E; line-height: 1.8;">
        <div class="row">
            <div class="col-sm-3 col-lg-8 col-md-9">
                <p class="lead pt-5" style="color: black; font-size: 30px;"><b>welcome  <?php echo $row["name"]?></a></b></p>
                <h1 class="pt-3 py-3" style="color: #FDD684; margin-top: -30px;"><p><b id="gnc">GNC </b><b id="online">ONLINE </b><b id="canteen">CANTEEN</b></p></h1>
                <h6 class="pt-3 py-3" style="color: #000000; margin-top: -30px;">There are many different kinds of foods and drinks here, maybe you know some of them! 
                Sometimes there are new foods and drinks so stay updated!</h6>
                <button type="button" class="btn btn-sm border border-primary" style="color: black; background: #FDD684;">read More</button>
                <button type="button" class="btn  btn-sm border border-primary" style="color: black; background: #FDD684;">download</button>
            </div>
            <div class="col-sm-9 col-lg-4 col-md-3 ">
                <img src="food1.png" alt="profile image" class="img-fluid">
            </div>
</section>
<section style="background: #CF9A5C; box-radius: 15px; ">
  

<div class="container" >
<h3 style="text-align: center;"><b>what's new about food?</b></h3>
<p style="text-align: center">There are many different kinds of foods and drinks here, maybe you know some of them!
Sometimes there are new foods and drinks so stay updated!
</p>
<!-- Card deck -->
<div class="card-deck row" >

  <div class="col-xs-12 col-sm-6 col-md-4">
    
  <!-- Card -->
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
    <h4 class="card-title" style="text-align: center;">burger</h4>
      <img class="card-img-top" src="Rectangle 77burger.png" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      
      <!--Text-->
      <p class="card-text">Burger is a quick food that can be eaten in a few minutes or even seconds!</p><p><b>₱90</b></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md"style="background-color: red; color: white;">Take now</button>

    </div>

  </div>
  
  </div>
<!-- Card -->
  <div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <h4 class="card-title" style="text-align: center;">doughnut</h4>
      <img class="card-img-top" src="Rectangle 77doughnut.png" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      
      
      <!--Text-->
      <p class="card-text">Doughnuts are sweets. You must try this!</p><p><b>₱125</b></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md"style="background-color: yellow;">Take now</button>

    </div>

  </div>
  
</div>
<!-- Card -->
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
    <h4 class="card-title" style="text-align: center;">fries</h4>
      <img class="card-img-top" src="Rectangle 77fries.png" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      
     
      <!--Text-->
      <p class="card-text">Fries are best paired with burgers. Two yummy combinations!</p><p><b>₱70</b></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md"style="background-color: red; color: white;">Take now</button>

    </div>

  </div>
  
</div>
<!-- Card -->
<h3 style="text-align: center;"><b>whats new about drinks?</b></h3>
<p style="text-align: center;">Here is the list of drinks that we offer! 
</p>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card">

    <!--Card image-->
    <div class="view overlay">
    <h4 class="card-title" style="text-align: center;">milkshake</h4>
      <img class="card-img-top" src="Rectangle 82milkshake.png" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      
      <!--Text-->
      <p class="card-text">A cold milkshake. Drink it when it's hot!</p><p><b>₱200</b></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md" style="background-color: #7AA7FD;">Take now</button>

    </div>

  </div>
 
</div>
  <!-- Card -->
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
    <h4 class="card-title" style="text-align: center;">smoothie</h4>
      <img class="card-img-top" src="Rectangle 84smoothie.png" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      
      <!--Text-->
      <p class="card-text">A smoothie is a healthy drink. Drink healthy!</p><p><b>₱100</b></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md" style="background-color: #7AA7FD;">Take now</button>

    </div>

  </div>
  
</div>
<!-- Card -->
<div class="col-xs-12 col-sm-6 col-md-4">  
  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <h4 class="card-title" style="text-align: center;">iced tea</h4>
      <img class="card-img-top" src="Rectangle 86iced_tea.png" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

  
      
      <!--Text-->
      <p class="card-text">Iced tea is a cold refreshing drink!</p><p><b>₱30</b></p><span><button type="button" class="btn btn-light-blue btn-md" style="background-color: #7AA7FD;">Take now</button></span>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      

    </div>

  </div>
  
</div>
</section>
<section>
  
</section>
<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8" style="background-color: #D0AA7E; line-height: 1.8;">
  <div class="container flex">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="logo.png" alt="" width="1500" height="1500">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="h1 mb-3">Get to know more <br> About me</h2>
  </div>
            <p class="lead fs-4 text-secondary mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, nam? Officiis culpa ducimus dicta aliquam! Ratione minus a neque aliquam praesentium quaerat numquam, dolor quae tempore, possimus id recusandae similique.
            Cupiditate nulla dignissimos blanditiis. Neque eligendi voluptatum labore soluta libero quo ex iusto. Atque quaerat, magnam mollitia est dolor eum voluptatibus quibusdam voluptatum? Quis, odio perspiciatis fugit omnis pariatur voluptas.
            Voluptates expedita odit numquam ipsa animi fugiat eum excepturi, assumenda quaerat quisquam perferendis distinctio obcaecati aspernatur voluptatum temporibus ratione dolorum quae est, ea nisi fuga ipsam dolore. Doloremque, consequatur voluptatum.</p>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="bg-dark text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>XJ8M+VXP, Rep. Eligio Lagman St, Sta. Filomena Rd, Guagua, Pampanga</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2">(045) 900 4366</i></p>
            </li>
            <li>
              <a class="text-white" href="https://www.facebook.com/gnc.edu.ph"><i class="fas fa-envelope pe-2 mb-0" >https://www.facebook.com/gnc.edu.ph</i></a>
            </li>
          </ul>
        </div>
          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="logo.png" height="100" width="100" alt=""
                 loading="lazy" />
          </div>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="#!">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>

        </div>

       

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://gnc.edu.ph/">GUAGUA NATIONAL COLLEGES</a>
    </div>
    <!-- Copyright -->
  </footer>
       

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>