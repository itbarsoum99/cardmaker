<?php
 $path = 'data.txt';
 if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['endearment']) && isset($_POST['from']) {
    $fh = fopen($path,"a+");
    $string = $_POST['name'].' - '.$_POST['message'].' - '.$_POST['endearment'].', '.$_POST['from'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>
