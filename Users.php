<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Sarah Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Mark Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Alice Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Kevin Lopez',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}