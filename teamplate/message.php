<?php
$message = $_GET['message'];

$file = fopen('message.txt', 'a+');

if(!empty($message)) {
    fputs($file, $message . "\r\n");
    header('Location: index.php');
    die();
}
?>

<form action="">
    <input type="text" name="message" id="" autofocus>
    <input type="submit" name="" id="" value="Send">
</form>
<p>
    <?php
    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
    ?>
</p>