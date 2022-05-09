<?php session_start();
// session_unset()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ********** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <!-- <nav class="navbar navbar-expand-sm bg #912599 navbar-dark "  > -->
    <!-- Brand/logo -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #9125999c ;">
        <a class="navbar-brand" href="#">
            <img src="pic/Capture-removebg-preview (1).png" alt="logo" style="width:70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/php_ecommerce/add.php?name=hello&price=1&img=librarian-scaled.jpg&description=w&add=">Add product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/php_ecommerce/view.php#">View product</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn my-2 my-sm-0" type="submit"
                    style="background-color: #d0a9d2ac ; color:white">Search</button>
            </form>
        </div>
    </nav>
    <!-- ********************end nav bar*********************************** -->

    <!-- <div>
          <img src="pic/librarian-scaled.jpg">
      </div> -->
    <div class="col-sm" style="display: flex; justify-content: center; margin-top: 100px; ">
        <div class="col-xsm" style="display: flex; justify-content: center; border:solid #91259958 2px; width: 60% ">
            <form class="col-sm"  action="add.php" method="POST" >
                <div class="form-group ">
                    <label for="name" class="col-sm" style="padding: 15px;">Add product name</label> <br>
                    <input type="text" class="col-sm" id="name" placeholder="Harry Potter" style="width: 95%;" name="name" required>
                </div>
                <div class="form-group col-sm">
                    <label for="price" class="col-sm" style="padding: 15px;">Add product price</label> <br>
                    <input type="number" class="col-sm" id="price" placeholder="10" style="width: 95%;"name="price" required>
                </div>
                <div class="form-group col-sm">
                    <label for="img" class="col-sm">Add image</label><br>
                    <input type="file" class="col-sm" id="img" name="image" required>
                </div>
                <div class="form-group col-sm">
                    <label for="description" class="col-sm" style="padding: 15px;">Product description</label><br>
                    <textarea class="col-sm" id="description" rows="4" cols="70" name="description" ></textarea>
                </div>
                <button class="btn btn " type="submit" name="add" style="background-color: #9125999c ; color:white ; margin-bottom: 15px;">Add</button>
                <button class="btn btn " type="button" name="view" style="background-color: #9125999c ; color:white ; margin-bottom: 15px;"><a href ="view.php" style="color:white">View</a></button>
            </form>
        </div>
    </div>
<!-- ***end form*** -->

<!-- ********************************table*************** -->
<div class="table" style=" display:flex;justify-content:center; margin-top: 15px;">
    <table class="table" style="width: 800px;">
        <thead class="thead-light">
          <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Description</th>
          </tr>
        </thead>
        
<?php


if(isset($_POST['add'])){
$_SESSION['name'] .=$_POST['name'] .'<br>';
$_SESSION['price'] .=$_POST['price'].'<br>';
$_SESSION['description'] .=$_POST['description'].'<br>';
$_SESSION['image'] .=$_POST['image'].'<br>';


$name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['description'];
$image=$_POST['image'];

echo ('<tr style="background-color:#f9fcfd;  " ><td>' . $_SESSION['name'] . '</td><td><img src="/image/' . $_SESSION['image'] . '"></td><td>' . $_SESSION['price'] . '</td><td>' . $_SESSION['description']. '</td></tr>');
}

?>
  </tbody>
</table>
</div>
<!-- **********************************footer*** -->
    <footer class="footer-48201" style=" margin-top: 100px; background-color: #9125999c ;" >
        <div class="container" >
            <div class="row" >
                <div class="col-sm-4 pr-sm-5"style=" margin-top: 40px;">
                    <a href="#" class="footer-site-logo d-block mb-4" style="color: white;">Booky</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione
                        perspiciatis accusantium.</p>
                </div>
                <div class="col-sm"style=" margin-top: 40px;">
                    <ul class="list-unstyled nav-links">
                        <li><a href="#"style="color: white;" >Home</a></li>
                        <li><a href="#"style="color: white;">Add product</a></li>
                        <li><a href="http://localhost/php_ecommerce/view.php#"style="color: white;">View product</a></li>

                </div>

                <div class="col-sm"style=" margin-top: 40px;">
                    <ul class="list-unstyled nav-links">
                        <li><a href="#"style="color: white;">Privacy Policy</a></li>
                        <li><a href="#"style="color: white;">Terms &amp; Conditions</a></li>
                        <li><a href="#"style="color: white;">Partners</a></li>
                    </ul>
                </div>
                <div class="col-sm text-sm-center" style=" margin-top: 40px; ">
                    <ul class="social list-unstyled" style="display: flex; justify-content: space-between; ">
                        <li><a href="#"style="color: white;"><i class="fa fa-facebook-official" style="font-size:24px"></i></a></li>
                        <li><a href="#"style="color: white;"><i class="fa fa-twitter-square" style="font-size:24px"></i></a></li>
                        <li><a href="#"style="color: white;"><i class="material-icons" style="font-size:24px">email</i></i></a></li>
                    </ul>
                    <p class=""><a href="#" class="btn btn-tertiary"style=" color:white">Contact Us</a></p>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright mt-5 pt-5">
                        <p><small>© 2022 All Rights Reserved.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>