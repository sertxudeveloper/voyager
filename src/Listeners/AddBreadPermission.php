<?php

namespace SertxuDeveloper\Voyager\Listeners;

use SertxuDeveloper\Voyager\Events\BreadAdded;
use SertxuDeveloper\Voyager\Facades\Voyager;
use SertxuDeveloper\Voyager\Models\Permission;
use SertxuDeveloper\Voyager\Models\Role;

class AddBreadPermission
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Create Permission for a given BREAD.
     *
     * @param BreadAdded $event
     *
     * @return void
     */
    public function handle(BreadAdded $bread)
    {
        if (config('voyager.add_bread_permission') && file_exists(base_path('routes/web.php'))) {
            // Create permission
            //
            // Permission::generateFor(snake_case($bread->dataType->slug));
            $role = Role::where('name', 'admin')->firstOrFail();

            // Get permission for added table
            $permissions = Permission::where(['table_name' => $bread->dataType->name])->get()->pluck('id')->all();

            // Assign permission to admin
            $role->permissions()->attach($permissions);
        }
    }
}
