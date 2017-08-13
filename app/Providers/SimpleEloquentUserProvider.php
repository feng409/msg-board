<?php
namespace App\Providers;
/**
 * Created by PhpStorm.
 * User: feng
 * Date: 17-8-13
 * Time: 下午9:04
 */
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Str;

class SimpleEloquentUserProvider extends EloquentUserProvider
{
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        return $user->getAuthPassword() == $credentials['password'];
    }

}