        <!-- Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Spear of Adun Warp Tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php if($_SERVER["PHP_SELF"]=="browse.php"){echo '<li class="nav-item active">';} else {echo '<li class="nav-item">';} ?>
              <a class="nav-link" href="browse.php">Select Units <span class="sr-only">(current)</span></a>
            </li>
            <?php if($_SERVER["PHP_SELF"]=="viewcart.php"){echo '<li class="nav-item active">';} else {echo '<li class="nav-item">';} ?>
              <a class="nav-link" href="viewcart.php">Shopping Cart</a>
            </li>
          </ul>
        </div>
    </div>
</nav>