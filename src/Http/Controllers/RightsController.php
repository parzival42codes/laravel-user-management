<?php

namespace parzival42codes\LaravelUserManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Response;

class RightsController extends Controller
{
    protected Response $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}
