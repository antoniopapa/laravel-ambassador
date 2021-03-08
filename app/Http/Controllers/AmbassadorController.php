<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AmbassadorController extends Controller
{
    public function index()
    {
        return User::ambassadors()->get();
    }
}
