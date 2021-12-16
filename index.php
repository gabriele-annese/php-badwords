<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>php-badwords</title>
    <link rel="stylesheet" href="./css/main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
   <div>
       <h1>Censura la parola</h1>
       <p>
           <?php
            $parolaCensurata = $_GET['censura'];
            $text = "Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ";
            echo str_replace($parolaCensurata, "<span>***</span>", $text);
            $lenghtText = strlen($text)
           ?>
       </p>
       <span>Lunghezza del paragrafo: <?php echo $lenghtText ?></span>
   </div>
</body>

</html>
