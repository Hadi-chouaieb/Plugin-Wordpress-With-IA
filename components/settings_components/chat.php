<div class="card ChatDusc bg-dark" style="max-height: 400px; overflow-y: auto;">
  <div id="chat-container">
    <div id="chat-box"></div>
    <div class="input-group">
      <input type="text" id="user-input" class="form-control" placeholder="Type your message...">
      <div class="input-group-append">
        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
      </div>
    </div>
  </div>
</div>

<script>
  function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    if (userInput.trim() !== "") {
      showAlert("You: " + userInput, "primary");
      
      // Your chatbot logic here to generate responses
      // For simplicity, let's just echo the user's input
      var botResponse = "Hi Mr in INNOVIA360 Chatbot";
      
      setTimeout(function() {
        showAlert("Bot: " + botResponse, "success");
      }, 500);

      document.getElementById("user-input").value = "";
    }
  }

  function showAlert(message, alertClass) {
    var chatBox = document.getElementById("chat-box");
    var alertDiv = document.createElement("div");
    alertDiv.className = "alert alert-" + alertClass;
    alertDiv.textContent = message;
    chatBox.appendChild(alertDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
  }
</script>
