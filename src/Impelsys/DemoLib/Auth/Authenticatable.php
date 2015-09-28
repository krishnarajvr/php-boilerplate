<?php

namespace Impelsys\DemoLib\Auth;

trait Authenticatable
{
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthId()
    {
        return $this->getId();
    }
}
