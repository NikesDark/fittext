<?php

namespace App\Http\Controllers;

use App\Calories;
use App\Delivery;
use App\People;
use Illuminate\Http\Request;

use App\Http\Requests;

class PeopleController extends Controller
{
    public function index()
    {
        $peoples = People::paginate(10);

        return view('admin.peoples', ['peoples' => $peoples, 'page' => 'peoples']);
    }

    public function delete($id)
    {
        People::destroy($id);
        if(Delivery::where('people_id', $id)->get()->count() > 0){
            $delivery = Delivery::where('people_id', $id)->get()->first();
            $delivery->delete();
        }
        if(Calories::where('people_id', $id)->get()->count() > 0){
            $calories = Calories::where('people_id', $id)->get()->first();
            $calories->delete();
        }

        return redirect('/peoples');
    }
}
