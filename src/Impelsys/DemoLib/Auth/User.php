<?php

namespace Impelsys\DemoLib\Auth;

use Impelsys\DemoLib\Database\Model;

class User extends Model
{
    use Authenticatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * Check the auth user.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public function check($username, $password)
    {
        if (!empty($username) && !empty($password)) {
            return this;
        }

        return false;
    }
}
