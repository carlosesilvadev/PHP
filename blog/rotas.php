<?php

Use Pecee\SimpleRouter\SimpleRouter;

/**Pasta dos controladores */
SimpleRouter::setDefaultNamespace('Sistema\Controlador');

/**Pasta do projeto/SITE_BASE e a classe do controlador com o método para página de destino*/
SimpleRouter::get(SITE_BASE, 'SiteControlador@index');
SimpleRouter::get(SITE_BASE.'sobre', 'SiteControlador@sobre');

SimpleRouter::start();