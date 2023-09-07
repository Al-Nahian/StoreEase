<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("location: login.php");
}
require "partitions/_dbconnect.php";
$sql = "SELECT * FROM dsr";
$result = mysqli_query($connect, $sql);

if (isset($_REQUEST['dsrAdd'])) {
  $name = $_POST["name"];
  $address = $_POST["address"];
  $days = $_POST["days"];
  $orders = $_POST["orders"];
  $products = $_POST["products"];
  $sqlupdate = "INSERT INTO `dsr` (`name`, `address`, `days`, `ordersdel`, `products`) 
    VALUES ('$name', '$address', '$days', '$orders', '$products')";
  $newresult = mysqli_query($connect, $sqlupdate);
  header("Refresh:0");
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/popup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>DSR</title>
  </head>

  <body class="bg-gray-800 text-white">
    <?php require "partitions/_navi.php" ?>

    <main class="h-screen w-screen flex-none" id="blur">
      <h1 class="pt-5 text-center text-4xl font-bold">DSR</h1>
      <div class="flex justify-center mt-4">
        <div class="flex w-96 rounded-md bg-white">
          <input type="search" name="search" id="search" placeholder="search"
            class="focus-outline-none w-full rounded-none bg-transparent py-1 outline-none text-black"
            style="text-align: center;" onkeyup="searchFun()" />
        </div>
      </div>
      <div class="pt-5 flex justify-center">
        <table width="60%" class=" table-fixed border-collapse border" id="myTable">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="">
              <td>
                <div class="mx-auto ml-4 h-28 w-24 pt-2"><img src="https://www.w3schools.com/howto/img_avatar.png"
                    class="" /></div>
              </td>
              <td class=" text-center text-3xl font-medium"><a
                  href="dsr_details.php?serial=<?php echo $row["serial"] ?>"><?php echo $row["name"] ?></a>
                <p style="font-size: medium;">Orders Delivered :
                  <?php echo $row["ordersdel"] ?>
                </p>
              </td>
              <td class="text-center text-2xl font-normal">TK.
                <?php echo $row["ordersdel"] * 300 ?>
              </td>
            </tr>
            <?php
          }
          ?>

        </table>
      </div>
      <div>
        <div class="flex justify-end mx-[365px]">
          <button class="mt-4 rounded-xl bg-gray-50 pb-2 pl-3 pr-3 pt-2 font-medium text-gray-800" id="popup-show">Add
            DSR</button>
        </div>
        <br>


      </div>

      <?php require "partitions/_footer.php" ?>

    </main>
    <div class="text-black">
      <div class="popup">
        <div class="close-btn">X</div>
        <form method="post" class="form" action="DSR.php">
          <h2>Add DSR</h2>
          <div class="form-element">
            <label for="name">DSR Name</label>
            <input type="text" name="name" placeholder="Enter Name" required>
          </div>
          <div class="form-element">
            <label for="address">Location</label>
            <input type="text" name="address" placeholder="Enter Location" required>
          </div>
          <div class="form-element">
            <label for="days">Days</label>
            <input type="text" name="days" placeholder="Enter Days" required>
          </div>
          <div class="form-element">
            <label for="order">Orders Delivered</label>
            <input type="text" name="orders" placeholder="Enter Number Of Orders Delivered" required>
          </div>
          <div class="form-element">
            <label for="products">Products</label>
            <input type="text" name="products" placeholder="Enter Products" required>
          </div>

          <div class="form-element">
            <button name="dsrAdd">Submit</button>
          </div>
        </form>
      </div>
    </div>
    </div>

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

      const searchFun = () => {
        let filter = document.getElementById('search').value.toUpperCase();
        let myTable = document.getElementById('myTable');

        let tr = myTable.getElementsByTagName('tr');

        for (var i = 0; i < tr.length; i++) {
          let td = tr[i].getElementsByTagName('td')[1];

          if (td) {
            let textValue = td.textContent || td.innerHTML;

            if (textValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }

        }
      }
    </script>

  </body>

</html>