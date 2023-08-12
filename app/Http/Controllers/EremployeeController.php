<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EremployeeController extends Controller
{
     public function index()
    {
		$data = Employee::all();
        return view('employee.list',['employes'=>$data]);
    }
}
