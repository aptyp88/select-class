<?php
require_once 'select.php';
require_once 'chk.php';
require_once 'radio.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select class php</title>
</head>
<body>
    <?php
    $years = new Select('years');
    for ($i = 1930; $i <= 2018; $i++)
    {
        $years -> addItem($i, $i);
    }
    //$years -> addItem(2018, 18);
    //$years -> addItem(2017, 17);
    $month = new Select('month');
    $month -> addItem('January', '0');
    $month -> addItem('February', '1');

    $checkbox = new Checkbox('agree' ,'1');

    $r = [['red', '#f00'],
         ['green', '#0f0']];
    $radioBtns = new Radio('color', $r);
         
    // $radioBtns -> addItem('green', '#0f0');
    // $radioBtns -> addItem('red', '#f00');
    $radioBtns -> addItem('blue', '#00f');
    //echo $years;
    //echo $month;
    ?>

    <form action="index.php" method="GET">
        Год: <?=$years?>
        <br>
        Месяц: <?=$month?>
        <br>
        <!-- <input type="checkbox"> -->
        Check: <?=$checkbox?>
        <br>
        Radio: <br>
        <?=$radioBtns?>
        
        <br>
        <input type="submit">
    </form>

    <?=$years -> getValue(); ?>
    <br>
    <?=$month -> getValue(); ?>

    <!-- <input type="text" name="user"> -->


    
</body>
</html>