<?php

namespace App\Http\Controllers\Backend\Common;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Services\CouponService;
use App\Services\UtilityService;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\CouponStoreRequest;
use App\Http\Requests\CouponUpdateRequest;

/**
 * ProductBrandController
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class CouponController extends Controller
{

    private UtilityService $utility_service;
    private CouponService $coupon_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
        $this->coupon_service = new CouponService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadCrumb = $this->utility_service->breadCrumb('Coupon', 'tasks');
        return view('backend.common.coupon.index', ['breadCrumb' => $breadCrumb]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.common.coupon.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponStoreRequest $request)
    {
        $data = $request->all();
        return $this->coupon_service->get_coupon_store_Data($data);
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
            $resultData = $this->coupon_service->get_coupon_List_Data();
            return Datatables::of($resultData)
                ->addColumn('actions', function ($resultData) {
                    $btn = "";
                    $btn = $btn . '<a href="javascript:void(0)" onclick="editModal(' . $resultData->id . ')" class="action-btn mx-2"><i class="bi bi-pen"></i></a>';
                    if ($resultData->is_active == '1') {
                        $btn .= "<a href='javascript:void(0)' class='text-danger p-1' onclick='changeStatus(" . $resultData->id . ")' title='Inactive'><i class='bi bi-x-square margin-right-0'></i></a>";
                    } else {
                        $btn .= "<a href='javascript:void(0)' class='text-success p-1' onclick='changeStatus(" . $resultData->id . ")' title='Active'><i class='bi bi-check-square margin-right-0'></i></a>";
                    }
                    return $btn;
                })
                ->addColumn('statue', function ($resultData) {
                    return status($resultData->is_active);
                })
                ->rawColumns(['actions', 'statue'])
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
            return $this->coupon_service->get_coupon_status_change($id);
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
        $resultData = Coupon::find($id);
        return view('backend.common.productBrand.update', compact(['resultData']))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponUpdateRequest $request)
    {
        $data = $request->all();
        return $this->coupon_service->get_coupon_Update_Data($data);
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
