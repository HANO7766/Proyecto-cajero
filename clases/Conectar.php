<?php

class Conectar{
    private $db;

    #Constructor
    public function __construct()
    {
        #Se ejecuta al instanciar clase
        $this->db = new mysqli('localhost', 'root', '', 'storephp');
    }

    public function listarTodos($sql){
        $lista = $this->db->query($sql);
        $this->db->close();
        return $lista->fetch_all(MYSQLI_ASSOC);
    }

    public function listarUno($sql){
        $lista = $this->db->query($sql);
        $this->db->close();
        return $lista->fetch_assoc();
    }
}

?>