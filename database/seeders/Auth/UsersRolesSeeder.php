<?php

namespace Database\Seeders\Auth;

use Database\Traits\TruncateTable;
use Database\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

class UsersRolesSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('users_roles');

        $data = [
            'admin.laravel@pertec.com.bo' => ['administrator', 'authenticated'],
            'usuario.laravel@pertec.com.bo' => ['usuario', 'authenticated'],
            'demo.laravel@pertec.com.bo' => 'authenticated'];

        foreach ($data as $email => $role) {
            /** @var  $user \App\Models\Auth\User\User */
            $user = \App\Models\Auth\User\User::whereEmail($email)->first();

            if (!$user) continue;

            $role = !is_array($role) ? [$role] : $role;

            $roles = \App\Models\Auth\Role\Role::whereIn('name', $role)->get();

            $user->roles()->attach($roles);
        }

        $this->enableForeignKeys();
    }
}
