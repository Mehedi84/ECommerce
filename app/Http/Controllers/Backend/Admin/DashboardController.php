<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Http\Request;
use App\Services\UtilityService;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    ## Service properties
    private UtilityService $utility_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //define breadcrumb 
        $breadCrumb = $this->utility_service->breadCrumb('Dashboard', 'Dashboard', 'List', 'home');

        return view('backend.admin.dashboard', ['breadCrumb' => $breadCrumb]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advisor()
    {
        //define breadcrumb 
        $breadCrumb = $this->utility_service->breadCrumb('Dashboard', 'Dashboard', 'List', 'home');

        return view('backend.admin.dashboard-advisor', ['breadCrumb' => $breadCrumb]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function supervisor()
    {
        //define breadcrumb 
        $breadCrumb = $this->utility_service->breadCrumb('Dashboard', 'Dashboard', 'List', 'home');

        return view('backend.admin.dashboard-supervisor', ['breadCrumb' => $breadCrumb]);
    }
}
