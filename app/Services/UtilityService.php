<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

/**
 * UtilityService
 * @author Md. Amzad Hossain Jacky <amzadhossain1922@gmail.com>
 */
class UtilityService
{

    /**
     * @param string $itemMethod
     * @param string $itemIcon
     * @return breadCrumb
     */
    public function breadCrumb($itemMethod, $itemIcon)
    {
        // fetch role
        $route_segment = Session::get('route_segment');

        $breadCrumb = [
            'item' => ucfirst($route_segment),
            'itemMethod' => $itemMethod,
            'itemIcon' => _icons($itemIcon),
        ];

        return $breadCrumb;
    }
}
