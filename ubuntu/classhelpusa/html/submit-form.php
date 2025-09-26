<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $secret = '6LcNwjwlAAAAAALeuL6mGBpUI2VvPsG6ftvlZ63x';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $remoteip,
    ];

    // Use file_get_contents to make a POST request
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $resultJson = json_decode($result);

    if ($resultJson->success) {
        
        if (isset($_POST["sbmtbtn"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["emailadd"];
        $desc = $_POST["desc"];
        $phone = $_POST["pn"];
        
        $fullname = $fname.' '.$lname;
        
        $to = "info@classhelpusa.com";
        $subject = "Get an Early Bird Discount";
        
        $message = "
        <html>
        <head>
        <title>Get an Early Bird Discount</title>
        </head>
        <body>
        <table>
        <tr><th style='text-align:left;'>Name: </th><td>".$fullname."</td></tr>
        <tr><th style='text-align:left;'>Email: </th><td>".$email."</td></tr>
        <tr><th style='text-align:left;'>Phone: </th><td>".$phone."</td></tr>
        <tr><th style='text-align:left;'>Description: </th><td>".$desc."</td></tr>
        </table>
        </body>
        </html>";
        
        
        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        
        // Additional headers
        $headers[] = 'From: Class Help USA <info@classhelpusa.com>';
        //$headers[] = 'Bcc: engineerabdulali@gmail.com';
        $headers[] = 'Cc: avinash.1ramchandani@gmail.com';
        
        
        if(mail($to, $subject, $message, implode("\r\n", $headers))) 
        {
            //echo "Form Submitted Succesfully";
        }
        header('Location: https://www.classhelpusa.com');
        exit;
        }
        
        if (isset($_POST["bnrfrm-btn"])) {
        $fullname = $_POST["fl-name"];
        $phnumber = $_POST["phnumber"];
        $email = $_POST["emladd"];
        $decmessage = $_POST["message"];
        $edusubject = $_POST["subject"];
        
        //$fullname = $fname.' '.$lname;
        
        $to = "info@classhelpusa.com";
        $subject = "Get an Early Bird Discount";
        
        $message = "
        <html>
        <head>
        <title>Get an Early Bird Discount</title>
        </head>
        <body>
        <table>
        <tr><th style='text-align:left;'>Name: </th><td>".$fullname."</td></tr>
        <tr><th style='text-align:left;'>Email: </th><td>".$email."</td></tr>
        <tr><th style='text-align:left;'>Number: </th><td>".$phnumber."</td></tr>
        <tr><th style='text-align:left;'>Subject: </th><td>".$edusubject."</td></tr>
        <tr><th style='text-align:left;'>Message: </th><td>".$decmessage."</td></tr>
        </table>
        </body>
        </html>";
        
        
        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        
        // Additional headers
        $headers[] = 'From: Class Help USA <info@classhelpusa.com>';
        //$headers[] = 'Bcc: engineerabdulali@gmail.com';
        $headers[] = 'Cc: avinash.1ramchandani@gmail.com';
        
        
        if(mail($to, $subject, $message, implode("\r\n", $headers))) 
        {
            //echo "Form Submitted Succesfully";
        }
        header('Location: https://www.classhelpusa.com');
        exit;
        }
        
        
    } else {
        // reCAPTCHA failed
        echo 'Verification failed. Please try again.';
        header('Location: https://www.classhelpusa.com');
        exit;
    }
}    


/*

if (isset($_POST["sbmtbtn"])) {
    

    function reCaptcha($recaptcha){
    $secret = "6LcNwjwlAAAAAALeuL6mGBpUI2VvPsG6ftvlZ63x";
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);
    
        return json_decode($data, true);
    }    

    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if($res['success']){
        
    

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["emailadd"];
$desc = $_POST["desc"];
//$phone = $_POST["pn"];

$fullname = $fname.' '.$lname;

$to = "info@classhelpusa.com";
$subject = "Get an Early Bird Discount";

$message = "
<html>
<head>
<title>Get an Early Bird Discount</title>
</head>
<body>
<table>
<tr>
<th style='text-align:left;'>Name: </th><td>".$fullname."</td></tr>
<tr>
<th style='text-align:left;'>Email: </th><td>".$email."</td></tr>
<tr>
<th style='text-align:left;'>Description: </th><td>".$desc."</td></tr>
</table>
</body>
</html>";


// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


// Additional headers
$headers[] = 'From: Class Help USA <info@classhelpusa.com>';
//$headers[] = 'Bcc: engineerabdulali@gmail.com';
$headers[] = 'Cc: avinash.1ramchandani@gmail.com';


if(mail($to, $subject, $message, implode("\r\n", $headers))) 
{
    //echo "Form Submitted Succesfully";
}
header('Location: https://www.classhelpusa.com');
exit;
}
*/
/*

if (isset($_POST["sbmtbtnd"])) {
    
    function reCaptcha($recaptcha){
    $secret = "6LcNwjwlAAAAAALeuL6mGBpUI2VvPsG6ftvlZ63x";
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);
    
        return json_decode($data, true);
    }    

    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if($res['success']){

$fullname = $_POST["cn"];
$email = $_POST["em"];
$phone = $_POST["pn"];


$to = "info@classhelpusa.com";
$subject = "Get My Discounts";

$message = "
<html>
<head>
<title>Get My Discounts</title>
</head>
<body>
<table>
<tr>
<th style='text-align:left;'>Name: </th><td>".$fullname."</td></tr>
<tr>
<th style='text-align:left;'>Email: </th><td>".$email."</td></tr>
<tr>
<th style='text-align:left;'>Phone: </th><td>".$phone."</td></tr>
</table>
</body>
</html>";


// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


// Additional headers
$headers[] = 'From: Class Help USA <info@classhelpusa.com>';
//$headers[] = 'Bcc: engineerabdulali@gmail.com';
$headers[] = 'Cc: avinash.1ramchandani@gmail.com';

//mail($to,$subject,$message,$headers);

if(mail($to, $subject, $message, implode("\r\n", $headers))) 
{
    //echo "Form Submitted Succesfully";
}
header('Location: https://www.classhelpusa.com');
exit;
}
}
*/
?>