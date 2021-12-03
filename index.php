<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php
require("./pages/layouts/head.php");
?>

<body>
  <div id="root">
    <div id="app">
      <div class="container elibs-header">
        <?php
        require('./pages/layouts/navbar.php');
        ?>
      </div>
      <div class="elibs-content text-white">
        <div class="container">
          <div class="row">
            <!-- All Books -->
            <?php
            require("./pages/layouts/books/book.php");
            ?>
            <!-- All Users -->
            <div class="col-md-4 col-sm-12">
              <div class="container elibs-ele my-2 rounded">
                Users
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ELibS Content -->
      <!-- Contact Us -->
      <div class="container elibs-ele text-white py-1 my-3 rounded">
        <?php
        require("./pages/layouts/contactus.php");
        ?>
      </div>
      <!-- ELibsS Footer -->
      <footer>
      </footer>
      <!-- Copyright -->
      <?php
      require("./pages/layouts/copyright.php");
      ?>
    </div>
  </div>
  <?php
  require("./pages/layouts/scripts.php");
  ?>
</body>

</html>