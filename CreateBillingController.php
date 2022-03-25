<?php

namespace App\Http\Controllers;
use App\Models\Billing_file;
use Illuminate\Http\Request;


class CreateBillingController extends Controller
   {
    public function createbilling(Request $request){
   //  dump($request);
     return view("auth.createbilling");     
   $billing_file=new Billing_file(); 
   $billing_file->company_name =$request->company_name;
    $billing_file->invoice_date =$request->invoice_date;
    $billing_file->kind_attention =$request->kind_attention;
    $billing_file->file_name =$request->file_name;

    // $billing_file->updated_at = $request->updated_at;
    // $billing_file->created_at = $request->created_at;

    // $request->file('file')->store('file'); 
   
       $request=$billing_file->save();
        if($request){
         return redirect('billinglist');
         
        }
    }
    
}
