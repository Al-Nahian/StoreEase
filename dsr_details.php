<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("location: login.php");
}
require "partitions/_dbconnect.php";
if (isset($_GET['serial'])) {
  $id = $_GET['serial'];
}
$sql = "SELECT * FROM dsr WHERE serial = '$id'";
$result = mysqli_query($connect, $sql);

if (isset($_REQUEST['updateDSR'])) {
  $name = $_POST["name"];
  $address = $_POST["address"];
  $days = $_POST["days"];
  $orders = $_POST["orders"];
  $products = $_POST["products"];
  $sqlupdate = "UPDATE `dsr` SET `name`='$name',`address`='$address',`days`='$days',`ordersdel`='$orders',`products`='$products' WHERE serial='$id'";
  $newresult = mysqli_query($connect, $sqlupdate);
  header("Refresh:0");
}

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/orderstyle.css">
    <link rel="stylesheet" href="styles/popup.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DSR Details</title>
  </head>

  <body class="">
    <?php require "partitions/_navi.php" ?>
    <div id="blur">
      <main class="min-h-screen bg-gray-800 text-white">
        <div class="">
          <div class="flex justify-center">
            <img class="w-[160px] rounded-full mt-5 " src="https://www.w3schools.com/howto/img_avatar.png">
          </div>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <h1 class="text-white text-center mt-2 font-serif">
              <?php echo $row["name"] ?>
            </h1>
            <p class=" text-white text-center text-xl">Distributor sales Representative</p>
            <div class="text-center font-mono">
              <a href="" class=" mx-1">Call.</a>
              <a href="" class=" mx-1">Email.</a>
              <a href="" class="">Massage.</a>
            </div>

            <div style="display: grid;justify-content: center;">
              <div class="mt-5 font-semibold mx-4 text-5xl">Products <button
                  class=" rounded bg-slate-700 px-2 text-2xl mx-a pr-3 mx-52  text-white" id="popup-show">Edit</button>
              </div>
              <div class=" pt-2">
                <p style="max-width: 100ch; word-wrap: break-word;" class="mx-4">
                  <?php echo $row["products"] ?>
                </p>


              </div>
              <div class="mt-5 font-semibold mx-4 text-5xl">Locations </div>
              <div class="pt-2">
                <p style="max-width: 100ch; word-wrap: break-word;" class="mx-4">
                  <?php echo $row["address"] ?>
                </p>
              </div>
              <div class="mt-5 font-semibold mx-4 text-5xl">Days</div>
              <div class="pt-2">
                <p style="max-width: 100ch; word-wrap: break-word;" class="mx-4">
                  <?php echo $row["days"] ?>
                </p>
                <br><br>
              </div>

            </div>
          </div>

        </main>
        <?php require "partitions/_footer.php" ?>
      </div>


      <div class="text-black">
        <div class="popup">
          <div class="close-btn">
            X
          </div>
          <div class="form">
            <h2>Edit DSR</h2>
            <form method="post" action="dsr_details.php?serial=<?php echo $id ?>">
              <div class="form-element">
                <label for="name">DSR Name</label>
                <input type="text" name="name" placeholder="Enter Name" value="<?php echo $row["name"] ?>">
              </div>
              <div class="form-element">
                <label for="products">Products</label>
                <input type="text" name="products" placeholder="Enter Products" value="<?php echo $row["products"] ?>">
              </div>
              <div class="form-element">
                <label for="address">Location</label>
                <input type="text" name="address" placeholder="Enter Location" value="<?php echo $row["address"] ?>">
              </div>
              <div class="form-element">
                <label for="days">Days</label>
                <input type="text" name="days" placeholder="Enter Days" value="<?php echo $row["days"] ?>">
              </div>
              <div class="form-element">
                <label for="ordersdel">Orders Delivered</label>
                <input type="text" name="orders" placeholder="Enter Number of Orders Delivered"
                  value="<?php echo $row["ordersdel"] ?>">
              </div>
              <div class="form-element center">
                <input type="submit" name="updateDSR" style="
                width: 100%;
                height: 48px;
                border: none;
                outline: none;
                font-size: 16px;
                background: #222;
                color: #f5f5f5;
                border-radius: 10px;
                cursor: pointer;
              cursor:pointer" value="SUBMIT">
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php
          }
          ?>
    <script>
      document.querySelector("#popup-show").addEventListener("click", function () {
        document.querySelector(".popup").classList.add("active");
      });

      document.querySelector(".popup .close-btn").addEventListener("click", function () {
        document.querySelector(".popup").classList.remove("active");
      });

      document.querySelector("#popup-show").addEventListener("click", function () {
        document.querySelector("#blur").classList.add("blur");
      });

      document.querySelector(".popup .close-btn").addEventListener("click", function () {
        document.querySelector("#blur").classList.remove("blur");
      });
    </script>

  </body>

</html>