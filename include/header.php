<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>


    <!-- Header Section Start -->
    <header class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <img src="images/Logo Here.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-nav">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-end">
                        <a href="#" class="themelight">Log In</a>
                        <a href="#" class="themebtn">Appy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->