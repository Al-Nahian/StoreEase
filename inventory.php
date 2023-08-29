<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
      header("location: login.php");
  }
  require "partitions/_dbconnect.php";
  
  $start = 0;
  $rows_per_page = 10;

  $sql1 = "SELECT * FROM inventory";
	$records = mysqli_query($connect, $sql1);

	$num =  mysqli_num_rows($records);

  $pages = ceil($num / $rows_per_page);

  if (isset($_GET['page'])) {
      $page = $_GET['page'] - 1;
      $start = $page * $rows_per_page;
  }

  
  $sql = "SELECT * FROM inventory LIMIT $start, $rows_per_page";
	$result = mysqli_query($connect, $sql);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles/popup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Inventory</title>
</head>

<body class="bg-gray-800 text-white">
   
  <?php require 'partitions/_navi.php' ?>
  <div id="blur"> 
    <h1 class="text-center font-bold text-6xl">Inventory</h1>
    <h1 class="py-2 font-medium text-4xl pl-10"> Items Available
    </h1>
    <h1 class="py-2  font-light text-2xl pl-10"><?php echo $num ?> Items
    </h1>

    <section class=" container con pt-3" >
    <table width="100%" class=" border-slate-400 border table-fixed border-collapse ">
    <thead class="bg-gray-100 text-black border-y-2 text-center font-bold">
    <tr>

    <td>Serial</td>
    <td>Product</td>
    <td>Price</td>
    <td>In Stock</td>
    <td>Edit Items</td>
    </tr>
    </thead>
    <tbody class="font-medium">
          <tr class="text-center">
            
          
          <tr>
            <?php
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                
                <td class="text-center"><?php echo $row["serial"] ?> </td>
                <td class="text-center"><?php echo $row["product-name"] ?> </td>
                <td class="text-center">৳ <?php echo $row["rate"] ?> TK </td>
                <td class="text-center"><?php echo $row["Stock"] ?> pieces</td>
                <td class="text-center"><button>Edit</button></td>
          </tr>
                <?php
              }
            ?>
    </tbody>
    </table>
      

    <div class="relative left-70 pt-4 my-4">
      <a href="#"><button class=" rounded-xl bg-gray-50 pb-2 pl-3 pr-3 pt-2 font-medium text-gray-800" type="submit" id="popup-show">Add Items</button>
      </a>
    </div>

        </table>

    </section>
    <?php require 'partitions/_pages.php' ?>
    <!-- <div class=" container pt-5">
    <button class="container rounded-full bg-cyan-300 text-2xl px-10 py-2">Add Items</button>
    </div> -->

    <!-- Footer -->
    <?php require 'partitions/_footer.php' ?>
  </div>


<div class="text-black">
  <div class="popup">
    <div class="close-btn">
      X
    </div>
    <div class="form">
      <h2>Add Items</h2>
      <div class="form-element">
        <label for="name">Product Name</label>
        <input type="text" id="name" placeholder="Enter Product Name">
      </div>
      <div class="form-element">
        <label for="price">Price</label>
        <input type="text" id="price" placeholder="Enter Price">
      </div>
      <div class="form-element">
        <label for="stock">Stock</label>
        <input type="text" id="stock" placeholder="Enter Number Of Stock">
      </div>
      <div class="form-element">
        <button>Submit</button>
      </div>
    </div>
  </div>
</div>
<script>
  document.querySelector("#popup-show").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
  });

    document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
  });

  document.querySelector("#popup-show").addEventListener("click",function(){
    document.querySelector("#blur").classList.add("blur");
  });

  document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector("#blur").classList.remove("blur");
  });
</script>
</body>
</html>

