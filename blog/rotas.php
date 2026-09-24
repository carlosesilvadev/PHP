<?php

Use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('Sistema\Controlador');

SimpleRouter::get(SITE_BASE, 'SiteControlador@index');
SimpleRouter::get(SITE_BASE.'sobre', 'SiteControlador@sobre');
SimpleRouter::get(SITE_BASE.'contato', 'ContatoControlador@contato');

SimpleRouter::start();