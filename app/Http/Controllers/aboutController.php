<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\about;

class aboutController extends Controller
{
    public function about(){
        
        $viewabout = about::all();
      // dd($viewabout);
       return view ('admin.Pages.about',['about'=>$viewabout]);
      }

}
