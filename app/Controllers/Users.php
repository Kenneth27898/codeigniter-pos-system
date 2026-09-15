<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'juan123',
                'full_name' => 'Juan Dela Cruz',
                'role' => 'Admin'
            ],
            [
                'username' => 'maria123',
                'full_name' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'pedro123',
                'full_name' => 'Pedro Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'ana123',
                'full_name' => 'Ana Garcia',
                'role' => 'Cashier'
            ],
            [
                'username' => 'mark123',
                'full_name' => 'Mark Bautista',
                'role' => 'Staff'
            ]
        ];

        return view('pages/users', [
            'users' => $users
        ]);
    }
}