<?php

namespace app\Models\System;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user_access';
    protected $db;
    protected $str;

    public function __construct() {
        $this->db = \Config\Database::connect(); 
    }

    public function loadDefaultCompany() : array
    {

        $this->str = 'SELECT * FROM tbl_company';

        $query = $this->db->query($this->str);

        return $query->getResultArray();


    }

}
