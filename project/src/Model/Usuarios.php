<?php 
    class Usuarios {
        private $nome, $email, $senha, $telefone;

        function __construct ($nome, $email, $senha, $telefone) 
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->telefone = $telefone;
        }
        
        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getSenha() {
            return $this->senha;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
    }
?>