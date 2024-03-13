<?php
    class itenscompra
    {
        public function __construct(private string $quantidade = "", 
                                    private array $produto = array()){}


        public function setQuantidade($quantidade)
        {
            $this->quantidade = $quantidade;
        }
        public function setProduto($produto)
        {
            $this->produto[] = $produto;
        }



        public function getQuantidade()
        {
            return $this->quantidade;
        }
        public function getProduto()
        {
            return $this->produto;
        }
    }
?>