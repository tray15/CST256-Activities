<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\OrderService;

class OrderController extends Controller
{
    public function addOrder(Request $request) {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $product = $request->input('product');
        $service = new OrderService();
        return $service->createOrder($firstName, $lastName, $product);
    }
}
