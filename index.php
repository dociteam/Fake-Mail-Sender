<?php
$to = trim($_POST["to"]);
$sub = trim($_POST["sub"]);
$text = $_POST["text"];
$from = trim($_POST["from"]);
$cc = "From: " . $from . "\r\n" . "CC: " . $from;
$submit = $_POST["submit"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Mail Sender</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <br><input type="text" name="from" placeholder="From">
        <br><input type="text" name="to" placeholder="To">
        <br><input type="text" name="sub" placeholder="Subject">
        <br><textarea name="text" placeholder="Your Message Here" rows="4" cols="40"></textarea>
        <br><input type="submit" name="submit" value="Send">
    </form>
    <?php
if(isset($submit)){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($from) || empty($to) || empty($sub)){
            echo "<h2>Please Complete All Of Them!</h2>";
        }else{
            mail($to,$sub,$text,$cc);
            echo "<b>Mail Has Been Sent!</b>";
        }
    }
}
    ?>
    </center>
    
</body>
</html>
