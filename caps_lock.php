
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.caps-lock-warning {
    color: red;
    margin-top: 5px;
    display: none; /* Initially hidden */
    text-align: left;
}
</style>
        <script>
        // JavaScript Document
        function checkCapsLock(event) {
            // Get the real caps lock state
            const isCapsLockOn = event.getModifierState('CapsLock');
            // Get the caps lock warning element
            const capsLockWarning = document.getElementById('caps_lock');
                if(isCapsLockOn) {
                    // Show the warning, the caps lock key is on
                    capsLockWarning.style.display = 'block';
                } else {
                    // Hide the warning, the caps lock key is off
                    capsLockWarning.style.display = 'none';
                }
        }
        //add event listener to the input
        document.addEventListener('DOMContentLoaded', function() {
        // Get the email input field by its ID  
        const emailInput = document.getElementById('email'); 
        emailInput.addEventListener('keydown', checkCapsLock);
        // Get the password input field by its ID
        const passwordInput = document.getElementById('password');
        passwordInput.addEventListener('keydown', checkCapsLock);
        });
        </script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="navegar.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
         
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <div id="caps_lock" class="caps-lock-warning" >Caps Lock is ON!</div>
            </div>
			<button type="submit">Login</button>
        </form>
    </div>
   <!-- <script type="text/javascript" src="caps_lock.js"></script>  -->
</body>
</html>