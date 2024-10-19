<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * UsersService
 * @author Mehedi Hasan Shamim <sh158399@gmail.com>
 */
class UsersService
{
    public function get_User_List_Data()
    {
        $users = User::get();
        return $users;
    }

    public function get_User_store_Data($datas)
    {
        $store = User::create([
            'code' => $datas['code'],
            'name' => $datas['name'],
            'email' => $datas['email'],
            'mobile' => $datas['mobile'],
            'gender' => $datas['gender'],
            'password' => Hash::make($datas['password']),

        ]);

        ## return message
        if ($store) {
            return response()->json(['status' => '200', 'msg' => 'User Inserted!!']);
        }
    }

    public function get_User_status_change($id)
    {
        $findData = User::find($id);
        $status = $findData->is_active == '1' ? '0' : '1';
        $resultData = User::where('id', $id)
            ->update(['is_active' => $status]);

        ## return message
        if ($resultData) {
            return response()->json(['status' => '200', 'msg' => 'Status Updated!!']);
        }
    }

    public function get_User_Update_Data($datas)
    {
        $id = $datas['id'];
        if ($datas['password'] != "") {
            $update = User::where('id', $id)
                ->update([
                    'code' => $datas['code'],
                    'name' => $datas['name'],
                    'email' => $datas['email'],
                    'mobile' => $datas['mobile'],
                    'gender' => $datas['gender'],
                    'password' => Hash::make($datas['password']),
                ]);
        } else {
            $update = User::where('id', $id)
                ->update([
                    'code' => $datas['code'],
                    'name' => $datas['name'],
                    'email' => $datas['email'],
                    'mobile' => $datas['mobile'],
                    'gender' => $datas['gender'],
                ]);
        }
        ## return message
        if ($update) {
            return response()->json(['status' => '200', 'msg' => 'User Updated!!']);
        }
    }
}
