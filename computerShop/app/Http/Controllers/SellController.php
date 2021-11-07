<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Sell;
class SellController extends Controller
{
    public function processingList(){
        $orders = Order::where('status','=', 'processing')->get();
      
        return view('pages.employees.sell')
        ->with('orders',$orders);
    }
    
    public function updateStatus(Request $request){
        $var = Order::where('id',$request->id)->first();
        $var->status= "ordered";
        $var->save();
        return redirect()->route('processing.list');
    }
}
