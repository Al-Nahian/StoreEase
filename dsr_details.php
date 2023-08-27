<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
      header("location: login.php");
  }
  require "partitions/_dbconnect.php";
  $sql = "SELECT * FROM dsr";
	$result = mysqli_query($connect, $sql);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/orderstyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DSR Details</title>
</head>
<body>
  <body>
  <?php require "partitions/_navi.php" ?>
<main class="h-screen w-screen bg-gray-800 text-white">
  <div class="flex justify-center">
  <img class="w-[160px] rounded-full mt-3 " src="https://www.w3schools.com/howto/img_avatar.png">
  </div>
 <h1 class="text-white text-center mt-2 font-serif">Terry Bergson</h1>
 <p class=" text-white text-center text-xl">Distributor sales Representative</p>
 <div class="text-center font-mono">
 <a href="" class=" mx-1">Call.</a>
 <a href="" class=" mx-1">Email.</a>
 <a href="" class="">Massage.</a>
 </div>

 <div class=" h-max">
 <div class="mt-5 font-semibold mx-4 text-5xl h-max">Products <button class=" rounded bg-slate-700 px-2 text-2xl mx-a pr-3 mx-52  text-white">Edit</button></div>
<div class=" h-max pt-2">
 <p style="max-width: 100ch; word-wrap: break-word;" class="mx-4">Ata,Moyda,suji,ruti,baloon,choclate,dab,kola,sobji,ruti,baloon,bat,ball.cricket bat,football,tenis ball                  
 </p>
</div>
<div class="mt-5 font-semibold mx-4 text-5xl h-max">Locations <button class=" rounded bg-slate-700 px-2 text-2xl mx-a pr-3 mx-48  text-white">Edit</button></div>
<div class="h-max pt-2">
 <p style="max-width: 100ch; word-wrap: break-word;" class="mx-4">Ata,Moyda,suji,ruti,baloon,choclate,dab,kola,sobji,ruti,baloon,bat,ball.cricket bat,football,tenis ball                  
 </p>
</div>
<div class="mt-5 font-semibold mx-4 text-5xl w-screen">Days <button class=" rounded bg-slate-700 px-2 text-2xl  pr-3 mx-[294px]  text-white">Edit</button></div>
<div class=" h-max pt-2">
 <p style="max-width: 100ch; word-wrap: break-word;" class="mx-4">Ata,Moyda,suji,ruti,baloon,choclate,dab,kola,sobji,ruti,baloon,bat,ball.cricket bat,football,tenis ball                  
 </p>
</div>
 </div>
</div>
<?php require "partitions/_footer.php" ?>
</main>
</body>
</html>