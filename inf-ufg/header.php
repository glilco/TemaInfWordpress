<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <title>Tema do Instituto de Informática</title>
	<!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/42991"> 
</head>
<body>
<div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;"> 
	<ul id="menu-barra-temp" style="list-style:none;">
		<li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li> 
		<li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
	</ul>
</div>
    <header id="cabecalho-pagina">
        <div id="grupo-cabecalho" class="total-centro">
            <div id="id-inf">
                <div id="texto-id-inf">
                    <a href="/">
                        <h1 id="sigla-inf">INF</h1>
                        <span id="inf-completo">INSTITUTO DE INFORMÁTICA</span>
                    </a>
                </div>
            </div>
            <div id="id-ufg">
                <a href="http://www.ufg.br">
                    <img src="<?php echo get_template_directory_uri() . '/imagens/UFG_ufg.svg'; ?> "/>
                </a>
            </div>
            
            <div id="grupo-busca">
                <div id="grupo-form-busca">
                
                    <form action="/news" accept-charset="UTF-8" method="get" role="search" action="http://localhost/">
                        <fieldset id="cabecalho-fieldset-busca" class="fieldset-form">
                            <input class="busca campo-busca" type="search" name="s" id="search" placeholder="Buscar no site" />
                            <input class="busca botao-busca" id="cabecalho-busca-botao" type="submit" value="Buscar no site" />
                        </fieldset>
                    </form>
                </div>
            </div>
            
            <div id="grupo-centro">
                <div class="" id="grupo-acessibilidade">
                    
                    <nav class="" id="acessibilidade-fonte-constraste">
                        <span id="acessibilidade" class="">
                            <span id="acessibilidade-fonte" class=''><a onclick="font_size_change(&quot;minus&quot;)" title=" Diminuir o tamanho da fonte " href="#"><i class="fa fa-minus">-</i></a><a onclick="font_size_original()" title=" Tamanho padrão da fonte " href="#"><i class="fa fa-font">A</i></a><a onclick="font_size_change(&quot;plus&quot;)" title=" Aumentar o tamanho da fonte " href="#"><i class="fa fa-plus">+</i></a></span>
                            <span id="acessibilidade-cor" class="">
                                <a class="contrast_normal" href="#">C</a><a class="contrast_blue" data-url="//assets.cercomp.ufg.br/assets/shared/contrast_blue-07f28312874727e9d50b72e0bd43a939.css" href="#">C</a><a class="contrast_black" data-url="//assets.cercomp.ufg.br/assets/shared/contrast_black-5b8f71320d63f67eb4050c3e55789fa7.css" href="#">C</a><a class="contrast_yellow" data-url="//assets.cercomp.ufg.br/assets/shared/contrast_yellow-6ebde06f6ce5a3e10ba7173c2a08c984.css" href="#">C</a>
                            </span>
                        </span>
                    </nav>
                </div>
                
                <div id="grupo-midias-sociais">
                    <div id="icone-facebook" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/facebook.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-instagram" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/instagram.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-radio" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/radio.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-twitter" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/twitter.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-flickr" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/flickr.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-picasa" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/picasa.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-tv" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/tv.png'; ?> "/>
                        </a>
                    </div>
                    <div id="icone-youtube" class="icone-midia">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/imagens/ufg-redes-sociais/youtube.png'; ?> "/>
                        </a>
                    </div>
                    
                </div>
            </div>
            <nav id="nav-menu-cabecalho" class="clear">
                <ul id="menu-cabecalho" class="menu">
                    <li><a href="#">O Instituto de Informática</a>
                        <ul id="submenu-cabecalho1" class="submenu">
                            <li><a href="#">Espaço fisico</a></li>
                            <li><a href="#">Espaço fisico2</a></li>
                            <li><a href="#">Espaço fisico3</a></li>
                            <li><a href="#">Espaço fisico4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Graduação</a>
                        <ul id="submenu-cabecalho1" class="submenu">
                            <li><a href="#">Espaço fisico</a></li>
                            <li><a href="#">Espaço fisico2</a></li>
                            <li><a href="#">Espaço fisico3</a></li>
                            <li><a href="#">Espaço fisico4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pós-Graduação</a>
                        <ul id="submenu-cabecalho1" class="submenu">
                            <li><a href="#">Espaço fisico</a></li>
                            <li><a href="#">Espaço fisico2</a></li>
                            <li><a href="#">Espaço fisico3</a></li>
                            <li><a href="#">Espaço fisico4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Serviços</a>
                        <ul id="submenu-cabecalho1" class="submenu">
                            <li><a href="#">Espaço fisico</a></li>
                            <li><a href="#">Espaço fisico2</a></li>
                            <li><a href="#">Espaço fisico3</a></li>
                            <li><a href="#">Espaço fisico4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pessoal</a>
                        <ul id="submenu-cabecalho1" class="submenu">
                            <li><a href="#">Espaço fisico</a></li>
                            <li><a href="#">Espaço fisico2</a></li>
                            <li><a href="#">Espaço fisico3</a></li>
                            <li><a href="#">Espaço fisico4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            
        </div>
        
        <div id="cabecalho-carrossel" class="clear">
            <div id="cabecalho-carrossel-corpo" class="total-centro">
                <img src="<?php echo get_template_directory_uri() . '/imagens/INF.jpg'; ?> " />
            </div>
        </div>
    </header>
