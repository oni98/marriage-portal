<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('backend.dashboard.admin');
        }
        
        if (Auth::user()->hasRole('user')) {
            $user = Application::with(['user', 'userPackage', 'userPackage.package'])
                ->whereHas('user', function ($query) {
                    $query->where('id', Auth::id());
                })
                ->first();

            $cvlimit = $user->userPackage?->package?->limit ?? 0;
            $applications = Application::with(['religion', 'maritalStatus', 'education', 'userPackage', 'userPackage.package', 'files'])->where([['status', 1], ['phone', '!=', Auth::user()->phone]])->take($cvlimit)->get();
            
            return view('backend.dashboard.client', ['applications' => $applications]);
        }
    }
}
