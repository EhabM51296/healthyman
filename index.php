<!DOCTYPE html>
<html lang="en">
<head>
<?php
        require "services/staticLocations.php";
        require "services/staticVariables.php";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $styleLocation ;?>style.css" rel="stylesheet" />
    <script src="<?php echo $jsLocation;?>arrow.js" defer></script>
    <title>Healthy Man</title>
</head>
<body>
    <div class="mainDiv">
        <?php
        require $componentLocation."header.php";
        require $componentLocation."gridProject.php";
        require $componentLocation."services.php";
        require $componentLocation."team.php";
        require $componentLocation."goal.php";
        require $componentLocation."plans.php";
        require $componentLocation."slider.php";
        ?>
    </div>
</body>
</html>