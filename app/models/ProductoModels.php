<?php
class productoController {
    public $nombre;
    public $cantidad;

    public function __construct($nombre, $cantidad) {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
    }
}
?>