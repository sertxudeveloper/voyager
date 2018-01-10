<?php

namespace SertxuDeveloper\Voyager\Policies;

use SertxuDeveloper\Voyager\Contracts\User;

class UserPolicy extends BasePolicy
{
    /**
     * Determine if the given model can be viewed by the user.
     *
     * @param \SertxuDeveloper\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function read(User $user, $model)
    {
        // Does this post belong to the current user?
        $current = $user->id === $model->id;

        return $current || $this->checkPermission($user, $model, 'read');
    }

    /**
     * Determine if the given model can be edited by the user.
     *
     * @param \SertxuDeveloper\Voyager\Contracts\User $user
     * @param  $model
     *
     * @return bool
     */
    public function edit(User $user, $model)
    {
        // Does this post belong to the current user?
        $current = $user->id === $model->id;

        return $current || $this->checkPermission($user, $model, 'edit');
    }
}
