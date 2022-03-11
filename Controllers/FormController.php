<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {    
        $validatedData = $request->validate([
          //'name' => 'required|min:3|max:20',
          //'email' => 'required|unique:employees',
          //'age' => 'required|max:2',
          //'contact_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          //'adress' => 'required',
         // 'country' => 'required',
        ]);
        $emp = new Employee;
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->age = $request->age;
        $emp->contact_no = $request->contact_no;
        $emp->adress = $request->adress;
        $emp->country = $request->country;
        $emp->save();
        return redirect('form')->with('status', 'Form Data Has Been validated and insert');
    }
}