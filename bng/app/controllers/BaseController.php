<?php

namespace bng\Controllers;

abstract class BaseController{
    public function view($view, $data = []){
        // require_once("../app/views/layouts/html_header.php");
        // echo "teste";
        // require_once("../app/views/layouts/html_footer.php");

        /**Check if data is array: */
        if(!is_array($data)){
            echo("Data is not an array: ");
            var_dump($data);
            die();
        }

        /**Transform data into variables: */
        extract($data);

        /**includes the file if exists */
        if(file_exists("../app/views/$view.php")){
            require_once("../app/views/$view.php");
        }else{
            die("View does not exist: " . $view);
        }
    }
}