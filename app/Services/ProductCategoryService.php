<?php

namespace App\Services;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * ProductCategoryService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class ProductCategoryService
{

    public function get_Product_category_List_Data()
    {
        $ProductCategory = ProductCategory::get();
        return $ProductCategory;
    }

    public function get_category_store_Data($datas)
    {
        $store = ProductCategory::create([
            'name' => $datas['name'],
        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'Category Inserted!!']);
        }
    }

    public function get_product_category_status_change($id)
    {
        $findData = ProductCategory::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = ProductCategory::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_product_category_Update_Data($datas)
    {
        $id = $datas['id'];
        $update = ProductCategory::where('id', $id)
            ->update([
                'name' => $datas['name'],
            ]);
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'Category Updated!!']);
        }
    }
}