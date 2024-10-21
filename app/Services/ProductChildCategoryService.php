<?php

namespace App\Services;

use App\Models\ProductChildCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * ProductChildCategoryService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class ProductChildCategoryService
{

    public function get_Product_child_category_List_Data()
    {
        $ProductCategory = ProductChildCategory::query()->with(['ProductSubCategoryName'])->get();
        return $ProductCategory;
    }

    public function get_child_category_store_Data($datas)
    {
        $store = ProductChildCategory::create([
            'name' => $datas['name'],
            'product_sub_categories_id' => $datas['product_sub_categories_id'],
        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'Child Category Inserted!!']);
        }
    }

    public function get_product_child_category_status_change($id)
    {
        $findData = ProductChildCategory::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = ProductChildCategory::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_product_child_category_Update_Data($datas)
    {
        $id = $datas['id'];
        $update = ProductChildCategory::where('id', $id)
            ->update([
                'name' => $datas['name'],
                'product_sub_categories_id' => $datas['product_sub_categories_id'],
            ]);
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'Child Category Updated!!']);
        }
    }
}