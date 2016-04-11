<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\People;
use Illuminate\Http\Request;

use App\Http\Requests;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::orderBy('created_at','desc')->paginate(10);

        return view('admin.delivery', ['deliveries' => $deliveries, 'page' => 'delivery']);
    }

    public function add()
    {
        $peoples = People::all();

        return view('admin.add_delivery', ['peoples' => $peoples, 'page' => 'delivery']);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $people_id = $data['people_id'];
        $message = $data['message'];

        $delivery = Delivery::create();
        $delivery->people_id = $people_id;
        $delivery->message = $message;
        $delivery->save();

        return redirect('/delivery');
    }

    public function delete($id)
    {
        Delivery::destroy($id);

        return redirect('/delivery');
    }
}
