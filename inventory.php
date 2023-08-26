<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
      header("location: login.php");
  }
  require "partitions/_dbconnect.php";
  $sql = "SELECT * FROM inventory";
	$result = mysqli_query($connect, $sql);
	$num =  mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  
<?php require 'partitions/_navi.php' ?>

<h1 class="text-center font-bold text-6xl">Inventory</h1>
<h1 class="py-2 font-medium text-4xl pl-10"> Items Available
</h1>
<h1 class="py-2  font-light text-2xl pl-10"><?php echo $num ?> Items
</h1>

<section class=" container con pt-5" >
<table width="100%" class=" border-slate-400 border table-fixed border-collapse ">
<thead class="bg-cyan-100  border-y-2 text-center font-bold">
<tr>

<td>Serial</td>
<td>Product</td>
<td>Price</td>
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
            <td class="text-center"><?php echo $row["rate"] ?> TK </td>
      </tr>
            <?php
          }
        ?>
</tbody>
</table>
   



    </table>
</section>
    <a href="#"><button class="button-os text-2xl px-5 py-2" style="display: flex; justify-content: center">Add Items</button></a>


<!-- <div class=" container pt-5">
<button class="container rounded-full bg-cyan-300 text-2xl px-10 py-2">Add Items</button>
</div> -->

<!-- Footer -->
<?php require 'partitions/_footer.php' ?>

</body>
</html>

