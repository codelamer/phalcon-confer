<?php

namespace MicheleAngioni\PhalconConfer\Models;

class RolesPermissions extends \Phalcon\Mvc\Model
{
    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $roles_id;

    /**
     *
     * @var integer
     */
    protected $permissions_id;

    public function initialize()
    {
	$this->setSource('roles_permissions');
    }

    /**
     * Return the Role id.
     *
     * @return int
     */
    public function getRolesId(): int
    {
        return (int)$this->roles_id;
    }

    /**
     * Return the Permission id.
     *
     * @return int
     */
    public function getPermissionsId(): int
    {
        return (int)$this->permissions_id;
    }

}
