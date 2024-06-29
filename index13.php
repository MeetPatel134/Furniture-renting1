<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Deep Patel">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <meta name="description" content="Space X Interiors">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <style>
    .form-control {
      background-color: #e9e9e7;
    }
    .border-secondary {
    border-color: black !important;
}

.card{
background-color: transparent;
}
    .navbar-brand img {
    width: 120px;
    height: 120px;
    margin-left: 10px;
}
    .navbar-light .navbar-nav .nav-link {
    color: black;
}

    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
}
    body {
    background-color: #e9e9e7;
}
    .footer p{
            background: #24262b;
            color: #fff;
            text-align: center;
            padding: 10px;
            
        }
       .card-body {
    /* -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem; */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp:2;
    overflow: hidden;
    width: auto;
    height: 100px;
}

h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h4, h5, h6{
  display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp:2;
    overflow: hidden;
    width: auto;
    height: 56px;

}
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



.container {
  max-width: 1170px;
  margin: auto;
}

.row1 {
  display: flex;
  flex-wrap: wrap;
  
}

ul {
  list-style: none;
}

.footer {
  background-color: #24262b;
  padding: 70px 0;
  width: 100vw;
  
  
}

.footer-col {
  width: 25%;
  padding: 10px 50px;

}



.footer-col h3 {
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}

.footer-col h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}

.footer-col ul li:not(:last-child) {
  margin-bottom: 10px;
}

.footer-col ul li a {
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}

.footer-col ul li a:hover {
  color: #ffffff;
  padding-left: 8px;
}

.footer-col .Social-links a {
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  margin: 0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
  
}

.footer-col .Social-links a:hover {
  color: #24262b;
  background-color: #ffffff;
}

@media (max-width: 767px) {
  .footer-col {
    width: 100%;
    margin-bottom: 30px;
  }
}

@media (max-width: 574px) {
  .footer-col {
    width: 100%;
  }
}

@media(max-width: 768px){
  .hero{
    flex-direction: column;
  }
  .hero article {
    flex: 1 1 100%;
}
header nav ul {
  flex-direction: column;
  align-items: center;
}
}
  
.container {
    width: 1000px;
    margin: auto;
    margin-top:100px;
   
}

.card-deck{
    background-color:white;
    border: background-color rebeccapurple;
    display: contents;
}

.card-footer {
    padding: .75rem 1.25rem;
    background-color: transparent;
    border-top: 1px solid rgba(0, 0, 0, .125);
}
.pl-4, .px-4 {
    padding-left: 0.6rem !important;
}
.img {
    vertical-align: middle;
    border-style: none;
    width: 100px;
}

img {
    overflow-clip-margin:content-box;
    overflow: clip;
    border-radius: 3px;
    
}

.hover11 figure img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover11 figure:hover img {
	opacity: .5;
}


.text-info {
    color: black !important;
}
.text-danger {
    color: black !important;
}

.btn-info {
    color: white;
    background-color: black;
    border-color: black;
}

.button{
    background-color: aqua;
}

/* Base button styles */
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s peru, background-color .15s peru, border-color .15s peru, box-shadow .15s peru;
}

/* Info button styles */
.btn-info {
    color: #fff;
    background-color: black;
    border-color:black;
}

.btn-info:hover {
    color: #fff;
    background-color: peru;
    border-color: peru;
}

.btn-info:focus, .btn-info.focus {
    box-shadow: 0 0 0 0.2rem peru;
    background-color: peru;
    border: peru;
}

.btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: peru;
    border-color: peru;
}

/* Block level button styles */
.btn-block {
    display: block;
    width: 100%;
}

/* Additional styles for addItemBtn */
.addItemBtn {
    /* Add any additional styles specific to .addItemBtn here */
    /* Example: */
    font-size: 1.2rem;
    padding: .5rem 1rem;
}
    </style>
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img src="WhatsApp Image 2024-06-15 at 12.45.55 PM-Photoroom.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHomeFurnishingLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home Furnishing</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownHomeFurnishingLink">
                        <li><a class="dropdown-item" href="index1.php">Mats and Rugs</a></li>
                        <li><a class="dropdown-item" href="index2.php">Multipurpose Cabinets</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Art</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="index8.php">Paintings</a></li>
                        <li><a class="dropdown-item" href="index5.php">Figurines</a></li>
                        <li><a class="dropdown-item" href="index4.php">Botanicals</a></li>
                        <li><a class="dropdown-item" href="index.php">Lights</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownGalleryLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Walls</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownGalleryLink">
                        <li><a class="dropdown-item" href="index12.php">Wall Gallery</a></li>
                        <li><a class="dropdown-item" href="index10.php">Wall Arts</a></li>
                        <li><a class="dropdown-item" href="index7.php">Clocks</a></li>
                        <li><a class="dropdown-item" href="index6.php">Mirror</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHomeDecorLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home Decor</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownHomeDecorLink">
                        <li><a class="dropdown-item" href="index11.php">Cushion Cover</a></li>
                        <li><a class="dropdown-item" href="index9.php">Curtains</a></li>
                        <li><a class="dropdown-item" href="index3.php">Chairs</a></li>
                        <li><a class="dropdown-item" href="index14.php">Sofa</a></li>
                        <li><a class="dropdown-item" href="index13.php">Pouffe</a></li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
            </ul>
        </div>
        <div class="navbar-icons">
            <a href="contactme/index.php" class="nav-icon"><img src="./image/call img.png" alt="Call"></a>
            <a href="login.php" class="nav-icon"><img src="./image/contact.png" alt="Contact"></a>
            <a href="./cart.php" class="nav-icon"><img src="./image/cart.png" alt="Cart">
			<span id="cart-item"
			class="badge badge-danger"></span></a>
        </div>
    </nav>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product13');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-1">
        <div class="card-deck">
          <div class=" hover11 card p-2 border-secondary mb-1">
            <figure><img src="<?= $row['product_image'] ?>" class="card-img" height="250" alt="product"></figure><span></span>
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  <footer class="footer">
        <div class="container">
            <div class="row1">
                <div class="footer-col">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="team/team.html">Meet the team</a></li>
                        <li><a href="privacy.html">Privacy policy</a></li>
                        <li><a href="shipping policy\policy.html">Shipping policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Get help</h3>
                    <ul>
                        <li><a href="FAQs/index.html">FAQ</a></li>
                        <li><a href="refund policy\index (4).html">Refund policy</a></li>
                        <li><a href="e-gift card/index.html">E-gift card</a></li>
                        <li><a href="terms and services\index.html">Terms of services</a></li>
                        <!-- <li><a href="#">Payment options</a></li> -->
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Online Shop</h3>
                    <ul>
                        <li><a href="index2.php">Multipurpose Cabinets</a></li>
                        <li><a href="index5.php">Figurines</a></li>
                        <li><a href="index6.php">Mirrors</a></li>
                        <li><a href="index8.php">Paintings</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Follow Us</h3>
                    <div class="Social-links" style="display: flex;">
                        <a href="https://github.com/sxi-sxi"><i class="fab fa-github"
                                style="width: 50px;margin-left: -5px;"></i></a>
                        <a href="https://x.com/SpaceXInte33699"><i class="fab fa-twitter"
                                style="width: 50px;margin-left: -5px;"></i></a>
                        <a href="https://www.instagram.com/space.x_interiors/?next=%2F"><i class="fab fa-instagram"
                                style="width: 50px;margin-left: -5px;"></i></a>
                        <a href="https://www.linkedin.com/in/hackatoons-interiors-241041315/"><i class="fab fa-linkedin-in"
                                style="width: 50px;margin-left: -5px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <p>&copy; 2024 Space X Interior. All rights reserved. </p>
</footer>
</body>

</html>