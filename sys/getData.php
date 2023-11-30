<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"username\":\"$username\", \"password\":\"$password\"}",
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
                "Content-Type: application/json"
            ],
        ]);
		//cURL repsonsed
        $response = curl_exec($curl); 
        $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            //Display an error message
            $_SESSION["error"] = "Error, try again";
            header("Location: ../auth/login.php");
            exit();
        } else if ($status_code == 200) {
            //If the request was successful, save the access token to the session and redirect to the home page
            $json_response = json_decode($response, true);
            $access_token = $json_response['oauth']['access_token'];
            $expires = $json_response['oauth']['expires'];
            $token_expiry = time() + $expires_in;
            $_SESSION['access_token_exp_time'] = $token_expiry;
            $_SESSION['access_token'] = $access_token;
			header("Location: ../index.php");
            exit();
        } else {
            $json_response = json_decode($response, true);
            $_SESSION["error"] = 'Username or password is incorrect.';
            header("Location: ../auth/login.php");
            exit();
        }
    } else {
        $_SESSION["error"] = "Please enter a username and password.";
        header("Location: ../auth/login.php");
        exit();
    }
}


if (!isset($_SESSION['access_token'])) {
  // Redirect to login page 
  header("Location: ../auth/login.php");
  exit();
}

$url = "https://api.baubuddy.de/dev/index.php/v1/tasks/select";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer ".$_SESSION['access_token']
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Parse response and uPdate table
$data = json_decode($response, true);
?>
