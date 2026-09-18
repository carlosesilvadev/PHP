<?php

Use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('Sistema\Controlador');

#Precisei acrescentar a pasta do repositorio antes de /blog/ para funcionar
SimpleRouter::get(URL_SITE, 'SiteControlador@index');
SimpleRouter::get(URL_SITE.'sobre', 'SiteControlador@sobre');

SimpleRouter::start();