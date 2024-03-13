<?php
    class fornecedor extends pessoa
    {
        public function __construct(private string $cnpj = "", $nome)
        {
            parent:: __construct($nome);
        }



        public function setCnpj($cnpj)
        {
            $this->cnpj = $cnpj;
        }


        public function getCnpj()
        {
            return $this-> cnpj;
        }

    }
?>