<?php

require "../app/controllers/ProductoController.php";

$producto = new ProductoController();

$producto->index();

?>