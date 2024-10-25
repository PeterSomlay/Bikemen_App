<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\Customer_part;
use App\Models\Frame;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorksheetController extends Controller
{
    public function index()
    {
        return view('worksheet');
    }
    public function searchWorker(Request $request)
    {
        $res = Worker::select("worker_name")
                ->where("worker_name","LIKE","%{$request->term}%")
                ->get();

        return response()->json($res);
    }

    public function searchCustomer(Request $request)
    {
        // Model: Customer, Customer_part, Bicycle, Frame, Brand
        $cus = Customer::select("id","customer_first_name","customer_surname","customer_mobil","customer_email","customer_discount","customer_problematic")
                ->where("customer_surname", "LIKE","%{$request->term}%")
                ->get();  //All
        return response()->json($cus);
    }
    //$cusp = Customer_part::select("customer_id","fork_id","rear_shock_id","dropper_post_id","wheel_id","bicycle_id","scooter_id");  // elsőnek meg kell nézni, hogy van e bicycle_id, mert akkor ez kell, ha nincs , akkor meg kell keresni minek van id-je
        //$bic = Bicycle::select("id","frame_id"); // ha van bicycle is, akkor itt megnézni, hogy mi a frame_id-je
        //$fra = Frame::select("id","brand_id","frame_name");
        //$bra = Brand::select("id","brand_name");
}
