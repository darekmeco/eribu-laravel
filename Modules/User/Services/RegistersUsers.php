<?php

namespace Modules\User\Services;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Auth\Events\Registered;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\RegisterRequest;
use function event;

trait RegistersUsers {

    /**
     * Handle a registration request for the application.
     *
     * @param  RegisterRequest  $request
     * @return User
     */
    public function registerUser(RegisterRequest $request): User {
        event(new Registered($user = Sentinel::register($request->all(), true)));
        return $user;
    }

}
