<?php 

function autoload($name){
    include strtolower("{$name}.php");
}

spl_autoload_register('autoload');

(new bike)->gixxer_18();
(new planatnes)->plants();
(new spaceship)->march();

?>