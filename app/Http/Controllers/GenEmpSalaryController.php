<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenEmpSalaryController extends Controller
{
    public function genform()
    {
        return view('admin.Salary.GenSalaryForm');
    }
    public function emp_list(Request $request)
    {
        return $request;
    }
}
