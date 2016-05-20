<?php

class PagePermissions
{

    // Used to be easier to add Permissions
    protected static $aliasPermissions = [
        'auth'  => 'AuthUser',
        'guest' => 'GuestUser',
        'admin' => 'AdminUser',
        'mod'   => 'ModUser'
    ];

    protected $pagePermissions = [];

    /**
     * @param array $permissions
     * @return static
     */
    public static function create($permissions = [])
    {
        return (new static)->add($permissions);
    }

    private function addOne($permission, $param_array = [])
    {
        if ($this->isDefined($permission)) {
            if (!$this->alreadyExists($permission)) {
                $this->pagePermissions[self::$aliasPermissions[$permission]] = $param_array;
            }
        }

        return $this;
    }

    public function add($permissions)
    {
        if (!is_array($permissions)) {
            $permissions = array($permissions);
        }

        foreach ($permissions as $key => $value) {

            // If has params
            if (is_array($value)) {
                $this->addOne($key, $value);
            } else {
                $this->addOne($value);
            }

        }

        return $this;
    }

    public function check()
    {
        foreach ($this->pagePermissions as $pagePermission => $params) {
            $class = new $pagePermission();
            call_user_func_array([$class, 'handle'], [$params]);
        }
    }

    /**
     * @param $permission
     * @return bool
     */
    private function isDefined($permission)
    {
        return array_key_exists($permission, self::$aliasPermissions);
    }

    /**
     * @param $permission
     * @return bool
     */
    private function alreadyExists($permission)
    {
        return in_array(self::$aliasPermissions[$permission], $this->pagePermissions);
    }
}
