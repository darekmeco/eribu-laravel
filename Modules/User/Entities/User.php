<?php

namespace Modules\User\Entities;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser {

    protected $hidden = ['password'];
    protected $fillable = ['email', 'first_name', 'last_name', 'password'];

}
