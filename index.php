<?php 
$config = include 'config.php';
// return array (
//     '__name'=>'Omar Faruk Raju',
//     '__age'=>28
// );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi <?php echo $config['__name']; ?>, you are <?php echo $config['__age']; ?> years old.</h1>

    <form id="name_box_form">
        <input placeholder="Name" type="text" id="__name">
        <input placeholder="Age" type="number" id="__age">
        <button type="submit" id="__submit">Submit</button>
    </form>
    <script src="scripts.js"></script>
</body>
</html>