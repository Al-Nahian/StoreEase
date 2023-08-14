<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

    <?php require '../partitions/_nav.php' ?>
    <link rel="stylesheet" href="styles/login.css">
    <section>

      <div class="imgBox">
        <img src="https://pixabay.com/get/gc3692cfa8f3f9cef577ab95f9915cea3d41b7b68f11bb9ad38ac98ee0a32f316aa56563c27327f301b10ce0ecc12ba21.jpg" alt="Truck parked at a garage">
      </div>
  
      <div class="contentBox">
        <div class="formBox">
          <h2 class="text-center">Login to StoreEase</h2>
          <form role="form" class="form-horizontal">

            <div class="inputBox">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="inputBox">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="remember">
              <label style="display: flex;
              flex-direction: row;
              align-items: center;
              font-size: 14">
                <input type="checkbox" for="remember me">Remember me</label>
              </label>
            </div>

            <div class="submit">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            <div class="createAcc">
            <label>
                  <p>Don't have an account? <a href="/rev/signup.php">Create one.</a> </p>
              </label>
            </div>
        </div>
        </form>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>