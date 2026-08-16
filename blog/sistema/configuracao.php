<?php
#Arquivo de configuração do sistema

#Determina qual será o timezone utilizado, neste caso será usado de São Paulo, mas pode alterar dependendo da localidade do novo projeto
date_default_timezone_set('America/Sao_Paulo');

define('SITE_NAME', 'Carlos');
define('SITE_DESCRICAO', 'Carlos - Desenvolvedor de Sistemas');

define('URL_PRODUCAO', 'https://carlosesilvadev.github.io');
define('URL_DESENVOLVIMENTO', 'http://localhost/php/blog');

define('ANIMAL', array(
                    'cachorro',
                    'gato',
                    'passaro')
);

#Outra maneira de definir constante
const SITE_NOME = 'Carlos';