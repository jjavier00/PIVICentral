<?php
namespace app\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Session\Session;
use Config\Services;


use App\Models\System\CompanyModel;
use App\Models\Users\UserModel;
use Exception;

class Authentication extends BaseController
{
    protected IncomingRequest|CLIRequest $postRequest;
    protected CompanyModel $companyModel;
    protected UserModel $userModel;

    public function __construct()
    {
        $this->companyModel = new CompanyModel();
        $this->userModel = new UserModel();
        $this->postRequest = Services::request();
    }

    public function index() 
    {
        if (!session()->has('companydetails')) {
            $data['companydetails'] = $this->companyModel->loadDefaultCompany();
            session()->set('companydetails', $data['companydetails']);
             
        }

        // return view('index');
        // route_to('Home');
    }

    public function Login_validation() : string
    {
        try {

            $requestJson = $this->postRequest->getJSON();

            $data = [
                $requestJson->Uname,
                sha1(md5($requestJson->Password))
            ];

            $result =  $this->userModel->userAuthorization($data);

            return $this->resultMessage($result);

        } catch (Exception $e) {

            $response = [

                'title' => 'Error',
                'status' => 400,
                'Message' => $e->getMessage()

            ];

            return json_encode($response);
        }

    }

    private function resultMessage($result) : string
    {
            if(count($result) == 0){
                $response = [

                    'title' => 'Error',
                    'status' => 404,
                    'Message' => 'Incorrect Username or Password Please Check and Try Again!'

                ];

                return json_encode($response);
            }

            if($result[0]['STATUS'] == 0) {

                $response = [

                    'title' => 'Error',
                    'status' => 404,
                    'Message' => 'Account Deactivated!'

                ];

                return json_encode($response);
            }


            return  $this->Create_Session($result);
    }

    private function Create_Session($result): string
    {

        try {
            ini_set('memory_limit', '512M');

            $fullname = explode(' ', $result[0]['FULLNAME']);

            $initial = strtoupper(substr($fullname[0], 0,1) . substr(end($fullname), 0,1));

            //$log_id = $this->userModel->SaveUserLogs($result[0]['DID'], $this->postRequest->getIPAddress());

            $dataParam = [
                'u_id' => $result[0]['DID'],
                'u_pass' => $this->postRequest->getJSON()->Password,
                'name' => $result[0]['FULLNAME'],
                'initial' => $initial,
                'uname' => $result[0]['USERNAME'],
                'userlevel' => $result[0]['USER_LEVEL'],
                'userAccount' => $result[0]['grp_name'],
                'email' => $result[0]['EMAIL_ADD'], 
                'Company'  => $result[0]['Company_Code'],
                'IsLogIn' => true
            ];

            session()->set($dataParam);

            $response = [
                'title' => 'Success',
                'status' => 200,
                'Message' => 'Welcome '.$result[0]['FULLNAME'],
                'data' => $result,
            ];


            return json_encode($response);

        } catch (Exception $e) {

            $response = [

                'title' => 'Error',
                'status' => 400,
                'Message' => $e->getMessage()

            ];

            return json_encode($response);
        }

    }


    public function logOut() : string
    {
        session()->destroy();

        $response = [
            'title' => 'Success',
            'status' => 200,
            'Message' => 'Successfully Logout',
        ];

        return json_encode($response);
    }




}
