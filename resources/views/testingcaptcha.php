<?php
define ('siteKey','6Lc--pMUAAAAACuTI0Wri64BZ9dy6-UciH5y8O0i');
define ('secretKey','6Lc--pMUAAAAAJ9x_HF1oQlVnoLqB7ar9UqUR6cp');

if($_POST){
    function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".secretKey."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    //var_dump($Return);
    if($Return->success == true && $Return ->score > 0.5){
        echo "SucSex";
    }else{
        echo "You are a Robot";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Testing Captcha</title>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo siteKey; ?>"></script>
</head>

<body>
    <form action="testingcaptcha.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" />
        <label for="password">Password</label>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br>
        <input type="submit" value="submit">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo siteKey; ?>', {
                action: 'login'
            }).then(function(token) {
                //console.log(token);
                document.getElementById('g-recaptcha-response').value = token;
            });
        });

    </script>
</body>

</html>
