<!-- 
    You have to use this code in every file that is going to show your contact information:
    - the include_once
    - all the <script></script>
    - and the input tag lines
    
    Divs are examples of how you have to use it. Using span.
    <span data-ofuscateEmail="email_or_another_name" style="display: none;">
    Then configure your "data-true" and "data-false" in the config.php file:
    In data-true for example:
    "email_or_another_name"=> [
                "href"      => "mailto:correo1@deprueba.es",
                "text"      => "correo1@deprueba.es"          
            ],
    and in data-false:
     "email_or_another_name"    => [
                "src"             => "email1.png",
                "alt"               => "Imagen de email 1",
                "title"             => "Title email 1",
                "long_desc"         => "Email showed as an image to avoid being read from boots"
            ], 


    TODO ask just onetime to reCAptcha and save scrore for this session
-->
<?php
include_once('vendor/ofuscateEmail/src/app/app.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protect Email Data</title>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $siteKey; ?>"></script>

</head>

<body>
    <input id="site_key" type="hidden" value="<?php echo $siteKey; ?>">
    <input id="handler_url" type="hidden" value="<?php echo $urlHandler; ?>">
    <input id="images_path" type="hidden" value="<?php echo $imagesPath; ?>">
    
    <div>Email one <span data-ofuscateEmail="email1" style="display: none;"></span></div>
    <div>Email two <span data-ofuscateEmail="email2" style="display: none;"></span></div>
    <div>Email three fails, not in config file <span data-ofuscateEmail="email3" style="display: none;"></span></div>
    <div>Pnone 1 <span data-ofuscateEmail="phone1"></span> using HTML attribute</div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="vendor/ofuscateEmail/src/public/assets/js/validateCaptcha.js"></script>
</body>

</html>