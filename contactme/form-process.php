<?php
include ("config.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract POST data and sanitize inputs
    $firstname = $mysqli->real_escape_string($_POST['firstname']);
    $lastname = $mysqli->real_escape_string($_POST['lastname']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $message = $mysqli->real_escape_string($_POST['message']);

    // Use prepared statements to prevent SQL injection
    $stmt = $mysqli->prepare("INSERT INTO contactme (firstname, lastname, phone, email, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $phone, $email, $message);

    if ($stmt->execute()) {
        // Prepare the thank you message
        $data = '
        <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            min-height: 100vh; 
            overflow-x: hidden;
        }
        .image{
            justify-content: center;
            align-items: center;
        }
        .popup-screen{
            z-index: 999999;
            position: fixed;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .popup-box{
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            max-width: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 20px;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
        }
        .popup-box h2{
            font-size: 2.1em;
            font-weight: 800;
            margin-bottom: 20px;
        }
        .popup-box p{
            font-size: 1em;
            margin-bottom: 30px;
        }
        .popup-box .btn{
            color: #fff;
            background-color: peru;
            font-size: 1.1em;
            font-weight: 500;
            text-decoration: none;
            text-transform: uppercase;
            padding: 7px 27px;
            border-radius: 3px;
        }
        .close-btn{
            position: absolute;
            font-size: 1em;
            top: 0;
            right: 0;
            margin: 15px;
            cursor: pointer;
            opacity: 0.5;
        }
        .close-btn:hover{
            opacity: 1;
        }
        </style>

        <div class="popup-screen">
            <div class="popup-box">
                <i class="fas fa-times close-btn"></i>
                <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
                <h4 class="text-success">Your Details Saved Successfully!</h4>
                <h4 class="bg-danger text-light rounded p-2">First Name : ' . htmlspecialchars($firstname) . '</h4>
                <h4>Last Name : ' . htmlspecialchars($lastname) . '</h4>
                <h4>Phone : ' . htmlspecialchars($phone) . '</h4>
                <h4>Email : ' . htmlspecialchars($email) . '</h4>
                <h4>Message : ' . htmlspecialchars($message) . '</h4>
                <a href="../index.html" class="btn">BACK TO HOME</a>
            </div>
        </div>
        <div class="image">
            <img src="Screenshot (24).png" alt="">
        </div>';

        echo $data;
    } else {
        // Handle query error
        die("Error entering data: " . $stmt->error);
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
} else {
    // Handle the case where form is not submitted correctly
    die("Invalid request");
}
?>