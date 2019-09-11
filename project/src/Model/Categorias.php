<?php
    class Categorias {
        private $codigoCategoria, $nomeCategoria;

        function __construct ($codigoCategoria, $nomeCategoria)
        {
            $this->codigoCategoria = $codigoCategoria;
            $this->nomeCategoria = $nomeCategoria;
        }
        
        function getcodigoCategoria() {
            return $this->codigoCategoria;
        }
        function getnomeCategoria() {
            return $this->nomeCategoria;
        }
        function setcodigoCategoria($codigoCategoria) {
            $this->codigoCategoria = $codigoCategoria;
        }
        function setnomeCategoria($nomeCategoria) {
            $this->nomeCategoria = $nomeCategoria;
        }
    }
?>