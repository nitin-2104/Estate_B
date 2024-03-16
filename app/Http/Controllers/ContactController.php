<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Customer;

class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function submit(Request $request)
    {
        // Validate the request...
        /*$request-validate([
            'name' => 'required',
            'email' => 'required', 'email',
            'message' => 'required',    
        ]);*/
        
        // Store the data in database...

        /*echo "<pre>";
         print_r( $request->all());*/

         $customer = new Customer();
         $customer -> name= $request['name'];
         $customer -> email= $request['email'];
         $customer -> message= $request['message']; 
         $customer->save();

        //  return view('welcome');
         return redirect('customer');


    }
}
