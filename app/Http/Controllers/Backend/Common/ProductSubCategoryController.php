<?php

namespace App\Http\Controllers\Backend\Common;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Services\UtilityService;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Services\ProductSubCategoryService;
use App\Http\Requests\ProductSubCategoryStoreRequest;
use App\Http\Requests\ProductSubCategoryUpdateRequest;

/**
 * ProductCategoryController
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */

class ProductSubCategoryController extends Controller
{

    private UtilityService $utility_service;
    private ProductSubCategoryService $product_sub_category_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
        $this->product_sub_category_service = new ProductSubCategoryService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadCrumb = $this->utility_service->breadCrumb('Product Sub Category', 'tasks');
        return view('backend.common.productSubCategory.index', ['breadCrumb' => $breadCrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resultData = ProductCategory::where('is_active', '1')->get();
        return view('backend.common.productSubCategory.create', compact(['resultData']))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSubCategoryStoreRequest $request)
    {
        $data = $request->all();
        return $this->product_sub_category_service->get_sub_category_store_Data($data);
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
            $usercategory_list = $this->product_sub_category_service->get_Product_sub_category_List_Data();
            return Datatables::of($usercategory_list)
                ->addColumn('actions', function ($usercategory_list) {
                    $btn = "";
                    $btn = $btn . '<a href="javascript:void(0)" onclick="editModal(' . $usercategory_list->id . ')" class="action-btn mx-2"><i class="bi bi-pen"></i></a>';
                    if ($usercategory_list->is_active == '1') {
                        $btn .= "<a href='javascript:void(0)' class='text-danger p-1' onclick='changeStatus(" . $usercategory_list->id . ")' title='Inactive'><i class='bi bi-x-square margin-right-0'></i></a>";
                    } else {
                        $btn .= "<a href='javascript:void(0)' class='text-success p-1' onclick='changeStatus(" . $usercategory_list->id . ")' title='Active'><i class='bi bi-check-square margin-right-0'></i></a>";
                    }
                    return $btn;
                })
                ->addColumn('statue', function ($usercategory_list) {
                    return status($usercategory_list->is_active);
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
            return $this->product_sub_category_service->get_product_sub_category_status_change($id);
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
        $categorys = ProductCategory::where('is_active', '1')->get();
        $resultData = ProductSubCategory::find($id);
        return view('backend.common.productSubCategory.update', compact(['resultData', 'categorys']))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductSubCategoryUpdateRequest $request)
    {
        $data = $request->all();
        return $this->product_sub_category_service->get_product_sub_category_Update_Data($data);
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