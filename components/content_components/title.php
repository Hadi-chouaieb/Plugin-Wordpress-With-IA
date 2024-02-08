<?php
if(!(isset($response))){
    $response="";
}
?>
<div class="card col-12">
            <div class="h3 text-center">Title</div>

            <div class="col-12">
                <input type="text" class="form-control" />
            </div>
            <!-- sections -->
            <div class="row mt-3">
                <div class="h5 col-md-3 col-sm-12">Sections</div>

                <div class="col-md-3 col-sm-6">
                    <select class="form-control" name="nbSect">

                        <option value="2" default>2</option>
                        <option value="3">3</option>
                        <option value="6">6</option>
                        <option value="10">10</option>
                        <option value="10">10</option>

                    </select>
                </div>

                <div class="col-md-6 col-sm-6">
                    <button type="button" class="btn text-light btn-dark col-12" id="btn5"
                        onclick="start_loder(this.id)">
                        Generate-section
                    </button>
                </div>

            </div>

            <div class="col-12 mt-4">
                <textarea name="Section" id="" rows="5" class="form-control col-12"><?php echo $response;?></textarea>
                <p class="text-secondary description">
                    Add, rewrite, remove, or reorganize those sections as you wish before
                    (re)clicking on "Generate Content". Markdown format is recommended.
                </p>
            </div>

            <!-- Content -->
            <div class="row mt-3">
                <div class="h5 col-md-3 col-sm-12">Content</div>

                <div class="col-md-3 col-sm-6">
                    <select class="form-control" name="nbContent">

                        <option value="2" default>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6">
                    <button id='btn2' type="submit" class="btn text-light btn-dark col-12"
                        onclick="start_loder(this.id)">
                        Generate-Content
                    </button>
                </div>
            </div>

            <div class="col-12 mt-4">
                <textarea name="Content" id="" rows="5" class="form-control"></textarea>
                <p class="text-secondary description">
                    Add, rewrite, remove, or reorganize those sections as you wish before
                    (re)clicking on "Generate Content". Markdown format is recommended.
                </p>
            </div>

            <!-- expert -->

            <div class="row mt-3">
                <div class="h4 col-md-6 col-sm-12">Excerpt</div>

                <div class="col-md-6 col-sm-12">
                    <button id="btn3" type="submit" class="btn text-light btn-dark col-12"
                        onclick="start_loder(this.id)">
                        Generate-Excerpt
                    </button>
                </div>
            </div>

            <div class="col-12 mt-4">
                <textarea name="topic" id="" cols="57" rows="5" class="form-control"></textarea>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <select class=" from-control selectType col-12" name="typePost">
                        <option value="Post" default>Post
                        </option>
                        <option value="Pages">Pages</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <button class="btn text-light btn-dark col-12 " id="btn4" onclick="start_loder(this.id)">
                    Create Post
                </button>
            </div>
        </div>