<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    /** Display staff accounts using temporary static data. */
    public function index(): View
    {
        $users = [
            ['id' => 'USR-001', 'name' => 'Azea Natividad', 'email' => 'azea.natividad@laravelpos.test', 'role' => 'Administrator', 'last_active' => 'Today, 9:42 AM', 'status' => 'Active', 'initials' => 'AN'],
            ['id' => 'USR-002', 'name' => 'Enzo Garcia', 'email' => 'enzo@laravelpos.test', 'role' => 'Store Manager', 'last_active' => 'Today, 8:15 AM', 'status' => 'Active', 'initials' => 'EG'],
            ['id' => 'USR-003', 'name' => 'Althea Ramos', 'email' => 'althea@laravelpos.test', 'role' => 'Cashier', 'last_active' => 'Yesterday, 6:30 PM', 'status' => 'Active', 'initials' => 'AR'],
            ['id' => 'USR-004', 'name' => 'Joaquin Lim', 'email' => 'joaquin@laravelpos.test', 'role' => 'Cashier', 'last_active' => 'Oct 24, 4:18 PM', 'status' => 'Active', 'initials' => 'JL'],
            ['id' => 'USR-005', 'name' => 'Bianca Flores', 'email' => 'bianca@laravelpos.test', 'role' => 'Inventory Clerk', 'last_active' => 'Oct 22, 1:05 PM', 'status' => 'Away', 'initials' => 'BF'],
            ['id' => 'USR-006', 'name' => 'Rafael Dizon', 'email' => 'rafael@laravelpos.test', 'role' => 'Auditor', 'last_active' => 'Oct 18, 10:20 AM', 'status' => 'Inactive', 'initials' => 'RD'],
        ];

        return view('users.index', compact('users'));
    }
}
