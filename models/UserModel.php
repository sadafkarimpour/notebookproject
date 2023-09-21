<?php

class UserModel {

    /**
     * شناسه کاربر
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    // ------------------------------------------------------------------------

    /**
     * فیلدهای کلاس کاربر را دریافت کرده و یک رکورد از نوع کاربر در دیتابیس ذخیره می کند
     *
     * @param string $name
     * @param string $lastName
     * @param string $email
     * @param string $username
     * @param string $password
     * @return boolean
     */
    public static function insert($name, $lastName, $email, $username, $password): bool
    {
        return true;
    }

}