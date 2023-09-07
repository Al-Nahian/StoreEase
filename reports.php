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
    <link rel="stylesheet" href="styles/orderstyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DSR Details</title>
  </head>

  <body>
    <?php require 'partitions/_navi.php' ?>
    <main class="bg-slate-800 h-screen w-screen text-white pt-5">
      <h1 class="font-bold text-4xl text-center">Daily Report</h1>
      <div class="flex justify-center  pt-5">

        <ul class=" justify-center list-disc text-3xl font-serif">
          <a href="report-details.php?10-8-23">
            <li class="pt-2">Saturday, 10th JUNE, 2023</li>
          </a>
          <a href="report-details.php?11-8-23">
            <li class="pt-2">Sunday, 11th JUNE, 2023</li>
          </a>
          <a href="report-details.php?12-8-23">
            <li class="pt-2">Monday, 12th JUNE, 2023</li>
          </a>
          <a href="report-details.php?13-8-23">
            <li class="pt-2">Tuesday, 13th JUNE, 2023</li>
          </a>

        </ul>

    </main>

    <?php require 'partitions/_footer.php' ?>
  </body>

</html>