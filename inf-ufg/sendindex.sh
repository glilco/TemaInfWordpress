#!/bin/bash

cat header.php index.php footer.php > index.html

sed -i 's/ <?php language_attributes(); ?>//g' index.html 
sed -i "s/<?php echo get_template_directory_uri() . '/./g" index.html
sed -i "s/<?php get_header(); ?>//g" index.html
sed -i "s/<?php get_footer(); ?>//g" index.html
sed -i "s/<?php bloginfo( 'charset' ); ?>/utf-8/g" index.html
sed -i "s-<?php bloginfo('stylesheet_url'); ?>-./style.css-g" index.html


sed -i "s/<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>//g" index.html
sed -i "s/<?php endif; ?>//g" index.html
sed -i "s/<link rel=\"pingback\" href=\"<?php bloginfo( 'pingback_url' ); ?>\">//g" index.html
sed -i "s/'; ?> //g" index.html

scp -r index.html style.css imagens murilo@home.inf.ufg.br:~/public_html/inf-teste/

rm -f index.html
