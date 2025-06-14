<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceteggory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/fire-burner?f=classic&s=solid">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="img/logo.svg" />
    <script src="https://kit.fontawesome.com/47bc1c429d.js" crossorigin="anonymous"></script>
    <style>
         body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .m{
            margin-top: 8rem;
            
        }
    </style>
</head>

<body>
    <!-- header section start -->
     <?php include "healder.php" ?>
    <!-- header section end -->
    <!-- Search form start -->
    <form action="" id="search-form">
        <input type="search" name="" id="search-box" placeholder="Search here...">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- Search form end -->

    <!-- home section starts -->
     <div class="m">
        <?php include_once 'sub_cetegory/cetegory.php'?> 
     </div>
    <!-- home section ends -->
  
    <!-- menu section ends -->

    <!-- order section starts -->

    <!-- order section ends -->

    <!-- footer section starts -->
    <?php include "footer.php"?>
    <!-- footer section ends -->

    <!-- loader part -->
    <div class="loader-container">
        <img src="img/loading2.gif" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/js.js"></script>
</body>

</html>