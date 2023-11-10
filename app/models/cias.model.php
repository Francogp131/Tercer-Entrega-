<?php

        require_once 'app/models/model.php';

class CiasModel extends Model {
 
    /**
     * Obtiene y devuelve de la base de datos todas las cias.
     */
    function getCias($parametro) {

        $sql = 'SELECT * FROM cias ';

        if (isset($parametro['order'])){
            $sql .= ' ORDER BY '.($parametro['order']);

            if (isset($parametro['sort'])){
                $sql .= '  '.($parametro['sort']);
        }
    }
        $query =$this->db->prepare($sql);
        $query->execute();

        // $stros es un arreglo de cias
        $cias = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cias;
    }
    /**
     * Obtiene una cia de la base, dado un id.
     */
    function getCia($id) {
        $query =$this->db->prepare('SELECT * FROM cias where id_Cia = ?' );
        $query->execute([$id]);

        
        $cia = $query->fetch(PDO::FETCH_OBJ);
        
        return $cia;
    }
    /**
     * Elimina una cia de la base, dado un id.
     */
    function deleteCia($id) {
        $query = $this->db->prepare('DELETE FROM cias WHERE id_Cia = ?');
        $query->execute([$id]);
    }


    function getDetalleItem($id) {
        $query = $this->db->prepare("SELECT * FROM siniestros WHERE id_Stros = ?");
        $query->execute([$id]);

        // $tasks es un arreglo de tareas
        $ItemStro = $query->fetch(PDO::FETCH_OBJ);
        
        return $ItemStro;
    }

    /**
     * Inserta una cia en la base de datos
     */
    function insertCia($id_Cia, $nombre_cia, $direccion_cia, $contacto, $email) {
        $query = $this->db->prepare('INSERT INTO cias (id_Cia, nombre_cia, direccion_cia, contacto, email) VALUES(?,?,?,?,?)');
        $query->execute([$id_Cia, $nombre_cia, $direccion_cia, $contacto, $email]);

        return $this->db->lastInsertId(); 
        
    }


    /**
     * Modifica una cia en la base de datos
     */
    function updateCiaData($id, $nombre_cia, $direccion_cia, $contacto, $email) {    
    $query = $this->db->prepare('UPDATE cias SET nombre_cia = ?, direccion_cia = ?, contacto = ?, email = ? WHERE id_Cia = ?');
    $query->execute([$nombre_cia, $direccion_cia, $contacto, $email, $id]);
}
}
?>