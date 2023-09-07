<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: login.php");
}
require "partitions/_dbconnect.php";

if (isset($_GET['serial'])) {
    $serial = $_GET['serial'];
}

$sql = "SELECT * FROM inventory WHERE `serial` = $serial";
$result = mysqli_query($connect, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["product-name"];
    $rate = $_POST["rate"];
    $stock = $_POST["stock"];
    $sqlupdate = "UPDATE `inventory` SET `product-name`='$name', `rate`='$rate', `Stock`='$stock' WHERE `serial`= $serial";
    $updateresult = mysqli_query($connect, $sqlupdate);
    header("location:inventory.php");
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
    </head>

    <body class="h-screen w-screen">

        <!-- Nav Bar -->
        <?php require 'partitions/_navi.php' ?>

        <main class="h-screen w-screen bg-slate-800 pt-5 text-white">
            <h1 class="text-center text-4xl font-bold">Edit Item</h1>
            <div class="flex justify-center pt-5">
                <form method="POST">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Product Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    type="text" name="product-name" value="<?php echo $row["product-name"] ?>" required>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Product Rate
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" id="rate" name="rate" value="<?php echo $row["rate"] ?>" required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">

                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                                    for="grid-city">
                                    Items in Stock
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-6 leading-tight focus:outline-none focus:bg-white"
                                    type="text" id="stock" name="stock" value="<?php echo $row["Stock"] ?>" required>
                            </div>
                            <?php
                    }
                    ?>
                        <div class="md:flex md:items-center">
                            <div class="items-center">
                                <button
                                    class="shadow-md bg-blue-600 hover:bg-gray-50 focus:shadow-outline focus:outline-none text-white hover:text-black text-center font-bold py-2 px-5 rounded-xl"
                                    name="updateitem" type="submit">
                                    Confirm
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <!-- FOOTER -->
        <?php require 'partitions/_footer.php' ?>
    </body>

</html>