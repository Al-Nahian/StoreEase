<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
      header("location: login.php");
  }
  require "partitions/_dbconnect.php";
 
  $start = 0;
  $rows_per_page = 5;

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/orderstyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order Item</title>
</head>
<body class="bg-gray-800">
    
<?php require 'partitions/_navi.php' ?>

<h1 class="text-center font-bold text-6xl text-white">Order Items</h1>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
        <?php
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="row p-2 bg-gray-800 text-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" style="height: 7vw; width: 7vw" src="http://3.bp.blogspot.com/-dmvPv7gCNQw/VZV1cDCvzlI/AAAAAAAAEF4/t-6xUTggF8w/s1600/Missing_Icon.png"></div>
                <div class="col-md-6 mt-1">
                    <h5 style="font-size:1.5vw; font-weight: 700;"><?php echo $row["product-name"] ?></h5>
                    <div class="mt-1 mb-1 spec-1"><span>Brand</span><span class="dot"></span><span>Category</span><span class="dot"></span><span>Volume<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>N/A</span><span class="dot"></span><span>N/A</span><span class="dot"></span>N/A<span><br></span></div>
                    <p class="text-justify text-truncate para mb-0">
                    <?php if ($row["Stock"]>0) {
                        echo "This item is available and in stock right now.";
                    } else {
                        echo "This item is out of stock.";
                    }
                    ?><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center" style="justify-content: center;">
                        <h4 class="mr-1" style="font-weight: 700; font-size: 1.5vw">৳ <?php echo $row["rate"] ?> TK </h4>
                    </div><br>
                    <h4 class="mr-1" style="text-align: center;">In-Stock : <?php echo $row["Stock"] ?> items</h4>
                    <div class="d-flex flex-column mt-4 justify-center"> 
                    <p class="text-center">Quantity : </p><input class="text-black w-16 h-7 mx-24 pt-1" value="1" type="number" style="text-align: center;">
                        
                        <button class="btn bg-gray-50 font-semibold btn-sm mt-2" type="button">Add to cart</button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
                <?php require 'partitions/_pages.php' ?>
</div>
<!-- Footer -->
<?php require 'partitions/_footer.php' ?>
</body>
</html>