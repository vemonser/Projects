<?php
if($_POST["Message"]) {
mail("abdojoey17@yahoo.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: abdojoey17@yahoo.com");
}
?>

<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
$to = 'abdojoey17@gmail.com';
$subject = " dummy subject";
$body = '<html>
            <body>
                <h2>Feedback - example.com
                <hr>
                <p>Name:</br>'.$name.'</p>
                <p>Email:</br>'.$email.'</p>
            </body>
        </html>';
$headers = " From: ".$name." <".$email.">\r\n";
$headers  .= " Reply-To: ".$email."\r\n";
$headers  .= " Mine-Version: 1.0\r\n";
$headers  .= " Contact-type: text/html; charset-utf-8";

$send =mail($to, $subject, $body, $headers);
if ($send) {
    echo '<br>';
    echo 'thanks';

} else {
    echo 'error';
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Your name" ><br>
        <input type="text" name="email" placeholder="Your email" ><br>
    <button type="submit">submit</button>

    
    </form>
</body>
</html>