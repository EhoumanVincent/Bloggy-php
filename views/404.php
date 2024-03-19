<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'erreur</title>
</head>
<body>
    <h1><?= $message?></h1>
</body>
</html> -->
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" 
          content="width=device-width,  
                   initial-scale=1.0"> 
    <title> 
        404 Page Not Found 
    </title> 
    <link rel="stylesheet" 
          href="./assets/css/404.css"> 
</head> 
  
<body> 
    <div class="error-container"> 
        <h1> 404 </h1> 
        <p> 
            Oups!<?= $message?>
        </p> 
        <a href="./index.php"> 
            RETOUR
        </a> 
    </div> 
</body> 
  
</html>