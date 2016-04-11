<?php

namespace App\Http\Controllers;

use App\Calories;
use App\People;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Http\Requests;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Calories::orderBy('created_at','desc')->whereDay('created_at', '=', date('d'))->paginate(10);

        $phones = array();

        foreach($messages as $message){
            array_push($phones, People::find($message->people_id)->phone_number);
        }

        $phones = array_unique($phones);

        return view('admin.messages' , ['messages'=> $messages, 'phones'=> $phones, 'page' => 'messages']);
    }

    public function find($phone)
    {
        $people = People::where('phone_number', (int)$phone)->get()->first();
        $messages = Calories::where('people_id', $people->id)->orderBy('created_at','desc')->whereDay('created_at', '=', date('d'))->paginate(10);

        $phones = array();

        foreach($messages as $message){
            array_push($phones, People::find($message->people_id)->phone_number);
        }

        $phones = array_unique($phones);

        return view('admin.messages', ['messages'=> $messages, 'phones'=> $phones, 'page' => 'messages']);
    }
}
