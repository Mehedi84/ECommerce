<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * LoginController
 * @author Md. Amzad Hossain Jacky <amzadhossaina1922@gmail.com>
 */
class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the form of login.
     * @return void
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        ## Validate
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);

        try {
            ## Attempt to login
            if (Auth::attemptWhen(['email' => $request->email, 'password' => $request->password])) {
                $user = User::with(['roles'])->find(auth()->id());

                $session_inputs = [
                    'user_full_name' => $user->name,
                    'user_email' => $user->email,
                    'role' => $user->first_role,
                    'route_segment' => $user->route_segment,
                ];

                session($session_inputs);
                request()->session()->regenerate();
                Toastr::success("Login Successfully", "Success");


                return redirect()->route($session_inputs['route_segment'] . '.dashboard');
            } else {
                Toastr::error("Your Credentials Invalid!", "Warning");
                return redirect()->route('login');
            }
        } catch (\Throwable $th) {
            
            if ($th instanceof RouteNotFoundException) {

                ## Invalidate the user's session
                request()->session()->invalidate();

                ## Regenerate their CSRF token
                request()->session()->regenerateToken();

                return redirect()->route('login');
            }
            Toastr::warning("Your Credentials Invalid!", $th->getMessage());
        }
    }

    /**
     * logout the user
     * @return void
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->flush();
        Toastr::success("Logout Successfully", "Success");
        return redirect()->route('login');
    }
}
