<div class="row">
  <div class="col-md-12 col-sm-12">
    <?php include_once(INNO_PATH."/components/navbar/navbar.php"); ?>
  </div>
</div>

<div class="navPrincipale">
  <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#home">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Chatbots</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#menu2">Settings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#menu3">License</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
    <div class="container mt-4">
      <?php include(INNO_PATH."/components/settings_components/dashboard.php"); ?>
    </div>
  </div>

  <div class="tab-pane container fade Dashcard" id="menu1"  >
    <!-- Content for Menu 1 tab goes here -->
    <?php include(INNO_PATH."/components/settings_components/chatbot.php"); ?>
  </div>

  <div class="tab-pane container fade Dashcard" id="menu2">
    <!-- Content for Menu 2 tab goes here -->
    <?php include(INNO_PATH."/components/settings_components/settings.php"); ?>

  </div>

  <div class="tab-pane container fade Dashcard" id="menu3">
    <!-- Content for Menu 2 tab goes here -->
    <span class="loader text-dark">Loading</span>
  </div>
</div>
</div>

