<?php

namespace App\Http\Controllers\Admin;

use App;
use Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

	public function showDashboard()
	{
		return view('admin.dashboard');
	}

}