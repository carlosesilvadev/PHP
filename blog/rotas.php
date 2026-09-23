<?php

Use Pecee\SimpleRouter\SimpleRouter;

/**Pasta dos controladores */
SimpleRouter::setDefaultNamespace('sistema\Controlador');

/**Pasta do projeto/SITE_BASE e a classe do controlador com o método para página de destino*/
SimpleRouter::get('/php/blog/', 'SiteControlador@index');

SimpleRouter::start();