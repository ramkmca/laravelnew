<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;
class EremployeeController extends Controller
{
     public function index()
    {
		$data = Employee::all();
        return view('employee.list',['employes'=>$data]);
    }

    public function add(Request $request)
    {
         echo $request->name; exit;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|unique:users',
            'address' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }else{
		return response()->json([
            'status' => true,
            'message' => "Post Created successfully!"
            //'post' => $post
        ], 200);
        }
    }
}
