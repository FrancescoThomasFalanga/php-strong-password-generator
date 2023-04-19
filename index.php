<?php

include "./partials/functions.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container text-center mt-3">

        <h1>PHP - Password Generator</h1>

        <form action="index.php" method="GET" class="d-flex justify-content-center align-items-center gap-3 mt-5">

            <label for="exampleFormControlInput1" class="form-label m-0">Minimo 6 caratteri:</label>
            <input name="length" type="number" class="form-control" style="width:100px" min="6">

            <button type="submit" class="btn btn-primary">Genera Password</button>

        </form>

        <div class="mt-5 fs-2">

            La tua Password è: <strong> <?php echo randomPasswordGenerator( $_GET["length"] ) ?> </strong>

        </div>

    </div>

</body>
</html>