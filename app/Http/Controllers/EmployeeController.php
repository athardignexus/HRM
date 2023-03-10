<?php

namespace App\Http\Controllers;

use App\Models\EmpAllowanceDetails;
use App\Models\EmpDeductionDetails;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\EmpPersonalDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Employee.Employee_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Employee.AddEmployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*foreach($request->allwanace as $key=>$val)
        {

        }
        */
        DB::beginTransaction();
        try{
            $vallidate=$request->validate([
                "fullname"=>"required",
                "role"=>"required",
                "email"=>"required|email",
                "password"=>"required|min:8",
                "confirm_password"=>"required|same:password",
            ]);


            $data=[
               "name"=>$request->input('fullname'),
               "email"=>$request->input('email'),
               "role"=>$request->input('role'),
               "mobileno"=>$request->input('mobileno'),
               //"gender"=>$request->input('gender'),
               "password"=>Hash::make($request->input('password')),
              ];

              if($data=User::create($data))
              {
                $user_id=$data->id;
                $data=$request->all();
                $emp_details=$this->employee_details($data,$user_id);
                //redirect()->back()->withSuccess("Employee addded Successfully");

                //return false;
              }
              DB::commit();
        }
        catch(\Exception $e)
        {
            DB::rollBack();
            echo $e->getMessage();
        }



    }
    public function employee_details(array $data,$user_id)
    {

       $table_id=$user_id;
       //$data_table=;
       // insert Personal Details In Employee Table
         $emp_personal_details= Employee::create([
            'user_id'=>$table_id,
            'guardian_name'=>$data['gaurdian_name'],
            'dob' =>$data['dob'],
            'gender' =>$data['gender'],
            'alternate_contact' =>$data['alternate_contact_number'],
            'id_proof' =>$data['id_proof'],
            'id_proof_no' =>$data['id_proof_number'],
            'account_holder_name' =>$data['account_holder'],
            'account_no' =>$data['account_number'],
            'bank_name' =>$data['bank'],
            'ifsc_code' =>$data['ifce_code'],
            'tax_pay_id' =>$data['tax_id'],
            'basic_pay' =>$data['basic_pay'],
            'pancard' =>$data['pan_card_no']
        ]);
        foreach($data['allwanace'] as $key=>$val)
        {
             $allowance_id=$data['allowance_id'.$key];
            $emp_allowance=EmpAllowanceDetails::create([
                "emp_id"=>$emp_personal_details->id,
                "user_id"=>$table_id,
                "head_id"=>$allowance_id,
                "amount"=>$val
            ]);
        }
        foreach($data['deduction'] as $key=>$val)
        {
             $deduction_id=$data['deduction_id'.$key];
             $emp_deduction=EmpDeductionDetails::create([
                "emp_id"=>$emp_personal_details->id,
                "user_id"=>$table_id,
                "head_id"=>$deduction_id,
                "amount"=>$val
            ]);
        }
        return true;
        //return $data_table;

        //$data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
