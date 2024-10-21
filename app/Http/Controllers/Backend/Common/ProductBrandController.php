<?php

namespace App\Http\Controllers\Backend\Common;

use App\Models\ProductBrand;
use Illuminate\Http\Request;
use App\Services\UtilityService;
use App\Http\Controllers\Controller;
use App\Services\ProductBrandService;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ProductBrandUpdateRequest;

/**
 * ProductBrandController
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class ProductBrandController extends Controller
{

    private UtilityService $utility_service;
    private ProductBrandService $product_brand_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
        $this->product_brand_service = new ProductBrandService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadCrumb = $this->utility_service->breadCrumb('Product Brand', 'tasks');
        return view('backend.common.productBrand.index', ['breadCrumb' => $breadCrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.common.productBrand.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductBrandUpdateRequest $request)
    {
        $data = $request->all();
        return $this->product_brand_service->get_brand_store_Data($data);
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
            $resultData = $this->product_brand_service->get_Product_brand_List_Data();
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
            return $this->product_brand_service->get_product_brand_status_change($id);
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
        $resultData = ProductBrand::find($id);
        return view('backend.common.productBrand.update', compact(['resultData']))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductBrandUpdateRequest $request)
    {
        $data = $request->all();
        return $this->product_brand_service->get_product_brand_Update_Data($data);
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