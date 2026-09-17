<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'Eduard Lenin',
                'email' => 'zduard@email.com',
                'phone' => '09171234567'
            ],
            [
                'fullname' => 'Zildjian Zedong',
                'email' => 'zildjian@email.com',
                'phone' => '09182345678'
            ],
            [
                'fullname' => 'Glenn Marx',
                'email' => 'glenn@email.com',
                'phone' => '09193456789'
            ],
            [
                'fullname' => 'Mark Engels',
                'email' => 'mark@email.com',
                'phone' => '09204567890'
            ],
            [
                'fullname' => 'Che Fidel',
                'email' => 'che@email.com',
                'phone' => '09215678901'
            ]
        ];

        return view('customers', $data);
    }
}