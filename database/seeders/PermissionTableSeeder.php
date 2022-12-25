<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

  

class PermissionTableSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $permissions = [

           'role-list',

           'role-create',

           'role-edit',

           'role-delete',

           'property-list',

           'property-create',

           'property-edit',

           'property-delete',

           'approve-property', 

           'disapprove-property',

           'review-property',

           'create-blog',

           'update-blog',

           'delete-blog',

           'edit-blog',

           'list-user',

           'block-user',

           'approve-agent',

           'Review-agent', 

           'disapprove-agent', 


        ];

      

        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}