<?php

namespace App\Services;

use App\Models\ProductCategoryType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * ProductCategoryTypeService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class ProductCategoryTypeService
{

    public function get_Product_category_type_List_Data()
    {
        $ProductCategoryType = ProductCategoryType::get();
        return $ProductCategoryType;
    }

    public function get_category_type_store_Data($datas)
    {
        $store = ProductCategoryType::create([
            'name' => $datas['name'],
        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'Category Type Inserted!!']);
        }
    }

    public function get_product_category_type_status_change($id)
    {
        $findData = ProductCategoryType::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = ProductCategoryType::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_product_category_type_Update_Data($datas)
    {
        $id = $datas['id'];
        $update = ProductCategoryType::where('id', $id)
            ->update([
                'name' => $datas['name'],
            ]);
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'User Updated!!']);
        }
    }
}
