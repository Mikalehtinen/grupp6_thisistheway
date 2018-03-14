<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  //middleware
  public function __construct()
  {//enbart folk som INTE är inloggade som administratörer har tillgång till detta.
    $this->middleware('guest:admin');
  }
  //funktion för att dirigera till vyn.
    public function showLoginForm()
    {
      return view('auth.admin-login');
    }
    //faktisk login funktion.
    public function login(Request $request)
    {
      //validerar datan som vi sätter in i formen.
      $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required'
      ]);
      //försöker att logga in användaren.
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
          /* är inloggningen successful så redirectar vi användaren till deras "intended route"
          *  Intended räknar ut vart du är på väg att gå, så om middleware kickar ut dig och du
          * måste logga in igen så kommer den ta dig dit du var på väg från första början.
          */
          return redirect()->intended(route('admin.dashboard'));
      }
      /*Om det inte är succesful så kommer den redirecta användaren tillbaka till login tillsammans med form datan.
      * Back sätter tillbaka dig till vyn du var på FÖRE middleware kickade ut dig.
      */
      return redirect()->back()->withInput($request->only('email','remember'));
      }
    }
