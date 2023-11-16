<?php

namespace App\Services;

interface AdminService
{
    function login (string $username, string $password) : bool;
}
