<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'admin', 'route_segment' => 'admin'],
            ['name' => 'supervisor', 'route_segment' => 'supervisor'],
            ['name' => 'advisor', 'route_segment' => 'advisor'],
        ];

        foreach ($data as $item) {
            Role::create([
                'name' => $item['name'],
                'route_segment' => $item['route_segment'],
                'guard_name' => 'web',
                'is_active' => 1,
            ]);
        }
    }
}
