
<?php
 wp_enqueue_style('my-plugin-styles', plugins_url('assets/css/bootstrap.css', __FILE__), array(), '1.0.0', 'all');
?>

    
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Post Params
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="col-12">
                    <select class="form-control" name="postparams">
                        <option value="Articles">Articles</option>
                        <option value="Pages">Pages</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Model Params
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="row">
                    <label for="" class="text-start">Environment:</label>
                <select class="form-control" name="nbContent">
                        <option value="2" default>OpenAi</option>
                        <option value="3">None</option>

                    </select>
                </div>
            
                <div class="row mt-1">
                    <label for="" class="text-start">Model:</label>
                    <select class="form-control" name="GptModel">
                        <option value="gpt-3.5-turbo" default>gpt-3.5-turbo</option>
                        <option value="gpt-3.5-turbo-1106">gpt-3.5-turbo-1106</option>
                        <option value="GPT-4 32K">GPT-4 32K</option>
                        <option value="gpt-3.5-turbo-0301">gpt-3.5-turbo-0301</option>
                        <option value="gpt-3.5-turbo-0613">gpt-3.5-turbo-0613</option>
                        <option value="gpt-3.5-turbo">gpt-3.5-turbo</option>
                        <option value="gpt-3.5-turbo-instruct">gpt-3.5-turbo-instruct</option>
                        <option value="gpt-3.5-turbo-0613">gpt-3.5-turbo-0613 <span class="badge bg-danger">legacy</span></option>
                    </select>
                    <span class="description">it is recommended to use Turbo or GPT-4 write textes</span>

                </div>
                <div class="row">
                    <label class="text-start ">Temperature:</label>

                        <input type="number" class="form-control" step="0.1" value="0.6" name="temperature">
                        <span class="description">Between 0 and 1. Higher values means the model will take more risks.</span>

                </div>

                <div class="row">
                    <label class="text-start ">Max Tokens:</label>

                        <input type="number" class="form-control" value="2048" step="1" max="2048" name="tokens">
                        <span class="description">The maximum number of tokens to generate. The model will stop generating once it hits this limit.</span>

                </div>
               

            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Prompts
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-12">
                        <p class="description">Prompts represent the exact request sent to the AI. The variables between
                            curly braces will be replaced by the content of the corresponding field. Prompts are saved
                            in your templates.</p>
                        <label>
                            Prompt for Title
                        </label>
                        <textarea name="" id="titelPrompt" rows="5" class="col-12"></textarea>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Prompt for Sections</label>
                        <textarea name="" id="sectionPrompt" rows="5" class="col-12"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="">Prompt for Content</label>
                        <textarea name="" id="contentPrompt" rows="5" class="col-12"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Prompt for Excerpt</label>
                        <textarea name="" id="excerptPrompt" rows="5" class="col-12"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

