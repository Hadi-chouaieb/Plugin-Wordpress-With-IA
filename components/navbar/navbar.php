


<nav class="navbar navbar-expand-sm navbar-dark container mt-4 " >
  <div class="container-fluid d-flex justify-content-around align-items-center">
    <!-- Left side (innovIA360 and logo) -->
    <ul class="navbar-nav col-md-6 col-sm-12">
      <li class="nav-item">
        <div class="innovi" id="inologo">
          <?php
            $logoPath = INNO_PATH . "/assets/image/innovialogo.php";
            include($logoPath);
          ?>
        </div>
      </li>
      <li class="nav-item">
        <a href="<?php echo admin_url('admin.php?page=innovia_dashboard'); ?>">
          <div class="text-light tit align-middle">innovIA360</div>
        </a>
      </li>
    </ul>

    <!-- Right side (Content, Images, Playground) -->
    <ul class="navbar-nav col-md-6">
      <div class="row">
        <li class="nav-item col-4">
          <a href="<?php echo admin_url('admin.php?page=innovia360_content'); ?>">
            <div class="text-light align-middle cc1">Content</div>
          </a>
        </li>
        <li class="nav-item col-4">
          <a href="<?php echo admin_url('admin.php?page=innovia360_images'); ?>">
            <div class="text-light align-middle cc1">Images</div>
          </a>
        </li>
        <li class="nav-item col-4">
          <a href="<?php echo admin_url('admin.php?page=innovia360_playground'); ?>">
            <div class="text-light align-middle cc1">Playground</div>
          </a>
        </li>
      </div>
    </ul>
  </div>
</nav>


