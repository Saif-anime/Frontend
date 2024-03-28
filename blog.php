<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<!-- navigation bar here  -->

<?php
include './component/navbar.php';

?>



  <!-- blog content here  -->


  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
  <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Blogs Section</h1>
    <div class="flex flex-wrap -m-4">
        <!-- card here  -->

        <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>

    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>


    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>


    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>


    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>


    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>

    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>

    <div class="p-4 md:w-1/4">
        <?php
    include './component/card.php';?>


    </div>
    </div>


        
     
    

  
    </div>
  </div>
</section>


  <!-- blog content end here  -->




<!-- content here  -->



  <!-- footer here  -->


  <?php
include './component/footer.php';

?>


</body>
  <!-- carausel  -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 

</html>