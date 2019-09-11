<?php
    require_once 'Categorias.php';

    class Projetos extends Categorias{
        private $codigo, $nome, $descricao, $inicio, $fim, $status, $emailUsuario;

        function __construct ($codigo, $nome, $descricao, $inicio, $fim, $status, $emailUsuario)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->inicio = $inicio;
            $this->fim = $fim;
            $this->status = $status;
            $this->emailUsuario = $emailUsuario;
            $this->codigoCategoria = $codigoCategoria;
        }
        
        function getCodigo() {
            return $this->codigo;
        }
        function getNome() {
            return $this->nome;
        }
        function getDescricao() {
            return $this->descricao;
        }
        function getInicio() {
            return $this->inicio;
        }
        function getFim() {
            return $this->fim;
        }
        function getStatus() {
            return $this->status;
        }
        function getEmailUsuario() {
            return $this->emailUsuario;
        }
        
        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        function setInicio($inicio) {
            $this->inicio = $inicio;
        }
        function setFim($fim) {
            $this->fim = $fim;
        }
        function setStatus($status) {
            $this->status = $status;
        }
        function setEmailUsuario($emailUsuario) {
            $this->emailUsuario = $emailUsuario;
        }
    }
?>