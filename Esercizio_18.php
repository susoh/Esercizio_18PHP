<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film = array("Fight Club", "Interstellar", "American Psycho", "Disaster Movie", "Matteo Ciardi");
        
        echo "<select>";

        foreach ($film as $key) {
            echo "<option>" .$key . "</option>";
        } 

        echo "</select>"
    ?>
</body>
</html>