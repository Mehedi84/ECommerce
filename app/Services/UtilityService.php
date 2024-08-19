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
     * @param string $title
     * @param string $itemActive
     * @param string $itemMethod
     * @param string $itemIcon
     * @return breadCrumb
     */
    public function breadCrumb($title, $itemActive, $itemMethod, $itemIcon)
    {
        // fetch role
        $route_segment = Session::get('route_segment');

        $breadCrumb = [
            'title' => $title,
            'item' => ucfirst($route_segment),
            'itemActive' => $itemActive,
            'itemMethod' => $itemMethod,
            'itemIcon' => _icons($itemIcon),
        ];

        return $breadCrumb;
    }
}
