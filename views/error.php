<?php
    if(!isset($errorMessage)) {
        $errorMessage = "Une erreur est survenue";
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Une erreur est survenue</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/main.css" />

    <style>

    </style>
</head>
<body>

<section id="one" class="wrapper style2">
    <div class="">

    </div>

    <div class="inner">
        <h1><?php echo $errorMessage; ?></h1>
    </div>

    <div class="copyright">
        &copy; CasinOnline
    </div>
</section>
</body>
</html>