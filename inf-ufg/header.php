<!DOCTYPE html>
<html>
<head>
<title>Tema do Instituto de Informática</title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
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
        <div id="grupo-cabecalho">
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
            
            <div class="" id="grupo-acessibilidade">
                <nav class="" id="acessibilidade-fonte-constraste">
                    <span class="" id="acessibilidade">
                        <span class="" id='acessibilidade-fonte'>
                            <a onclick="font_size_change(&quot;minus&quot;)" title=" Diminuir o tamanho da fonte " href="#">
                                <i class="fa fa-minus">
                                </i>
                            </a>
                            <a onclick="font_size_original()" title=" Tamanho padrão da fonte " href="#">
                                <i class="fa fa-font">
                                </i>
                            </a>
                            <a onclick="font_size_change(&quot;plus&quot;)" title=" Aumentar o tamanho da fonte " href="#">
                                <i class="fa fa-plus">
                                </i>
                            </a>
                        </span>
                        <span class="" id="acessibilidade-cor">
                            <a class="contrast_normal" href="#">C</a><a class="contrast_blue" data-url="//assets.cercomp.ufg.br/assets/shared/contrast_blue-07f28312874727e9d50b72e0bd43a939.css" href="#">C</a><a class="contrast_black" data-url="//assets.cercomp.ufg.br/assets/shared/contrast_black-5b8f71320d63f67eb4050c3e55789fa7.css" href="#">C</a><a class="contrast_yellow" data-url="//assets.cercomp.ufg.br/assets/shared/contrast_yellow-6ebde06f6ce5a3e10ba7173c2a08c984.css" href="#">C</a>
                        </span>
                    </span>
                </nav>
            </div>
        
        
            <div class="" id="grupo-busca">
                <div class="" id="grupo-form-busca">
                    <form class="" action="/news" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
                        <input class="busca" type="text" name="search" id="search" placeholder=" Pesquisar " />
                        <select class="busca" id="options" onchange="search_action()">
                            <option value="/news"  >Notícias</option>
                            <option value="/pages" >Páginas</option>
                        </select>
                    </form>
                </div>
                <div id="links-sistemas" class="">
                    <ul>
                      <li>Sistemas UFG</li>
                      <li><a href="http://ufgnet.ufg.br">Portal UFGNet</a></li>
                      <li><a href="http://mail.ufg.br">Webmail</a></li>
                      <li><a href="https://sigaa.sistemas.ufg.br">Matrícula</a></li>
                      <li><a href="http://sistemas.ufg.br/CONCURSOS_WEB/">Concursos</a></li>
                      <li><a href="http://portalsig.ufg.br">Portal SIG</a></li>
                    </ul>
                </div>
            </div>
            
        
        </div>

        
    </header>
