
<div class="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6">
  <div class="flex flex-1 justify-between sm:hidden">
    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
  </div>
  <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
    <div>
      <p class="text-sm text-gray-400">
        Showing
        <span class="font-medium"><?php if (isset($_GET['page'])) {
            echo $page+1 ?></span>
            <?php
        } else {
            echo 1 ?>
            <?php
        }
        ?>
        of
        <span class="font-medium"><?php echo $pages ?></span>
        pages
      </p>
    </div>
    <div>
      <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
        <?php
            if (isset($_GET['page']) && $_GET['page']>1) {
                ?> <a href="?page=<?php echo $_GET['page'] - 1?>" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">Previous</a><?php
            } else {
                ?> <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300">Previous</a>
            <?php
            }
            
        ?>
        <a href="?page=1" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">1</a>
        <a href="?page=2" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
        <a href="?page=3" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
        <a href="?page=4" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">4</a>
        <a href="?page=5" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">5</a>
        <?php 
            if ($rows_per_page == 5) {
                ?>
                <a href="?page=6" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">6</a>
                <a href="?page=7" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">7</a>
                <a href="?page=8" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">8</a>
                <a href="?page=9" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                <?php
            } 
        ?>
      
        <?php
            if (!isset($_GET['page'])) {
                ?> <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300">Next</a>
                <?php
            } else {
                if ($_GET['page'] >= $pages) {
                    ?> 
                    <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300">Next</a>
                    <?php
                } else {
                    ?>
                    <a href="?page=<?php echo $_GET['page'] + 1?>" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">Next</a>
                    <?php
                }
            }
            
        ?>
      </nav>
    </div>
  </div>
</div>