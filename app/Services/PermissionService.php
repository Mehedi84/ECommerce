<?php

namespace App\Services;

use App\Models\Module;
use Illuminate\Support\Facades\DB;

/**
 * PermissionService
 * @author Md. Amzad Hossain Jacky <amzadhossain1922@gmail.com>
 */
class PermissionService
{

    /**
     * get_permission_lists method returns list of role permission in array
     * @param int $id
     * @return array
     */
    public function get_permission_lists(): array
    {
        return [
            'setting_menu' => [
                'parent_checked' => 1,
                'label' => 'setting menu permissions',
                'list' => [
                    ['name' => 'setting-menu-list', 'checked' => 1],
                ],
            ],
            'roles' => [
                'parent_checked' => 1,
                'label' => 'role permissions',
                'list' => [
                    ['name' => 'role-list', 'checked' => 1],
                    ['name' => 'role-create', 'checked' => 1],
                    ['name' => 'role-edit', 'checked' => 1],
                    ['name' => 'role-delete', 'checked' => 1],
                ],
            ],
            'users' => [
                'parent_checked' => 1,
                'label' => 'user permissions',
                'list' => [
                    ['name' => 'users-show', 'checked' => 1],
                    ['name' => 'users-create', 'checked' => 1],
                    ['name' => 'users-edit', 'checked' => 1],
                    ['name' => 'users-status-change', 'checked' => 1],
                ],
            ],
            'product' => [
                'parent_checked' => 1,
                'label' => 'product menu permissions',
                'list' => [
                    ['name' => 'product-menu-list', 'checked' => 1],
                ],
            ],
            'Product category' => [
                'parent_checked' => 1,
                'label' => 'Product category permissions',
                'list' => [
                    ['name' => 'product-category-show', 'checked' => 1],
                    ['name' => 'product-category-create', 'checked' => 1],
                    ['name' => 'product-category-edit', 'checked' => 1],
                    ['name' => 'product-category-status-change', 'checked' => 1],
                ],
            ],
            'Product Sub category' => [
                'parent_checked' => 1,
                'label' => 'Product Sub category permissions',
                'list' => [
                    ['name' => 'product-subcategory-show', 'checked' => 1],
                    ['name' => 'product-subcategory-create', 'checked' => 1],
                    ['name' => 'product-subcategory-edit', 'checked' => 1],
                    ['name' => 'product-subcategory-status-change', 'checked' => 1],
                ],
            ],
            'Product Child category' => [
                'parent_checked' => 1,
                'label' => 'Product Child category permissions',
                'list' => [
                    ['name' => 'product-child-category-show', 'checked' => 1],
                    ['name' => 'product-child-category-create', 'checked' => 1],
                    ['name' => 'product-child-category-edit', 'checked' => 1],
                    ['name' => 'product-child-category-status-change', 'checked' => 1],
                ],
            ],
            'Product brand' => [
                'parent_checked' => 1,
                'label' => 'Product brand permissions',
                'list' => [
                    ['name' => 'product-brand-show', 'checked' => 1],
                    ['name' => 'product-brand-create', 'checked' => 1],
                    ['name' => 'product-brand-edit', 'checked' => 1],
                    ['name' => 'product-brand-status-change', 'checked' => 1],
                ],
            ],
        ];
    }

    /**
     * get_permission_lists method returns list of role permission in array
     * @param int $id
     * @return array
     */
    public function get_permission_lists_by_modules()
    {
        $modules = Module::with('permissions')->get();
        return $modules;
    }

    /**
     * get_db_permission_ds method returns list of permissions by associate role id 
     * @param int $id
     * @return array
     */
    public function get_db_role_permission_ds($id): array
    {
        $db_role_permission_ds = DB::table('role_has_permissions')->where('role_id', $id)->get()->pluck('permission_id')->toArray();

        return $db_role_permission_ds;
    }
}