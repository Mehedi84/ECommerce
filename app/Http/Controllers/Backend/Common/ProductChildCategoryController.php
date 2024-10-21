<?php

namespace App\Http\Controllers\Backend\Common;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Services\UtilityService;
use App\Models\ProductSubCategory;
use App\Http\Controllers\Controller;
use App\Models\ProductChildCategory;
use Yajra\DataTables\Facades\DataTables;
use App\Services\ProductChildCategoryService;
use App\Http\Requests\ProductChildCategoryStoreRequest;
use App\Http\Requests\ProductChildCategoryUpdateRequest;

/**
 * ProductChildCategoryController
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */


class ProductChildCategoryController extends Controller
{

    private UtilityService $utility_service;
    private ProductChildCategoryService $product_child_category_service;

    /**
     * constructor method
     * @return void
     */
    public function __construct()
    {
        $this->utility_service = new UtilityService();
        $this->product_child_category_service = new ProductChildCategoryService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadCrumb = $this->utility_service->breadCrumb('Product Child Category', 'tasks');
        return view('backend.common.productChildCategory.index', ['breadCrumb' => $breadCrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productSubCategorys = ProductSubCategory::where('is_active', '1')->get();
        return view('backend.common.productChildCategory.create', compact(['productSubCategorys']))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductChildCategoryStoreRequest $request)
    {
        $data = $request->all();
        return $this->product_child_category_service->get_child_category_store_Data($data);
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
            $resultData = $this->product_child_category_service->get_Product_child_category_List_Data();
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
            return $this->product_child_category_service->get_product_child_category_status_change($id);
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
        $subCategorys = ProductSubCategory::where('is_active', '1')->get();
        $resultData = ProductChildCategory::find($id);
        return view('backend.common.productChildCategory.update', compact(['resultData', 'subCategorys']))->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductChildCategoryUpdateRequest $request)
    {
        $data = $request->all();
        return $this->product_child_category_service->get_product_child_category_Update_Data($data);
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