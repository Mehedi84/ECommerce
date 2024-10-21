<?php

namespace App\Services;

use App\Models\ProductBrand;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * ProductBrandService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class ProductBrandService
{

    public function get_Product_brand_List_Data()
    {
        $ProductBrand = ProductBrand::get();
        return $ProductBrand;
    }

    public function get_brand_store_Data($datas)
    {
        $store = ProductBrand::create([
            'name' => $datas['name'],
        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'Brand Inserted!!']);
        }
    }

    public function get_product_brand_status_change($id)
    {
        $findData = ProductBrand::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = ProductBrand::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_product_brand_Update_Data($datas)
    {
        $id = $datas['id'];
        $update = ProductBrand::where('id', $id)
            ->update([
                'name' => $datas['name'],
            ]);
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'Brand Updated!!']);
        }
    }
}