#!/bin/bash

set -e;

cat header.php sidebar.php index.php footer.php > index.html



sed -i "s/<section id=\"principal\" class=\"clear \">//g" index.html
sed -i "s/<div id=\"conteudo\" class=\"total-centro\">//g" index.html

sed -i "s/<nav id=\"menu-lateral\"/<section id=\"principal\" class=\"clear \">\n<div id=\"conteudo\" class=\"total-centro\">\n<nav id=\"menu-lateral\"/g" index.html





sed -i 's/ <?php language_attributes(); ?>//g' index.html 
sed -i "s/<?php echo get_template_directory_uri() . '/./g" index.html
sed -i "s/<?php get_header(); ?>//g" index.html
sed -i "s/<?php get_footer(); ?>//g" index.html
sed -i "s/<?php get_sidebar(); ?>//g" index.html
sed -i "s/<?php bloginfo( 'charset' ); ?>/utf-8/g" index.html
sed -i "s-<?php bloginfo('stylesheet_url'); ?>-./style.css-g" index.html


sed -i "s/<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>//g" index.html
sed -i "s/<?php endif; ?>//g" index.html
sed -i "s/<link rel=\"pingback\" href=\"<?php bloginfo( 'pingback_url' ); ?>\">//g" index.html
sed -i "s/'; ?> //g" index.html

scp -r index.html style.css imagens murilo@home.inf.ufg.br:~/public_html/inf-teste/

rm -f index.html
