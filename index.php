
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    
    <title>StoreEase</title>
  </head>
  <body>

    <?php require 'partitions/_nav.php' ?>

    <section>

      <div class="imgBox">
        <img src="img/bg.jpg" alt="Truck parked at a garage">
        <div class="text">
          <p>No. 1 Distributing App of Bangladesh!</p>
        </div>
      </div>

      <div class="contentBox">
        <div class="formBox">
          <h2>Welcome to StoreEase</h2>

            <div class="column">
                <div class="row-sm-2">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <p class="card-text">Login to StoreEase if you are already an existing member.</p>
                        <a href="login.php" class="btn btn-primary">Login</a>
                    </div>
                    </div>
                </div>
                <div class="row-sm-2">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Signup</h5>
                        <p class="card-text">Signup to the first distributor app of Bangladesh and make your life easier.</p>
                        <a href="signup.php" class="btn btn-primary">Signup</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </form>
      </div>
    </section>
        
    <!-- Footer -->
    <?php require 'partitions/_footer.php' ?>
  </body>
</html>