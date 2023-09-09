<div class="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6">
  <div class="flex flex-1 justify-between sm:hidden">
    <a href="#"
      class="relative inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
    <a href="#"
      class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
  </div>
  <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
    <div>
      <p class="text-sm text-gray-400">
        Showing
        <span class="font-medium">
          <?php if (isset($_GET['page'])) {
            echo $page + 1 ?>
          </span>
          <?php
          } else {
            echo 1 ?>
          <?php
          }
          ?>
        of
        <span class="font-medium">
          <?php echo $pages ?>
        </span>
        pages
      </p>
    </div>
    <div>
      <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
        <?php
        if (isset($_GET['page']) && $_GET['page'] > 1) {
          ?> <a href="?page=<?php echo $_GET['page'] - 1 ?>"
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-500 hover:decoration-transparent hover:text-black focus:z-20 focus:outline-offset-0">Previous</a>
          <?php
        } else {
          ?> <a
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold cursor-not-allowed text-black ring-1 ring-inset ring-gray-300">Previous</a>
          <?php
        }
        for ($i=0; $i < $pages; $i++) { 
            $j = $i +1;
            ?>
            <a href="?page=<?php echo $i+1?>"
          class="relative inline-flex items-center px-4 py-2 text-sm font-semibold <?php if (isset($_GET['page']) && $_GET['page'] == $j ) { ?>
            text-black bg-gray-50 ring-1 ring-inset hover:text-black hover:decoration-transparent ring-gray-300"><?php echo $j ?></a>
          <?php }else { ?>
            text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-500 hover:decoration-transparent hover:text-black focus:z-20 focus:outline-offset-0"><?php echo $j ?></a>
         <?php } ?>
        <?php
        }
        ?>

        <?php
        if (!isset($_GET['page'])) {
          ?> <a
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 ring-1 ring-inset ring-gray-300">Next</a>
          <?php
        } else {
          if ($_GET['page'] >= $pages) {
            ?>
            <a
              class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-black cursor-not-allowed ring-1 ring-inset ring-gray-300">Next</a>
            <?php
          } else {
            ?>
            <a href="?page=<?php echo $_GET['page'] + 1 ?>"
              class="relative inline-flex items-center px-4 py-2 text-sm font-semibold hover:decoration-transparent text-gray-500 ring-1 ring-inset ring-gray-300 hover:bg-gray-500 hover:text-black focus:z-20 focus:outline-offset-0">Next</a>
            <?php
          }
        }

        ?>
      </nav>
    </div>
  </div>
</div>