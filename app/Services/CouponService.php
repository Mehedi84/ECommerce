<?php

namespace App\Services;

use App\Models\Coupon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * CouponService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class CouponService
{

    public function get_coupon_List_Data()
    {
        $Coupon = Coupon::get();
        return $Coupon;
    }

    public function get_coupon_store_Data($datas)
    {
        $store = Coupon::create([
            'name' => $datas['name'],
        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'Coupon Inserted!!']);
        }
    }

    public function get_coupon_status_change($id)
    {
        $findData = Coupon::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = Coupon::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_coupon_Update_Data($datas)
    {
        $id = $datas['id'];
        $update = Coupon::where('id', $id)
            ->update([
                'name' => $datas['name'],
            ]);
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'Coupon Updated!!']);
        }
    }
}
