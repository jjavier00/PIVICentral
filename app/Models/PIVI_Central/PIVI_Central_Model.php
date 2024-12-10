<?php

namespace app\Models\PIVI_Central;

use CodeIgniter\Model;

class PIVI_Central_Model extends Model
{ 
    protected $db;
    protected $str;

    public function __construct() {
        $this->db = \Config\Database::connect(); 
    }

    public function getcurrentdate(): array {
        $sql = "SELECT CURRENT_TIMESTAMP as currentdate";
        $query = $this->db->query($sql);
        $result = $query->getResult();
        return $result;  
    }

    public function GetSystems(){
        $builder = $this->db->table("Systems_List");
        $builder->select("*");
        $builder->orderBy("SL_Sort_Order");
        // $builder->where("SL_Status","Active");

        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function AddSystem($insert_data){
        $this->db->table('Systems_List')->insert($insert_data);
    }

    public function EditSystem($refno,$data){
        $query = $this->db->table('Systems_List');
        $query->where('SL_Ref_No', $refno);
        $query->update($data);
    }

    public function FindSystem($Searchstring){
        $builder = $this->db->table("Systems_List");
        $builder->select("*");
        $builder->like("SL_System_Name",$Searchstring);
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

}
