<?php

namespace parzival42codes\LaravelUserManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class RecoverPasswordController extends Controller
{
    protected Response $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function show(string $fileName): Response
    {
    }
}
