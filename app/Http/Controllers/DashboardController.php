<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $allOrders = Order::all()->count();
        $activeOrders = Order::where([
            ['progress', 'active'],
            ['payment_status', 'paid']
        ])->count();
        $completeOrders = Order::where('progress', 'complete')->count();
        $feedback = Feedback::all()->count();

        return view('dashboard.index', compact(
            'allOrders',
            'activeOrders',
            'completeOrders',
            'feedback'
        ));
    }
}
