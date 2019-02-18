<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class OrderManageController extends Controller
{
    public function OrderManageContent(){

         $OrderInfos= Order::with("customer")->select("*")->get();
		return view ("admin.order.orderManageContent",compact("OrderInfos"));
	}

	public function OrderEditContent($id){
	   $orderDetailInfo=Order::with("customer","shiping","orderDetails","paymentType")->findOrFail($id);
	     return view("admin.order.OrderViewContent",compact('orderDetailInfo'));
	}




	public function deleteOrder($id){
	    Order::where("id", $id)->delete();



	}
}
