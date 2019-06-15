<?php
    session_start ();
    if(isset($_POST["senf"])){
        $from = htmlspecialchars $_POST["from"];
        $to = htmlspecialchars $_POST["to"];
        $subject htmlspecialchars = $_POST["subject"];
        $message htmlspecialchars = $_POST["message"];
        $_SESSION["from"] = $from;
        $_SESSION["to"] = $to;
        $_SESSION["subject"] = $subject;
        $_SESSION["message"] = $message;
    }
?>


<input type="text" name="from" value="<?=$_SESSION[""from]?> /><br />