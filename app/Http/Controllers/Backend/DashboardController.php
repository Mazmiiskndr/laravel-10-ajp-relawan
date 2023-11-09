<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class DashboardController extends Controller
{

    public function index()
    {
        // $jsonPath = storage_path('app\public\data\relawan_data.json');
        // $jsonData = json_decode(file_get_contents($jsonPath), true)['data'];
        // dd($jsonData);
        return view('backend.dashboard.index');
    }
}
