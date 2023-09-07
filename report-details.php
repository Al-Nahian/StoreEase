<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>

  <body class="h-screen w-screen">
    <?php require 'partitions/_navi.php' ?>
    <main class="bg-slate-800 h-screen w-screen text-white pt-5">
      <h1 class="font-bold text-4xl text-center">Daily Report</h1>
      <div class="flex justify-center  pt-5">
        <table width="80%" class="table-fixed border-collapse border ">

          <tr class="">

            <td rowspan="2"><img class="rounded-full h-28 mx-12 my-3"
                src="https://www.w3schools.com/howto/img_avatar.png"></td>

            <td>
              <p style="font-size: x-large; padding-bottom: 1.25rem">Mr. Faridul Islam</p>
              <p style="font-size: small;">Orders Completed : 136/150</p>
            </td>

            <td rowspan="2" class=" text-center">40800 TK</td>
          </tr>
          <tr></tr>
          <tr>
            <div class="">
              <td rowspan="2"><img class="rounded-full h-28 mx-12 my-3"
                  src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="" </td>
            </div>

            <td>
              <p style="font-size: x-large; padding-bottom: 1.25rem">Mr. Arab Ali</p>
              <p style="font-size: small;">Orders Completed : 257/300</p>
            </td>

            <td rowspan="2" class=" text-center">77100 TK</td>
          </tr>
          <tr></tr>
          <tr>
            <div class="">
              <td rowspan="2"><img class="rounded-full h-28 mx-12 my-3"
                  src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="" </td>
            </div>

            <td>
              <p style="font-size: x-large; padding-bottom: 1.25rem">Mr. Nazrul Islam</p>
              <p style="font-size: small;">Orders Completed : 121/150</p>
            </td>

            <td rowspan="2" class=" text-center">36300 TK</td>
          </tr>
          <tr></tr>
          <tr>
            <div class="">
              <td rowspan="2"><img class="rounded-full h-28 mx-12 my-3"
                  src="https://www.w3schools.com/howto/img_avatar.png" alt="" srcset="" </td>
            </div>

            <td>
              <p style="font-size: x-large; padding-bottom: 1.25rem">Mr. Raton Miah</p>
              <p style="font-size: small;">Orders Completed : 340/350</p>
            </td>

            <td rowspan="2" class=" text-center">102000 TK</td>
          </tr>
        </table>
      </div>
      <div class="font-serif flex text-3xl container mx-60 pt-3 ">Total=
        <p class="mx-auto mr-64 flex font-normal shadow-md">256,200 TK.
        </p>
      </div>
    </main>
    <?php require 'partitions/_footer.php' ?>
  </body>

</html>