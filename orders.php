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
<body style="background-color: #99bbff">
    
<?php require 'partitions/_navi.php' ?>

<h1 class="text-center font-bold text-6xl">Order Items</h1>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
        <?php
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" style="height: 7vw; width: 7vw" src="http://3.bp.blogspot.com/-dmvPv7gCNQw/VZV1cDCvzlI/AAAAAAAAEF4/t-6xUTggF8w/s1600/Missing_Icon.png"></div>
                <div class="col-md-6 mt-1">
                    <h5 style="font-size:1.5vw; font-weight: 700;"><?php echo $row["product-name"] ?></h5>
                    <div class="mt-1 mb-1 spec-1"><span>Brand</span><span class="dot"></span><span>Category</span><span class="dot"></span><span>Volume<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>N/A</span><span class="dot"></span><span>N/A</span><span class="dot"></span>N/A<span><br></span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center" style="justify-content: center;">
                        <h4 class="mr-1" style="font-weight: 700;">৳ <?php echo $row["rate"] ?> TK </h4>
                    </div>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</div>
            
            
            
            
            
            
            
            <!-- <table>
                    
                    <tbody class="font-medium">
                        <tr>
                            <?php
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                
                                <td class="text-center">
                                    <div class="col-md-3 mt-1">
                                    <?php echo $row["serial"] ?>
                                    </div> 
                                </td>
                                
                                <td class="text-center">
                                    <div class="col-md-6 mt-1">
                                    <h5> </h5>
                                    </div>
                                </td>
                                
                                <td class="text-center">
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="mr-1"></h4>
                                        </div>
                                         <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                                    </div>
                                </td>
                        </tr>
                                <?php
                            }
                            ?>
                    </tbody>
                </table> -->
            <!-- </div>
        </div>
    </div>
</div> -->
<!-- Footer -->
<?php require 'partitions/_footer.php' ?>
</body>
</html>