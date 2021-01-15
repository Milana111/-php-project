<?php
 class OtdelMap extends BaseMap {
     public arrOtdels(){
        $res = $this->db->query("SELECT otdel_id AS id, name AS
        value FROM otdel");
        
        38
        
        return $res->fetchAll(PDO::FETCH_ASSOC);
     }
     
 }
?>