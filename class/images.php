<?php

    ?>
    
<div class="container">
    <?php
    include(INNO_PATH . "/components/navbar/navbar.php");
    $nbim=0;
    if(isset($_POST["nbimage"])){
        $nbim=$_POST["nbimage"];
    }

    ?>
</div>
<form action="#" method="post">
<div class="container">
<div class="row Dashcard ">
    <div class=" col-md-8 col-sm-12 card mt-3">
        <div class="progress mb-4">
            <div class="progress-bar bg-warning" style="width:10%">0/10</div>
        </div>
        
        <div class="row">
            
            <div class="col-md-6 col-sm-12">
                <select name="nbimage" id="" class="col-6">
                <option value="1">1 image</option>
                <option value="2">2 image</option>
                <option value="3">3 image</option>
                <option value="4">4 image</option>
                <option value="5">5 image</option>
                <option value="6">6 image</option>
                <option value="7">7 image</option>
                <option value="8">8 image</option>
                <option value="9">9 image</option>
                <option value="10">10 image</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark col-4"  onclick="start_loder(this.id)" >Generate</button>
        </div>

        <textarea name="" id="" cols="30" rows="10"></textarea>

    </div>
    <div class="col-md-4 col-sm-12 Dashcard">
        <div class="card">
            <h3>Template</h3>
            <div class="row">
                <div class="col-12">
                    <label for="">Enviroment</label>
                    <select class="col-12" name="">
                        <option value="none">none</option>
                        <option value="openAI">OpenAI</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="">Model</label>
                    <select name="" class="col-12" id="">
                        <option value="DALL-E 2">DALL-E 2</option>
                        <option value="DALL-E 3">DALL-E 3</option>
                        <option value="DALL-E 3">DALL-E 3(HD)</option>
                    </select>
                </div>
        </div>
        </div>
     
    </div>


</div>
</div>
</form>
<!-- fro show ruselt of the ai  -->
<div class="d-flex justify-content-center"> 
<div class="Dashcard container card  col-md-8 col-sm-12 p-5">
    <div class=" Dashcard row d-flex justify-content-center">
        <?php for($i = 1;$i<= $nbim;$i++){?>
        <div class="col-4 card m-1">
            <img src="https://news.ubc.ca/wp-content/uploads/2023/08/AdobeStock_559145847.jpeg" alt="" srcset="">
        </div>
        <?php } ?>
    </div>
    
</div>
</div>

<div class="overlay" id="overlay"></div>

<div class="popup col-md-4 col-sm-4" id="popup">
    <div class="popup-content row ">
    <div class="col-12"><span class="loader ">Load&nbsp;ng</span></div>
        <span></span>
        
    </div>
</div>