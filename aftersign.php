<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  <link rel="stylesheet" href="mystyle.css">

  <title> HungryHub </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="aftersignindex.php">
            <span>
              HungryHub
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="aftersignindex.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="aftersignmenu.php">Menu <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aftersignabout.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aftersignbook.php">Book Table</a>
              </li>
            </ul>
            <div class="user_option">
            <div class="dropdown">
                    <a href="" class="user_link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                     </a>
                <div class="dropdown-content">
                    <a href="customer.php">Logout</a>
                 </div>
                </div>
              <a class="cart_link" href="cart.php">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="menu.php" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <div class="greeting">
    Hi, Customer please choose from our menu
  </div>

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Wraps</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
     
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/chicken_wrap.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Chicken Wrap
                  </h5>
                  <p>
                    Special Sauce, Capsicum, Spicy Chicken, Cheese, Onion Olives, Tomato
                  </p>
                  <div class="options">
                    <h6>
                      $8.99
                    </h6>
                    
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Chicken Wrap">
                            <input type="hidden" name="Descrip" value="Special Sauce, Capsicum, Spicy Chicken, Cheese, Onion Olives, Tomato">
                          <input type="hidden" name="Price" value="8.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f2.png" alt="">
                </div>
               
                <div class="detail-box">
                  <h5>
                    Classic Cheese Burger
                  </h5>
                  <p>
                    Splendid Chicken, Cheese, lettuce, Special sauce, Spicy sauce, Tomatoes, Chillis.  
                  </p>
                  <div class="options">
                    <h6>
                      $9.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Classic Cheese Burger">
                            <input type="hidden" name="Descrip" value="Splendid Chicken, Cheese, lettuce, Special sauce, Spicy sauce, Tomatoes, Chillis.">
                          <input type="hidden" name="Price" value="9.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/chicken-caesar-lettuce-wraps.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Chicken Ceasar Wrap
                  </h5>
                  <p>
                    Romaine Lettuce, Cooked Chicken, Caesar Dressing, Red Onion, Anchovies.
                  </p>
                  <div class="options">
                    <h6>
                      $8.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Chicken Ceasar Wrap">
                            <input type="hidden" name="Descrip" value=" Romaine Lettuce, Cooked Chicken, Caesar Dressing, Red Onion, Anchovies.">
                          <input type="hidden" name="Price" value="8.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f4.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Chef''s Special Pasta
                  </h5>
                  <p>
                    Parmesan Cheese, Olive Oil, Olives, Sundried Tomatoes, Sweet corn, Italian pasta.
                  </p>
                  <div class="options">
                    <h6>
                      $14.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Chef''s Special Pasta">
                            <input type="hidden" name="Descrip" value=" Parmesan Cheese, Olive Oil, Olives, Sundried Tomatoes, Sweet corn, Italian pasta.">
                          <input type="hidden" name="Price" value="14.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all fries">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/fries.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Loaded Fries
                  </h5>
                  <p>
                    French Fries with chicken pieces dipped in any sauce of your Choice.
                  </p>
                  <div class="options">
                    <h6>
                      $6.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Loaded Fries">
                            <input type="hidden" name="Descrip" value=" French Fries with chicken pieces dipped in any sauce of your Choice.">
                          <input type="hidden" name="Price" value="6.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/wrap.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Tender Chicken Wrap
                  </h5>
                  <p>
                    Spicy Chicken, Bell pepper, Jalapeño, Tomatoes, blend of different sauces.
                  </p>
                  <div class="options">
                    <h6>
                      $8.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Tender Chicken Wrap">
                            <input type="hidden" name="Descrip" value="Spicy Chicken, Bell pepper, Jalapeño, Tomatoes, blend of different sauces.">
                          <input type="hidden" name="Price" value="8.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f7.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Beef Burger
                  </h5>
                  <p>
                    Beef steak, lettuce, Tomatoes, Jalapeño, sriracha sauce, Mozzarella Cheese, Bell pepper.
                  </p>
                  <div class="options">
                    <h6>
                      $9.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Beef Burger">
                            <input type="hidden" name="Descrip" value="Beef steak, lettuce, Tomatoes, Jalapeño, sriracha sauce, Mozzarella Cheese, Bell pepper.">
                          <input type="hidden" name="Price" value="9.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f8.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Grilled Chicken Burger.
                  </h5>
                  <p>
                    Chicken Fitllet, lettuce, Tomatoes, Jalapeño, Mozzarella Cheese.
                  </p>
                  <div class="options">
                    <h6>
                      $9.99
                    </h6>
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Grilled Chicken Burger.">
                            <input type="hidden" name="Descrip" value="Chicken Fitllet, lettuce, Tomatoes, Jalapeño, Mozzarella Cheese.">
                          <input type="hidden" name="Price" value="9.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f9.png" alt="" >
                </div>
                <div class="detail-box">
                  <h5>
                    Red Sauce Pasta
                  </h5>
                  <p>
                    Dried red chili flakes, Epazote, Basil, Oregano, Parsley, and lack pepper.
                  </p>
                  <div class="options">
                    <h6>
                      $14.99
                    </h6>
                    
                    <form id="AddToCart" method="post" action="AddToCart.php">
                          <input type="hidden" name="Item" value="Red Sauce Pasta">
                            <input type="hidden" name="Descrip" value="Dried red chili flakes, Epazote, Basil, Oregano, Parsley, and lack pepper.">
                          <input type="hidden" name="Price" value="14.99">
                          <button type="submit" class="btn btn-warning" name="save">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="menu.php">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->
  

   <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
          <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head elements here -->
</head>
<body>

<form id="bookingForm" action="" method="post">
    <div>
        <input type="text" class="form-control" placeholder="Your Name" name="Name1"/>
    </div>
    <div>
        <input type="text" class="form-control" placeholder="Phone Number" name="Phone"/>
    </div>
    <div>
        <input type="email" class="form-control" placeholder="Your Email" name="Email"/>
    </div>
    <div>
        <select class="form-control nice-select wide" name="Persons">
            <option value="" disabled selected>
                How many persons?
            </option>
            <option value="2">
                2
            </option>
            <option value="3">
                3
            </option>
            <option value="4">
                4
            </option>
            <option value="5">
                5
            </option>
        </select>
    </div>
    <div>
        <input type="date" class="form-control" name="Date1">
    </div>
    <div class="btn_box">
        <button type="submit" name="submit">
            Book Now
        </button>
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Assuming you have a database connection
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = mysqli_connect('localhost', 'root', '', 'final');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $name = $_POST['Name1'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $persons = $_POST['Persons'];
    $date = $_POST['Date1'];

    // Insert data into the database
    $sql = "INSERT INTO Booktable (Name1, Phone, Email, Persons, Date1) VALUES ('$name', '$phone', '$email', '$persons', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!-- Add your other HTML elements here -->

</body>
</html>


          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are HungryHub
              </h2>
            </div>
            <p>
              HungryHub, a distinguished Italian restaurant, is renowned for its authentic flavors and culinary mastery. 
              From perfectly al dente pastas to expertly crafted wraps and burgers, 
              each dish is a testament to the restaurant's commitment to excellence.
              The menu showcases a harmonious fusion of traditional Italian artistry and modern innovation,
              creating a delightful dining experience. HungryHub's golden,
              crispy fries add the perfect touch to complete a meal of exquisite taste.
            </p>
           <a href="about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="about.php">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +92 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  HungryHub@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="index.php" class="footer-logo">
              HungryHub
            </a>
            <p>
              Follow us on
            </p>
            <div class="footer_social">
              <a href="https://www.facebook.com/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com/?lang=en">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://www.pinterest.com/">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="about.php">HungryHub</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://cms.bahria.edu.pk/Logins/Student/Login.aspx" target="_blank">Ahmed, Ashad, Shahbaz</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>