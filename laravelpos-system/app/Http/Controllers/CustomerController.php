<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    /** Display the customer directory using temporary static data. */
    public function index(): View
    {
        $customers = [
            ['id' => 'CUS-1001', 'name' => 'S.Coups', 'email' => 'scoups@example.com', 'phone' => '+63 917 123 4567', 'joined' => 'Jan 12, 2026', 'orders' => 24, 'spent' => 48650.00, 'status' => 'Active', 'initials' => 'SC'],
            ['id' => 'CUS-1002', 'name' => 'Jeonghan', 'email' => 'jeonghan@example.com', 'phone' => '+63 918 234 5678', 'joined' => 'Feb 03, 2026', 'orders' => 18, 'spent' => 32780.50, 'status' => 'Active', 'initials' => 'JH'],
            ['id' => 'CUS-1003', 'name' => 'Joshua', 'email' => 'joshua@example.com', 'phone' => '+63 919 345 6789', 'joined' => 'Mar 18, 2026', 'orders' => 31, 'spent' => 61420.75, 'status' => 'Active', 'initials' => 'JS'],
            ['id' => 'CUS-1004', 'name' => 'Jun', 'email' => 'jun@example.com', 'phone' => '+63 920 456 7890', 'joined' => 'Apr 09, 2026', 'orders' => 9, 'spent' => 12990.00, 'status' => 'Inactive', 'initials' => 'JN'],
            ['id' => 'CUS-1005', 'name' => 'Hoshi', 'email' => 'hoshi@example.com', 'phone' => '+63 921 567 8901', 'joined' => 'May 27, 2026', 'orders' => 15, 'spent' => 27435.25, 'status' => 'Active', 'initials' => 'HS'],
            ['id' => 'CUS-1006', 'name' => 'Wonwoo', 'email' => 'wonwoo@example.com', 'phone' => '+63 922 678 9012', 'joined' => 'Jun 14, 2026', 'orders' => 12, 'spent' => 19860.00, 'status' => 'Active', 'initials' => 'WW'],
            ['id' => 'CUS-1007', 'name' => 'Woozi', 'email' => 'woozi@example.com', 'phone' => '+63 923 789 0123', 'joined' => 'Jul 08, 2026', 'orders' => 20, 'spent' => 35990.50, 'status' => 'Active', 'initials' => 'WZ'],
            ['id' => 'CUS-1008', 'name' => 'DK', 'email' => 'dk@example.com', 'phone' => '+63 924 890 1234', 'joined' => 'Aug 21, 2026', 'orders' => 7, 'spent' => 10680.00, 'status' => 'Inactive', 'initials' => 'DK'],
            ['id' => 'CUS-1009', 'name' => 'Mingyu', 'email' => 'mingyu@example.com', 'phone' => '+63 925 901 2345', 'joined' => 'Sep 02, 2026', 'orders' => 26, 'spent' => 50120.00, 'status' => 'Active', 'initials' => 'MG'],
            ['id' => 'CUS-1010', 'name' => 'The8', 'email' => 'the8@example.com', 'phone' => '+63 926 012 3456', 'joined' => 'Sep 16, 2026', 'orders' => 19, 'spent' => 38740.00, 'status' => 'Active', 'initials' => 'T8'],
            ['id' => 'CUS-1011', 'name' => 'Seungkwan', 'email' => 'seungkwan@example.com', 'phone' => '+63 927 123 4567', 'joined' => 'Oct 01, 2026', 'orders' => 25, 'spent' => 48950.00, 'status' => 'Active', 'initials' => 'SK'],
            ['id' => 'CUS-1012', 'name' => 'Vernon', 'email' => 'vernon@example.com', 'phone' => '+63 928 234 5678', 'joined' => 'Oct 11, 2026', 'orders' => 20, 'spent' => 40100.00, 'status' => 'Active', 'initials' => 'VN'],
            ['id' => 'CUS-1013', 'name' => 'Dino', 'email' => 'dino@example.com', 'phone' => '+63 929 345 6789', 'joined' => 'Oct 20, 2026', 'orders' => 17, 'spent' => 34980.00, 'status' => 'Active', 'initials' => 'DN'],
        ];

        return view('customers.index', compact('customers'));
    }
}
