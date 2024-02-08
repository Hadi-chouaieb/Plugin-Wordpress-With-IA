<?php
require INNO_PATH . '/vendor/autoload.php';
// use Orhanerday\OpenAi\OpenAi;
use OpenAI\API\Completions;


function generateAi(){
    

    // $open_ai_key='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';
    // $open_ai = new OpenAi($open_ai_key); //this for the key of ia of user lmouhem ba3d tt7at fl data base 
    
    $model = $_POST["GptModel"];
    $temperature= $_POST["temperature"];
    $tokens = $_POST["tokens"];
    
    $topic = $_POST["topic"];
    
    $apiKey = "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";
    $client = new OpenAI(['api_key' => $apiKey]);
    try {
        // Make your OpenAI API request here
        $response = $client->create([
            'prompt' => $topic,
            'model' => $model, // Make sure $model is defined somewhere in your code
        ]);
    } catch (\OpenAI\Exception\ApiError $e) {
        // Handle API error here, e.g., retry or log
        echo "OpenAI API returned an API Error: " . $e->getMessage();
    } catch (\OpenAI\Exception\ApiConnectionError $e) {
        // Handle connection error here
        echo "Failed to connect to OpenAI API: " . $e->getMessage();
    } catch (\OpenAI\Exception\RateLimitError $e) {
        // Handle rate limit error (we recommend using exponential backoff)
        echo "OpenAI API request exceeded rate limit: " . $e->getMessage();
    }
    








    // $complete = $open_ai -> completion([
    //     'model' => $model,
    //     "prompt"=> $topic,
    //     "temperature" =>$temperature,
    //     "max_tokens" =>$tokens,
    //     "frequency_penalty"=>0, 
    //     "persence_penatlty"=>0.6,
        
    
    
    
    // ]);
    

    // var_dump($complete);
    // $response  = json_decode($complete,true);
    
    // $response = $response["error"]["message"];
    // return $response ;
    
    
    }
    







?>
