<?php?>
<div class="row">
    <div class="col-6 mt-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Chatbot
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="col-6">
                            <label for=""><b>Model:</b></label>
                            <select class="form-control col-12" name="postparams">
                                <option value="Articles">Chat</option>
                                <option value="Pages">Images</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for=""><b>Context:</b></label>
                            <textarea class="col-12" name="" id="" rows="10">Converse as if you were an AI assistant. Be friendly, creative.</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Ai Model 
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
                                <option value="gpt-4-1106-preview" default>GPT-4 Turbo</option>
                                <option value="gpt-4">GPT-4</option>
                                <option value="GPT-4 32K">GPT-4 32K</option>
                                <option value="gpt-3.5-turbo-0301">gpt-3.5-turbo-0301</option>
                                <option value="gpt-3.5-turbo-0613">gpt-3.5-turbo-0613</option>
                                <option value="gpt-3.5-turbo">gpt-3.5-turbo</option>
                                <option value="gpt-3.5-turbo-instruct">
                                    gpt-3.5-turbo-instruct
                                </option>
                                <option value="gpt-3.5-turbo-0613">
                                    gpt-3.5-turbo-0613 <span class="badge bg-danger">legacy</span>
                                </option>
                            </select>
                            <span class="description">it is recommended to use Turbo or GPT-4 write textes</span>
                        </div>
                        <div class="row">
                            <label class="text-start">Temperature:</label>

                            <input type="number" class="form-control" step="0.1" value="0.6" name="temperature" />
                            <span class="description">Between 0 and 1. Higher values means the model will take more
                                risks.</span>
                        </div>

                        <div class="row">
                            <label class="text-start">Max Tokens:</label>

                            <input type="number" class="form-control" value="2048" step="1" max="2048" name="tokens" />
                            <span class="description">The maximum number of tokens to generate. The model will stop
                                generating once it hits this limit.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Thresholds
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="row">
                            
                            <div class="col-4"><label for="">Input Max Length:</label><input class="col-12" type="number" value="512" class="form-control"></div>
                            
                            <div class="col-4"><label for="">Max Messages:</label><input class="col-12" type="number" value="15" class="form-control"></div>
                            
                            <div class="col-4"><label for="">Content Max Length:</label><input class="col-12" type="number" value="4096" class="form-control"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
            <?php include(INNO_PATH."/components/settings_components/chat.php");?>
        </div>
</div>
