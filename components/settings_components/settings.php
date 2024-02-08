<?php
?>
<div class="row">
  <div class="col-6 Dashcard">
    <div class="card">
      <h3>Enviroments for AI</h3>
      <table class="table">
        <tr>
          <td class="text-primary"><b>Name</b></td>
          <td><input type="text" class="form-control" /></td>
        </tr>
        <tr>
          <td class="text-primary"><b>Type</b></td>
          <td>
            <select name="" id="" class="col-12">
              <option value="openAI">OpenAi</option>
              <option value="Azure">Azure(openAi)</option>
              <option value="OpenRouter">OpenRouter</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="text-primary"><b>API Key</b></td>
          <td><input type="text" class="form-control" /></td>
          <td><span></span></td>
        </tr>
      </table>
    </div>
  </div>

  <!-- other here -->
  <div class="col-4 Dashcard">
    <div class="card">
      <h3>General</h3>
      <table class="table">
        <tr>
          <td class="col-6">streaming</td>
          <td class="col-6"><input type="checkbox" name="" id=""></td>
        </tr>
      </table>
      <h3>User Interface</h3>
      <table class="table">
        <tr>
          <td class="col-6">intro Message</td>
          <td class="col-6"><input type="checkbox" name="" id=""></td>
        </tr>
      </table>
      </table>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-6 Dashcard">
    <div class="card">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs col-12">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Default</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab3">Images</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab4">Embeddings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab5">Audio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab6">Json</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane container active" id="tab1">

          <table class="table">
            <tr>
              <td><b>Environment:</b></td>
              <td>
                <select name="" id="" class="col-12">
                  <option value="openAI">OpenAi</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Model:</b></td>
              <td>
                <select class="form-control col-12" name="GptModel">
                  <option value="gpt-4-1106-preview" default>
                    GPT-4 Turbo
                  </option>
                  <option value="gpt-4">GPT-4</option>
                  <option value="GPT-4 32K">GPT-4 32K</option>
                  <option value="gpt-3.5-turbo-0301">
                    gpt-3.5-turbo-0301
                  </option>
                  <option value="gpt-3.5-turbo-0613">
                    gpt-3.5-turbo-0613
                  </option>
                  <option value="gpt-3.5-turbo">gpt-3.5-turbo</option>
                  <option value="gpt-3.5-turbo-instruct">
                    gpt-3.5-turbo-instruct
                  </option>
                  <option value="gpt-3.5-turbo-0613">
                    gpt-3.5-turbo-0613
                    <span class="badge bg-danger">legacy</span>
                  </option>
                </select>
              </td>
            </tr>
          </table>

        </div>

        <div class="tab-pane container fade" id="tab3">
          <table class="table">
            <tr>
              <td><b>Environment:</b></td>
              <td>
                <select name="" id="" class="col-12">
                  <option value="openAI">OpenAi</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Model:</b></td>
              <td>
                <select class="form-control col-12" name="GptModel">
                  <option value="DALL-E 2" default>DALL-E2</option>
                  <option value="DALL-E 3">GPT-4</option>
                  <option value="DALL-E 3(HD)">GPT-4 32K</option>
                </select>
              </td>
            </tr>
          </table>
        </div>

        <div class="tab-pane container fade" id="tab4">
          <table class="table">
            <tr>
              <td><b>Environment:</b></td>
              <td>
                <select name="" id="" class="col-12">
                  <option value="openAI">OpenAi</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Model:</b></td>
              <td>
                <select class="form-control col-12" name="GptModel">
                  <option value="DALL-E 2" default>Embedding Ada-002</option>
                </select>
              </td>
            </tr>
          </table>
        </div>

        <div class="tab-pane container fade" id="tab5">
          <table class="table">
            <tr>
              <td><b>Environment:</b></td>
              <td>
                <select name="" id="" class="col-12">
                  <option value="openAI">OpenAi</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Model:</b></td>
              <td>
                <select class="form-control col-12" name="GptModel">
                  <option value="DALL-E 2" default>whisper</option>
                </select>
              </td>
            </tr>
          </table>
        </div>

        <div class="tab-pane container fade" id="tab6">
          <table class="table">
            <tr>
              <td><b>Environment:</b></td>
              <td>
                <select name="" id="" class="col-12">
                  <option value="openAI">OpenAi</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><b>Model:</b></td>
              <td>
                <select class="form-control col-12" name="GptModel">
                  <option value="DALL-E 2" default>GPT-4 Turbo</option>
                  <option value="GPT-4 Turbo with vision">
                    GPT4 Turbo with version
                  </option>
                </select>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-4 Dashcard">
    <div class="card">
      <h3>Chatbot</h3>
      <table class="table">
        <tr>
          <td class="col-6">Discussions</td>
          <td class="col-6"><input type="checkbox" name="" id=""></td>
        </tr>
        <tr>
          <td class="col-6">Syntax Highlight</td>
          <td class="col-6"><input type="checkbox" name="" id=""></td>
        </tr>
        <tr>
          <td class="col-6">Web Speech API</td>
          <td class="col-6"><input type="checkbox" name="" id=""></td>
        </tr>
      </table>
    </div>

    <div class="card">
      <h3>Images</h3>
      <p><b>User Upload</b></p>
      <table class="table">
        <tr>
          <td class="col-6">Local Upload</td>
          <td class="col-6"><select name="" id="">
              <option value="">FileSystem</option>
              <option value="">Media Library</option>
            </select></td>
        </tr>
        <tr>
          <td class="col-6">Remote Highlight</td>
          <td class="col-6"><select name="" id="">
              <option value="">Upload Data</option>
              <option value="">Share URLs</option>
            </select></td>
        </tr>
        <tr>
          <td class="col-6">Expiration</td>
          <td class="col-6"><select name="" id="">
              <option value="">1 hour</option>
              <option value="">6 hours</option>
              <option value="">1 day</option>
              <option value="">1 week</option>
              <option value="">1 month</option>
              <option value="">never</option>
            </select></td>
        </tr>
      </table>
      <p><b>AI Generated</b></p>
      <table class="table">
        <tr>
          <td class="col-6">Local Download</td>
          <td class="col-6"><select name="" id="">
              <option value="">FileSystem</option>
              <option value="">Media Library</option>
            </select></td>
        </tr>
        <tr>
          <td class="col-6">Expiration</td>
          <td class="col-6"><select name="" id="">
              <option value="">1 hour</option>
              <option value="">6 hours</option>
              <option value="">1 day</option>
              <option value="">1 week</option>
              <option value="">1 month</option>
              <option value="">never</option>
            </select></td>
        </tr>
      </table>
    </div>

    <div class="card Dashcard">
      <h3>Admin Tools</h3>
      <p><b>Admin Bar</b></p>
      <table class="table">
        <tr>
          <td class="col-6">InnovIA</td>
          <td class="col-2"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
        <tr>
          <td class="col-6">Playground</td>
          <td class="col-2"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
        <tr>
          <td class="col-6">Generated Content</td>
          <td class="col-1"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
        <tr>
          <td class="col-6">Generated Images</td>
          <td class="col-1"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
      </table>
    </div>

    <div class="card Dashcard ">
      <h3>Advanced</h3>
      <table class="table">

        <tr class='row'>
          
          <td class="col-6">Content max Length</td>
          
          <td class="col-6 container"><input type="text" name="" id=""></td>
          
        </tr>
        <tr>
          <td class="col-6">Shortcodes</td>
          <td class="col-1"><input type="checkbox" name="" id=""></td>
          <td class="col-4">Resolve</td>
        </tr>
        <tr>
          <td class="col-6">Public API</td>
          <td class="col-2"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
        <tr>
          <td class="col-6">Dev Tools</td>
          <td class="col-2"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
        <tr>
          <td class="col-6">Plugin Data</td>
          <td class="col-2"><input type="checkbox" name="" id=""></td>
          <td class="col-4">Delete</td>
        </tr>
      </table>
    </div>

    <div class="card Dashcard">
      <h3>Security</h3>
      <table class="table">
        <tr>
          <td class="col-6">Banned Words</td>
          <td class="col-6"><input type="text" name="" id=""></td>
        </tr>
        <tr>
          <td class="col-6">Banned IPs</td>
          <td class="col-6"><input type="text" name="" id=""></td>
        </tr>
      </table>
    </div>

    <div class="card Dashcard">
      <h3>Legacy Features</h3>
      <table class="table">
        <tr>
          <td class="col-6">Typewriter Effect</td>
          <td class="col-2"><input type="checkbox" name="" id=""></td>
          <td class="col-4"></td>
        </tr>
      </table>
    </div>
  </div>
</div>