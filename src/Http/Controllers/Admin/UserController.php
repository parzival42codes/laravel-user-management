<?php

namespace parzival42codes\laravelResourcesOptimisation\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class UserController extends Controller
{
    public function show(): Renderable
    {
        return view('laravel-user-management::user');
    }
}
