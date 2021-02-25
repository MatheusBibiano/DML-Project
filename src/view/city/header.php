<header>
  <div id="nav-container">
    <nav class="navbar navbar-expand-lg">
      <div class="logo-container">
        <a href="http://www.nepomuceno.cefetmg.br/" target="_blank">
          <img src="../../../assets/img/logo.png" alt="Logo CEFET" class="logo" />
        </a>
        
        <?php

        $city_name = $_POST['city_name'];
        $id_city = $_POST['id_city'];
        $_SESSION['current_city'] = $id_city;

        echo "
        <h1 class='title'>" . $city_name . "</h1>
        ";

        ?>

      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbar-links"
        aria-controls="navbar-links"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span><i class="fa fa-navicon"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-links">
        <a href="#mort" class="nav-options">Mortalidade</a>
      </div>
    </nav>
  </div>
</header>
