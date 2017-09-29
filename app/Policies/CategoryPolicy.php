<?php

namespace App\Policies;

use App\User;
use App\Core\Entities\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\User  $user
     * @param  \App\Core\Entities\Category  $category
     * @return mixed
     */
    public function view(User $user, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param  \App\User  $user
     * @param  \App\Core\Entities\Category  $category
     * @return mixed
     */
    public function update(User $user, Category $category)
    {
        return $user->id === $category->user_id;
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User  $user
     * @param  \App\Core\Entities\Category  $category
     * @return mixed
     */
    public function delete(User $user, Category $category)
    {
        //
    }
}
