<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biblestudy;
class BSController extends Controller
{
    public function tablerequest (Request $request) {

    $bstable = biblestudy::all();
    return view ('/tablerequest', compact ('bstable'));
   }

   public function index (Request $request) {

    $bstable = new biblestudy();
    return view ('/index', compact ('bstable'));
   }

   public function createform (Request $request) {

    $bstable = new biblestudy();
    $bstable->name = $request-> name;
    $bstable->email = $request-> email;
    $bstable->number = $request-> number;
    $bstable->bdate = $request-> bdate;
    $bstable->relaff = $request-> relaff;
    $bstable->bsdate = $request-> bsdate;
    $bstable->bstime= $request-> bstime;
    $bstable->bslocation = $request-> bslocation;
    
   if ($bstable->save()) {
        return redirect ('/thank-you');
   }
        return redirect ('/thank-you');
   }

   public function thankyou (Request $request) {

    $bstable = new biblestudy();
    return view ('/thankyou');
   }
}
