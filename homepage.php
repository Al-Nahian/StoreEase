<?php 
    session_start();
    if ($_SESSION['loggedin']==false) {
        header("location: login.php");
    }
    if (isset($_COOKIE['firstName']))
     {
        $firstName = $_COOKIE['firstName'];
        $lastName = $_COOKIE['lastName'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
</head>
<body class="bg-emerald-100">

<?php require 'partitions/_navi.php' ?>

<div >
<div class=" h-40 w-40 px">
  <div class="absolute top-12 left-10 py-5">
    <img class="rounded-full h-28 w-28 " src="https://img.freepik.com/free-photo/indoor-picture-cheerful-handsome-young-man-having-folded-hands-looking-directly-smiling-sincerely-wearing-casual-clothes_176532-10257.jpg?w=1380&t=st=1692119371~exp=1692119971~hmac=45fb3f9f754fdfa36e846d07d46baeb4c7a9fff3520826b8e31dc512e4a67baa" alt="">
  </div>
</div>

  <div>
    <h1 class="px-10  text-2xl font-bold"><?php echo($_SESSION['firstname']) ?> <?php echo($_SESSION['username'])?><br>
    <div>
    <h1 class="font-light">
    Distributor <br>
    Basundhara RA,DHAKA </h1>
    </div>
  </div>
  <div class="py-7">
  <fieldset class="border-t border-t-slate-900 ">
  </fieldset>
  </div>
<div class="max-w-[1320px] mx-auto py-10">
  
  <div class="max-w-[1320px] mx-auto grid lg:grid-cols-4 md:grid-cols-2 gap-28">

<a href="https://www.facebook.com">
    <div class="text-center shadow-lg bg-blue-200 rounded-2xl">
      <div class="overflow-hidden">
      <img src="img/inventory.png" class=" hover:scale-125 duration-1000"/>
      </div>
      <h3 class="py-2 text-2xl">Inventory</h3>
    </div> 
</a>

          <a href="https://www.facebook.com">

      <div class="text-center shadow-lg bg-blue-200 rounded-2xl">
      <div class="overflow-hidden rounded-2xl">
      <img src="img/daily-report.png" class="hover:scale-125 duration-1000"/>
      </div>
      <h3 class="py-2 text-2xl">Daily Report</h3>
    </div></a>

       <a href="https://www.facebook.com">
        <div class="text-center shadow-lg bg-blue-200 rounded-2xl">
      <div class="overflow-hidden">
      <img src="img/businessman.png" class="hover:scale-125 duration-1000"/>
      </div>
      <h3 class="py-2 text-2xl">DSR</h3>
    </div></a>


        <a href="https://www.facebook.com">
        <div class="text-center shadow-lg bg-blue-200 rounded-2xl">
        <div class="overflow-hidden">
        <img src="img/order.png" class="hover:scale-125 duration-1000"/>
        </div>
      <h3 class="py-2 text-2xl">Order</h3>
         </div>
         </a>
  </div>
   
   </div>

</div>
</body>
</html>

