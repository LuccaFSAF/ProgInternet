<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="minimo">Minímo:</label>
        <input type="number" id="min" name="min">
        <label for="maximo">Máximo:</label>
        <input type="number" id="max" name="max">
        <input type="submit" id="Sorteio">
    </form>
    <?php 
    if (isset($_GET["min"]) || isset($_GET["max"])) {}
        $min = $_GET["min"];
        $max = $_GET["max"];
    ?>
<h1><?php echo rand($min, $max);?></h1>
</body>
</html>