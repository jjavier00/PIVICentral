<?php

namespace App\Filters;


use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthLogin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (session()->get('u_id')) {
            return redirect()->to('/Home');
        }
        return $request;

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something after the response
    }
}