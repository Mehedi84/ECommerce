<?php

namespace App\Http\Controllers\Backend\Common;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UsersService;
use App\Services\UtilityService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersStoreRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UsersUpdateRequest;

class UserController extends Controller
{
    private UtilityService $utility_service;
    private UsersService $users_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
        $this->users_service = new UsersService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadCrumb = $this->utility_service->breadCrumb('User', 'User', 'List', 'user');
        return view('backend.common.users.index', ['breadCrumb' => $breadCrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.common.users.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {
        $data = $request->all();
        return $this->users_service->get_User_store_Data($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $user_list = $this->users_service->get_User_List_Data();
            return Datatables::of($user_list)
                ->addColumn('actions', function ($user_list) {
                    $btn = "";
                    $btn = $btn . '<a href="javascript:void(0)" onclick="editModal(' . $user_list->id . ')" class="action-btn mx-2"><i class="bi bi-pen"></i></a>';
                    if ($user_list->is_active == '1') {
                        $btn .= "<a href='javascript:void(0)' class='text-danger p-1' onclick='changeStatus(" . $user_list->id . ")' title='Inactive'><i class='bi bi-x-square margin-right-0'></i></a>";
                    } else {
                        $btn .= "<a href='javascript:void(0)' class='text-success p-1' onclick='changeStatus(" . $user_list->id . ")' title='Active'><i class='bi bi-check-square margin-right-0'></i></a>";
                    }
                    return $btn;
                })
                ->addColumn('statue', function ($user_list) {
                    return status($user_list->is_active);
                })
                ->addColumn('genderData', function ($user_list) {
                    if ($user_list->gender == '1') {
                        return "Male";
                    } else if ($user_list->gender == '2') {
                        return "Female";
                    } else {
                        return "Others";
                    }
                })
                ->rawColumns(['actions', 'statue', 'genderData'])
                ->make(true);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusChange($id)
    {
        if (!empty($id)) {
            return $this->users_service->get_User_status_change($id);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultData = User::find($id);
        return view('backend.common.users.update', compact(['resultData']))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request)
    {
        $data = $request->all();
        return $this->users_service->get_User_Update_Data($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
