<?php
    if(isset($_POST["topicGen"])){
        $response=generateAi();
    }

?>

<div class="row">
            <div class="card container text-center">

                    <div class="h3 text-center">Topic</div>
                    <div class="">
                        <textarea name="topic" id="" cols="20" rows="5" class="form-control"></textarea>
                        <div class="row">
                            <div class="col-12 text-center mt-2">
                                <button name="topicGen" id='bt1' type="submit" class="btn text-light btn-dark col-12 "
                                    onclick="start_loder(this.id)">
                                    Generate
                                    
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>