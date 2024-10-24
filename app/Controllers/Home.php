<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\ResponseInterface;

use Config\Services;

use App\Models\PIVI_Central\PIVI_Central_Model;

class Home extends BaseController
{
    protected PIVI_Central_Model $PIVI_Central_Model;

    public function __construct()
    {
        $this->PIVI_Central_Model = new PIVI_Central_Model();  

    }

    public function index() 
    {    
        return view('PIVI_Central/PIVI_Central_Dashboard_view');
    }

    public function admin()
    {
        return view('PIVI_Central/PIVI_Central_Admin_view');
    }

    public function GetSystems()
    {
        return json_encode($this->PIVI_Central_Model->GetSystems());
    }

    public function AdminLogin()
    {
        return view('PIVI_Central/PIVI_Central_AdminLogin_view');
    }

    

    public function AddSystem()
    {
        function setDirectoryPermissions($path)
        {
            if (is_writable($path) && is_readable($path)) {

                return chmod($path, 0777);
            }
            return false;
        }
        if ($this->request->getMethod() === 'POST') {

            $sysLabel = $this->request->getPost('sys_label');
            $sysLogo = $this->request->getFile('sys_logo');
            $sysUrl = $this->request->getPost('sys_url');
            $sysDesc = $this->request->getPost('sys_desc');

            if ($sysLogo->isValid() && !$sysLogo->hasMoved()) {
                 
                $sysLogo->move(FCPATH.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR);
                $path = FCPATH.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR . $sysLogo->getName(); 
                $success = setDirectoryPermissions($path);
                if ($success) {
                    
                    echo 'get_current_user: ' . get_current_user() . '<br>';
                    echo 'Path: ' . $path . '<br>';
                    echo 'File Exist '. (file_exists($path) ? 'true' : 'false'). '<br>';
                    echo 'Before is_readable($path): ' . (is_readable($path) ? 'true' : 'false') . '<br>';

                    if (chmod($path, 0777)) {
                        echo 'Permissions updated successfully.<br>';
                    } else {
                        echo 'Failed to update permissions. Error: ' . error_get_last()['message'] . '<br>';
                    }

                    echo 'After is_readable($path): ' . (is_readable($path) ? 'true' : 'false') . '<br>';

                } 
                else {
                    echo "Failed to update permissions.";
                    echo 'Issues:<br>';
                    echo 'path:'.$path.'<br>';
                    print_r(error_get_last(), true);
                }

                // return $this->response->setJSON(['status' => 'success', 'message' => 'File successfully uploaded: ' . $sysLogo->getName()]);
            }

            $data_insert = array(
                'SL_System_Name'    => $sysLabel,
                'SL_Logo'           => 'uploads/'.$sysLogo->getName(),
                'SL_URL'            => $sysUrl,
                'SL_Description'    => $sysDesc,
                // 'SL_Status'         => $sysLabel,
                'SL_Audit_User'     => session('u_id')
                // session('u_id')
            );
            $this->PIVI_Central_Model->AddSystem($data_insert);
 
        }
    }

    public function EditSystem()
    {
        if ($this->request->getMethod() === 'POST') {

            $sysRefno = $this->request->getPost('sys_edit_refno');
            $sysLabel = $this->request->getPost('sys_edit_label');
            $sysLogo = $this->request->getFile('sys_edit_logo');
            $sysUrl = $this->request->getPost('sys_edit_url');
            $sysDesc = $this->request->getPost('sys_edit_desc');
            $sysStatus = $this->request->getPost('sys_edit_status');
            if ($sysLogo->isValid() && !$sysLogo->hasMoved()) {
                // Move the uploaded file to a specific directory
                $sysLogo->move(FCPATH.'\\uploads\\');
                $path = FCPATH.'\\uploads\\'.$sysLogo->getName();
                $success = setDirectoryPermissions($path);
                if ($success) {
                    echo "Permissions updated.";
                } 
                else {
                    echo "Failed to update permissions.";
                    echo 'Issues:<br>';
                    echo 'path:'.$path.'<br>';
                    print_r(error_get_last(), true);
                }

                // return $this->response->setJSON(['status' => 'success', 'message' => 'File successfully uploaded: ' . $sysLogo->getName()]);
            }

            $current_date  = $this->PIVI_Central_Model->getcurrentdate();
            foreach($current_date as $tmp)
            {
                $currentdatetime = $tmp->currentdate;
            }
            if($sysLogo->getName() !=''){
                $data_update = array(
                    'SL_System_Name'    => $sysLabel,
                    'SL_Logo'           => 'uploads/'.$sysLogo->getName(),
                    'SL_URL'            => $sysUrl,
                    'SL_Description'    => $sysDesc,
                    'SL_Status'         => $sysStatus,
                    'SL_Audit_User'     => session('u_id'),
                    'SL_Audit_Date'     => $currentdatetime 
                );
            }else{
                $data_update = array(
                    'SL_System_Name'    => $sysLabel,
                    // 'SL_Logo'           => 'uploads/'.$sysLogo->getName(),
                    'SL_URL'            => $sysUrl,
                    'SL_Description'    => $sysDesc,
                    'SL_Status'         => $sysStatus,
                    'SL_Audit_User'     => session('u_id'),
                    'SL_Audit_Date'     => $currentdatetime 
                );
            }
            
            $this->PIVI_Central_Model->EditSystem($sysRefno,$data_update);
 
        }
    }

    public function FindSystem()
    {
        $SearchString = $this->request->getPost('SearchString');
        return json_encode($this->PIVI_Central_Model->FindSystem($SearchString));
    } 
}
