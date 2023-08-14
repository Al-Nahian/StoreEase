<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php require "partitions/_navi.php" ?>
<div class="grid grid-cols-3 justify-items-center">
<div class="py-10 px-20">
    <a href="/orders.php">
        <div class="rounded-overflow-hidden shadow-lg max-w-xl">
        <img src="https://img.icons8.com/fluency/200/create-order.png" alt="create-order" class="w-full"/>
        
            <div class="px-6 py-6">
                <div class="font-bold text-xl mb-2">Take Orders</div>
            </div>
        </div>
    </a>
    </div>    


    <div class="justify-items-center">
        <?php require "partitions/_pbar.php" ?>
    </div>

    <div class="py-10 px-20">
        <a href="/receipts.php">
            <div class="rounded-overflow-hidden shadow-lg max-w-xl">
            <img src="https://img.icons8.com/dusk/200/receipt.png" alt="receipt" class="w-full"/>
                <div class="px-6 py-6">
                    <div class="font-bold text-xl mb-2">Send Receipts</div>
                </div>
            </div>
        </a>
    </div>
    
</div>

</body>
</html>