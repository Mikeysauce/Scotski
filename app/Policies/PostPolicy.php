<?php

namespace App\Policies;

use App\Post;
use App\User;

class PostPolicy
{
    public function update(User $user, Post $post)
    {
        return $user->owns($post);
    }
}
