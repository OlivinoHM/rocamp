<!DOCTYPE html> 
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php print $cabecalho_title; ?></title>
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <?php print @$cabecalho_css; ?>
        <link href="css/index.css" rel="stylesheet">
        <link href="css/cabecalho.css" rel="stylesheet">
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!--Bootshape-->
        <link href="css/bootshape.css" rel="stylesheet">
    </head>
   
    <body  style="background-color:#FFFFFF; background-image:none;">

        <header class="container cabecalho">
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
             
            <figure id="logo">
                <img src="img/logo_rocamp6.png">
            </figure>

           <div class='menu'>
                <ul>
                    <li><a id="home" href='index.php'>HOME</a></li>
                    <li><a id="somos" href='#'>QUEM SOMOS</a></li>
                    <li><a id="ser" href='servicos.php' >SERVIÇOS</a></li>
                    <li><a id="con" href='contato.php' >CONTATO</a></li>
                </ul>
            </div>
        </header>