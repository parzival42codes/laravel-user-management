<?php

namespace parzival42codes\laravelResourcesOptimisation\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class LoginController extends Controller
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
