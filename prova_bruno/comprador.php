<?php
    class comprador extends pessoa
    {
        public function __construct(private string $id_comprador = "", private string $cpf = "", $nome)
        {
            parent:: __construct($nome);
        }


        public function setId_comprador($id_comprador)
        {
            $this->id_comprador = $id_comprador;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }




        public function getId_comprador()
        {
            return $this-> id_comprador;
        }
        public function getCpf()
        {
            return $this-> cpf;
        }
    }
?>