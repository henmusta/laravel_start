<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
      $config['page_title'] = "Dashboard";
      $page_breadcrumbs = [
        ['url' => '#', 'title' => "Dashboard"],
      ];

    //   $totalterumumkan = Reporting::where('status', 'Terumumkan')->count();
    //   $totalproseskontrak = Reporting::where('status', 'Proses Kontrak')->count();
    //   $totalpelaksanaan = Reporting::where('status', 'Pelaksanaan')->count();
    //   $totalselesai = Reporting::where('status', 'Selesai')->count();

    //   $data = [
    //     'terumumkan' => $totalterumumkan,
    //     'proseskontrak' => $totalproseskontrak,
    //     'pelaksanaan' => $totalpelaksanaan,
    //     'selesai' => $totalselesai,
    //   ];


      return view('backend.dashboard.index', compact('config', 'page_breadcrumbs'));
    }
}
