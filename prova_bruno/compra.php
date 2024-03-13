<?php
    class compra
    {
        public function __construct(private string $data_compra = "", 
                                    private $fornecedor = null,  private $comprador = null, 
                                    private array $itenscompra = array()){}


        public function setData_compra($data_compra)
        {
            $this->data_compra = $data_compra;
        }
        public function setFornecedor($fornecedor)
        {
            $this->fornecedor = $fornecedor;
        }
        public function setComprador($comprador)
        {
            $this->comprador = $comprador;
        }
        public function setItenscompra($itenscompra)
        {
            $this->itenscompra[] = $itenscompra;
        }


        public function getData_compra()
        {
            return $this->data_compra;
        }
        public function getFornecedor()
        {
            return $this->fornecedor;
        }
        public function getComprador()
        {
            return $this->comprador;
        }
        public function getItenscompra()
        {
            return $this->itenscompra;
        }
    }
?>