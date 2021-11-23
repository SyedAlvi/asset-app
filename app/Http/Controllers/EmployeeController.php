<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function CreateProfile()
    {
        return view ('backend.pages.create-profile');
    }
    public function EmployeeList()
    {
        return view ('backend.pages.employee-list');
    }
    
}
