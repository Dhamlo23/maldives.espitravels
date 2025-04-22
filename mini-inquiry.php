<?php
function getIp()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}
$ip1 = getIp();
if (!empty($_SERVER['HTTP_REFERER'])) {
    $ref_page = $_SERVER['HTTP_REFERER'];
}

// Capture the referrer URL (the page where the form was submitted from)
$ref_page = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct or Unknown';

if (count($_POST) > 0) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $emailList = "leads@clientsnow.co.in";
    $headers .= "Bcc: " . $emailList . "\r\n" .
        'From: noreply@espitravels.in' . "\r\n";
    $break = urlencode("\n");
    $body =
        "
		Hello ESPI Travels, 
		You have one inquiry for Maldives tour,
		Below are the details,
		Name =  " . $name . " 
		Phone =  "  . $phone . " 
		Date of Departure =  " . $date . "
		IP Address =  " . $ip1 . "
		Form Submitted From: " . $ref_page . "
		 ";
    $recaptcha_secret = '6Ldq5asqAAAAABfyZ8uekSxMB6G9_G3_Rf55MkFh';
    $recaptcha_response = $_POST['g-recaptcha-response-2'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response);

    if ($result && $result->success && $result->score >= 0.5) {
        if (mail("operation@espitravels.in", "Inquiry For Maldives", $body, $headers)) {
            header("Location: https://wa.me/918347835777?text=Hey ESPI Travels, I need some information about . My details are " . $break .
                "Name= " . $name . $break .
                "Phone =  " . $phone  . $break .
                "Date of Departure =  " . $date . $break .
                "Submitted From =  " . $ref_page . "");
        }
    } else {
        echo '<script>alert("reCAPTCHA validation failed. Please confirm that you are not a bot.")</script>';
        header("Location: /");
        exit();
    }
}
