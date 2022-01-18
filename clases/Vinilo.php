<?php
class Vinilo{
    private $c;
    private $codigo;
    private $nombreAlbum;

    public function __construct()
    {
        require_once('Conectar.php');
        $this->c = new Conectar();
    }

    #GET y SET Generales
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function listarVinilo(){
        $sql = 'SELECT * FROM vinilo';
        $lista = $this->c->listarTodos($sql);
        return $lista;
    }

    public function verVinilo(){
        $sql = 'SELECT * FROM vinilo WHERE codigo = '.$this->codigo;
        $lista = $this->c->listarUno($sql);
        return $lista;
    }
}
?>