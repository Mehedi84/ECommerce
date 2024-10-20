<?php

namespace App\Services;

use App\Models\ProductSubCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * ProductSubCategoryService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class ProductSubCategoryService
{

    public function get_Product_sub_category_List_Data()
    {
        $ProductCategory = ProductSubCategory::query()->with(['ProductCategoryName'])->get();
        return $ProductCategory;
    }

    public function get_sub_category_store_Data($datas)
    {
        $store = ProductSubCategory::create([
            'name' => $datas['name'],
            'product_categories_id' => $datas['product_categories_id'],
        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'Sub Category Inserted!!']);
        }
    }

    public function get_product_sub_category_status_change($id)
    {
        $findData = ProductSubCategory::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = ProductSubCategory::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_product_sub_category_Update_Data($datas)
    {
        $id = $datas['id'];
        $update = ProductSubCategory::where('id', $id)
            ->update([
                'name' => $datas['name'],
                'product_categories_id' => $datas['product_categories_id'],
            ]);
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'Sub Category Updated!!']);
        }
    }
}