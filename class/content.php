<?php

    ?>
    
<div class="container">
    <?php
    include(INNO_PATH . "/components/navbar/navbar.php");

    ?>
</div>
<form action="<?php echo ''?>" method="post">
<div class="row container mt-5 all">
    <div class="col-md-3 col-sm-12">
        <!-- topic row  -->
            <?php include(INNO_PATH ."/components/content_components/topic.php");?>
        <!-- tempates row -->

        <!-- <div class="row">
            <div class="card container text-center">
                <div class="h3 text-center">Templates</div>
            </div>
        </div> -->
    </div>

    <!-- this for title and sections and content -->

    <div class="col-md-6 col-sm-12">
        <?php include(INNO_PATH ."/components/content_components/title.php");?>
    </div>

    <div class="col-md-3 col-sm-12">
            <?php include(INNO_PATH."/components/content_components/content_params.php")?>
        <!-- post params -->
        <div class="row">
            <div class="card">
                <?php
                include(INNO_PATH ."/components/content_components/other_params.php");
                ?>
            </div>
        </div>
        <div class="row">
            <?php include(INNO_PATH ."/components/content_components/usage_costs.php"); ?>
        </div>
    </div>
</div>






</form>
<div class="overlay" id="overlay"></div>

<div class="popup col-md-4 col-sm-4" id="popup">
    <div class="popup-content row ">
    <div class="col-12"><span class="loader ">Load&nbsp;ng</span></div>
        <span></span>
        
    </div>
</div>
<?php

