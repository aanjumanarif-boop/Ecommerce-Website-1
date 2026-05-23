<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{      
 

       public function dashboard()
    {  
      
       return view('customer.customer-dashboard');
    }

      public function customerLogout()
    {
      Auth::logout();
      return redirect('/customer/login');
    }

    public function customerProfileView()
    {
      $authuser = Auth::user();
      return view('customer.profile.profile-view',compact('authuser'));
    }

    public function customerProfileUpdate(Request $request)
    {  
        $authuserId =Auth::user()->id;
        $authuser = User::find($authuserId);
 
       $authuser->name = $request->name;
       $authuser->phone = $request->phone;

        
       $authuser->save(); 
       toastr()->success('customer profile updated successfully');
       return redirect()->back();
    }
}
