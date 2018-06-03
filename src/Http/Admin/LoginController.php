<?php

namespace Nomad\NomadCMS\Http\Admin;

use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('nomadcms::auth.login');
    }
}
