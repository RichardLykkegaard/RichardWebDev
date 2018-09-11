
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="http://localhost/Richard-Home/home.php">Richard L. Guldbrandsen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Richard-Home/home.php">Home <span class="sr-only">(current)</span></a>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Richard-Home/about.php">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Richard-Home/contact.php">Contact<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Work
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/Richard-Home/HTML.php">HTML</a>
          <a class="dropdown-item" href="http://localhost/Richard-Home/CSS.php">CSS</a>
          <a class="dropdown-item" href="http://localhost/Richard-Home/PHP.php">PHP</a>
          <a class="dropdown-item" href="http://localhost/Richard-Home/Bootstrap.php">Bootstrap</a>
        </div>
      </li>
      <?php
            if (AUTH==false):
            ?>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Richard-Home/login.php">Login<span class="sr-only">(current)</span></a>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="http://localhost/Richard-Home/register.php">Register<span class="sr-only">(current)</span></a>
      </li>
      <?php
            endif;
            ?>
      <?php
            if (AUTH):
            ?>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/Richard-Home/logout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
      <?php
            endif;
            ?>

    </ul>
    </div>
    </div>
</nav>