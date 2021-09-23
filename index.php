<?php
include_once './partials/data/data.php';
include_once './partials/functions/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS</title>
</head>

<body>

    <section>
        <ul>
            <?php foreach (generateArray(15) as $number) : ?>
                <li><?php echo $number ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section>
        <ul>
            <?php foreach ($class as $student) : ?>
                <li>
                    <?php echo $student['Nome'] . ' ' . $student['Cognome'] . ' ' . 'Voto medio ' . medium($student['Voti']) ?>
                </li>
            <?php endforeach; ?>
            <?php var_dump($_GET) ?>
        </ul>
    </section>
</body>

</html>