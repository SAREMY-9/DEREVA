<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sellers; 


class SearchController extends Controller
{

      public function search(Request $request)
      {

         $verify=$request->validate([
            
          'TDB'=>'required|exists:sellers,username',

         //  'search'=>'required|exists:admins,name',  


         ]);
         
         $user=Sellers::where('username',$verify)->first();

         //check if user exists
         if($user){

            //user found

            return view('search', compact('user'));

         }

         else{

            //user not found
                
            return back()->with('error','User does not exist in our system');

        
         }

         

      }
    
}
