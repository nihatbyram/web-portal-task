<?php
session_start();
if (isset($_SESSION['access_token'])) {
    $exp_time = strtotime($_SESSION['access_token_exp_time']);
    if (time() >= $exp_time) {
        session_unset();
        session_destroy();
        header("Location: ../auth/see-you.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>VERO - Login Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../assets/login.css">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">

</head>
<body>
	<div class="app">

		<div class="bg"></div>

		<form method="post" action="../sys/getData.php">
			<header>
				<img src="https://www.vero-digital.solutions/wp-content/uploads/2020/12/vero_digital_logo.png"">
			</header>

			<div class="inputs">
				<input type="text" id="username" name="username" placeholder="api username">
				<input type="password" id="password" name="password" placeholder="api password">

				
			</div>
<button type="submit" class="btn btn-primary">Login</button>

<?php
// Check for an error message

if (isset($_SESSION['error'])) {
    // Display an alert with the error message
   echo '<h5><div id="error-message" style="color: red;">' . $_SESSION["error"] . '</div></h5>';

    // Unset the error message so it doesn't persist across page loads
    unset($_SESSION['error']);
}
?>
		</form>

	</div>
</body>
</html>
<script>
    // hide alert in 3 sec.
    setTimeout(function() {
        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 3000);
</script>
</body>
</html>
					
					
					
               