<?php
class Picture
{
    public function getAll(){
        $pictures = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $categorias[] = $fila;
            }
            $result->free();
        }
        return $categorias;
    }

    public function get($categoriaId){
        $id = (int) $this->connection->real_escape_string($categoriaId);
        $query = "SELECT categoria_id, categoria_desc FROM categorias WHERE categoria_id = $categoriaId";
        $r = $this->connection->query($query);
        return $r->fetch_assoc();
    }
    
}