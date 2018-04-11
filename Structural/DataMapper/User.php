<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2018/4/11
 * Time: 18:28
 */
namespace Structural\DataMapper;

/**
 *  这是数据库记录在内存的表现层
 *
 *  验证也在该对象中
 */
class User
{
    protected $user_id;

    protected $username;

    protected $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->user_id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
