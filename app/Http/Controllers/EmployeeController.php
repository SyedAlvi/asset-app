<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function CreateProfile()
    {
        return view ('backend.pages.employee.create-profile');
    }
    public function employeeStore(Request $request)
    { 
        // dd($request->all());
        $request->validate([ 
            'name'=>'required',
            'email'=>'required',
            'password'=> 'required',
            'address'=>'required',
            'city'=> 'required',
            'number'=>'required',

           
        ]);

         
        $image_name='';
        //step 1: check image exist in this request.
        if($request->hasFile('image'))
         // step 2: generate file name
        {
            $image_name=date('Ymdhis').'.'. $request->file('image')->getClientOriginalExtension();
        
             //step 3 : store into project directory
            $request->file('image')->storeAs('/uploads/users',$image_name);
        }
        // dd($request->all());
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>bcrypt( $request->password),
            'address'=>$request->address,
            // 'category'=> $request->category,
            'city'=> $request->city,
            'number'=> $request->number,
            'image'=>$image_name,
        ]);
    
      
        return redirect()->route('employee.list')->with('success', 'Employee Created Successfully');
}
    
    public function EmployeeList()
    {
        $user=User::all();
        return view ('backend.pages.employee.employee-list',compact('user'));
    }
    

    //For_single_employee_view
    public function viewemployee($employee_id)
    {
        $user= User::find($employee_id);
        return view('backend.pages.employee.single_view',compact('user'));

    }
//Delete_employee------------
    public function deleteemployee($employee_id)
    {
        User::find($employee_id)->delete();
        return redirect()->back()->with('sucecess', 'Employee has beeen Deleted Successfully');
    }
//Employee_update--------
    public function employee_update(Request $request,$user_id)
    {
        $image_name=null;
        //step 1: check image exist in this request.
        if($request->hasFile('image'))
         // step 2: generate file name
        {
            $image_name=date('Ymdhis').'.'. $request->file('image')->getClientOriginalExtension();
        
             //step 3 : store into project directory
            $request->file('image')->storeAs('/uploads/users',$image_name);
        }
     
      $a =  User::find($user_id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>bcrypt( $request->password),
            'address'=>$request->address,
            // 'category'=> $request->category,
            'city'=> $request->city,
            'number'=> $request->number,
            'image'=>$image_name,
        ]);

      
        return redirect()->route('employee.list')->with('success', 'Employee updated Successfully');
}
public function employee_edit($user_id)
{

$user=User::find($user_id);
return view('backend.pages.employee.employee_update', compact('user'));
}
}
