<?php

namespace Controller;

use Service\Authentication;
use Service\UserRoleService;
use Service\Validator;


class UserRoleController
{
    protected $userole;
    public function __construct($db)
    {
        $this->userole = new UserRoleService($db);
    }

    public function Get($request)
    {
        $auth = Authentication::isAuth();
        if (isset($auth['error'])) return $auth;

        $data = $this->userole->read($auth);
        return $data;
    }

    public function GetUserPermisson()
    {
        $auth = Authentication::isAuth();
        if (isset($auth['error'])) return $auth;

        $data = $this->userole->readpermisson($auth);
        return $data;
    }

    public function GetUserAllPermisson()
    {
        $auth = Authentication::isAuth();
        if (isset($auth['error'])) return $auth;

        $data = $this->userole->readallpermisson();
        return $data;
    }

    public function Post($request)
    {
        $auth = Authentication::getPayload();
        if (isset($auth['error'])) return $auth;
        if (!Authentication::hasPermission('權限管理', $auth['Account'])) return ['error' => '權限不足'];

        $data = $request->getBody();

        $validate = Validator::check(array(
            'RoleId' => ['required'],
            'User' => ['required']
        ), $data);

        if ($validate != '') {
            return $validate;
        } else {
            if ($this->userole->checkinsert($data['User'], $data['RoleId'])) {
                $result = $this->userole->post($data);
                return $result;
            } else {
                return ['error' => '該使用者角色已經存在'];
            }
        }
    }

    public function UpdateUser($request)
    {
        $auth = Authentication::getPayload();
        if (isset($auth['error'])) return $auth;
        if (!Authentication::hasPermission('權限管理', $auth['Account'])) return ['error' => '權限不足'];

        $data = $request->getBody();

        $validate = Validator::check(array(
            'RoleId' => ['required'],
            'User' => ['required']
        ), $data);
        if ($validate != '') {
            return $validate;
        }
        $result = $this->userole->update($data['User'], array('RoleId' => $data['RoleId']));

        return $result;
    }


    public function Delete($request, $id)
    {
        $auth = Authentication::getPayload();
        if (isset($auth['error'])) return $auth;
        if (!Authentication::hasPermission('權限管理', $auth['Account'])) return ['error' => '權限不足'];

        $data = $this->userole->read_single($id);
        if (isset($data['UserRoleId'])) {
            $result = $this->userole->delete($id);
            return $result;
        } else {
            return ['error' => '角色不存在'];
        }
    }

    public function readforall($request)
    {
        $auth = Authentication::getPayload();
        if (isset($auth['error'])) return $auth;
        if (!Authentication::hasPermission('權限管理', $auth['Account'])) return ['error' => '權限不足'];

        $result = $this->userole->readpermissonall();
        return $result;
    }
}
