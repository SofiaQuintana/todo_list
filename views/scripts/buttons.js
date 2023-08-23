document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("submitBtn")
    .addEventListener("click", function (event) {
      event.preventDefault(); // Prevent the form from submitting
      let username = document.getElementById("username").value;
      let password = document.getElementById("password").value;
      signIn(username, password);
    });
});

const handleAuthenticationResponse = (response) => {
  if (response.success) {
    // Authentication successful, redirect to the specified page
    window.location.href = response.redirect;
  } else {
    // Authentication failed, display error message or handle as needed
    console.log("Authentication failed:", response.message);
  }
};

const signIn = (username, password) => {
  // Perform AJAX call to send data to PHP controller
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "/todo-list/controllers/user-controller.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Handle the response from the PHP controller
      const response = JSON.parse(xhr.responseText);
      handleAuthenticationResponse(response);
    }
  };
  xhr.send(
    "username=" +
      encodeURIComponent(username) +
      "&password=" +
      encodeURIComponent(password)
  );
};
