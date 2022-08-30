<?php
// define variables and set to empty values
$emailErr = $email = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        else{
            
        $to = "hello@pixacura.com";
        $subject ="Pixacura signup";

        $message = "
        <html>
        <head>
        <title>Pixacura signup </title>
        </head>
        <body>
        <p>Someone has signed up for newsletters</p>
        <table>
        <tr>
        <th>Email</th>
        </tr>
        <tr>
        <td>".$GLOBALS['email']."</td>
        </tr>
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= "From: no-reply@Pixacura\r\n";

        mail($to,$subject,$message,$headers);
        ?>
            <div id="bck_3" class="bck">
                <div id="block_3" class="row rowNo08">
                    <h2 class="rowNo08Cont">Thank you</h2>
                    <p>You are now signed up to receive our newsletter</p>
                </div>
            </div>
        <?php
        }
    }
}


?>
