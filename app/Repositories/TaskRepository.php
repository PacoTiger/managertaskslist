<?php
/**
 * Created by PhpStorm.
 * User: paco_
 * Date: 11/09/2017
 * Time: 13:29
 */

namespace App\Repositories;

use App\User;


class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}