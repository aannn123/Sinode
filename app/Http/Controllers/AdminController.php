<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Registrants;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $success = Registrants::where('status', 'Success')->count();
        $failed = Registrants::where('status', 'Failed')->count();
        $all = Registrants::all()->count();

        $month = [
            'jan' => Registrants::whereMonth('created_at','01')->count(),
            'feb' => Registrants::whereMonth('created_at','02')->count(),
            'mar' => Registrants::whereMonth('created_at','03')->count(),
            'apr' => Registrants::whereMonth('created_at','04')->count(),
            'mei' => Registrants::whereMonth('created_at','05')->count(),
            'jun' => Registrants::whereMonth('created_at','06')->count(),
            'jul' => Registrants::whereMonth('created_at','07')->count(),
            'ags' => Registrants::whereMonth('created_at','08')->count(),
            'sep' => Registrants::whereMonth('created_at','09')->count(),
            'okt' => Registrants::whereMonth('created_at','10')->count(),
            'nov' => Registrants::whereMonth('created_at','11')->count(),
            'des' => Registrants::whereMonth('created_at','12')->count(),
        ];

        $succ = [
            'jan' => Registrants::whereMonth('created_at','01')->where('status','Success')->count(),
            'feb' => Registrants::whereMonth('created_at','02')->where('status','Success')->count(),
            'mar' => Registrants::whereMonth('created_at','03')->where('status','Success')->count(),
            'apr' => Registrants::whereMonth('created_at','04')->where('status','Success')->count(),
            'mei' => Registrants::whereMonth('created_at','05')->where('status','Success')->count(),
            'jun' => Registrants::whereMonth('created_at','06')->where('status','Success')->count(),
            'jul' => Registrants::whereMonth('created_at','07')->where('status','Success')->count(),
            'ags' => Registrants::whereMonth('created_at','08')->where('status','Success')->count(),
            'sep' => Registrants::whereMonth('created_at','09')->where('status','Success')->count(),
            'okt' => Registrants::whereMonth('created_at','10')->where('status','Success')->count(),
            'nov' => Registrants::whereMonth('created_at','11')->where('status','Success')->count(),
            'des' => Registrants::whereMonth('created_at','12')->where('status','Success')->count(),
        ];

        $fail = [
            'jan' => Registrants::whereMonth('created_at','01')->where('status','Failed')->count(),
            'feb' => Registrants::whereMonth('created_at','02')->where('status','Failed')->count(),
            'mar' => Registrants::whereMonth('created_at','03')->where('status','Failed')->count(),
            'apr' => Registrants::whereMonth('created_at','04')->where('status','Failed')->count(),
            'mei' => Registrants::whereMonth('created_at','05')->where('status','Failed')->count(),
            'jun' => Registrants::whereMonth('created_at','06')->where('status','Failed')->count(),
            'jul' => Registrants::whereMonth('created_at','07')->where('status','Failed')->count(),
            'ags' => Registrants::whereMonth('created_at','08')->where('status','Failed')->count(),
            'sep' => Registrants::whereMonth('created_at','09')->where('status','Failed')->count(),
            'okt' => Registrants::whereMonth('created_at','10')->where('status','Failed')->count(),
            'nov' => Registrants::whereMonth('created_at','11')->where('status','Failed')->count(),
            'des' => Registrants::whereMonth('created_at','12')->where('status','Failed')->count(),
        ];
 
        // var_dump($jun);die();
        return view('admin.index')->with([
            'success' => $success,
            'failed' => $failed,
            'all' => $all,
            'month' => $month,
            'succ' => $succ,
            'fail' => $fail,
        ]);
    }

    public function create()
    {
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
