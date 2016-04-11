<?php

namespace App\Http\Controllers;

use App\Calories;
use App\Message;

use App\People;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $log = $request->all();
        $phoneNumber = (int)$log['sender'];
        $message = (string)$log['text'];

        //$phoneNumber = 14046831138;
        //$message = '5';


        if(People::checkIsNewPeople($phoneNumber)){
            $people = new People();
            $people->phone_number = $phoneNumber;
            $people->save();

            Message::sendMessage($phoneNumber, 'Hi there! Welcome to FitText. Simply text us what you eat and the following morning we will send a snapshot of your diet. Before we get started, we have a few questions');
            sleep(10);
        }

        //// Activity
        if(People::checkQuestionActivity($phoneNumber)){
            Message::sendMessage($phoneNumber, 'How active are you on a 1-5 scale (eg. 1 sedentary,  5 training for a marathon)');
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->activity = '###proccess###';
            $people->save();
            exit;
        }
        if(People::checkActivity($phoneNumber)){
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->activity = $message;
            $people->save();
        }


        /////Gender
        if(People::checkQuestionGender($phoneNumber)){
            Message::sendMessage($phoneNumber, 'Are you male or female?');
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->gender = '###proccess###';
            $people->save();
            exit;
        }
        if(People::checkGender($phoneNumber) == '###proccess###'){
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->gender = $message;
            $people->save();
        }


        /////////Age
        if(People::checkQuestionAge($phoneNumber)){
            Message::sendMessage($phoneNumber, 'How old are you?');
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->age = '###proccess###';
            $people->save();
            exit;
        }
        if(People::checkAge($phoneNumber) == '###proccess###'){
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->age = $message;
            $people->save();
        }


        ////////Weight
        if(People::checkQuestionWeight($phoneNumber)){
            Message::sendMessage($phoneNumber, 'How much do you weigh?');
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->weight = '###proccess###';
            $people->save();
            exit;
        }
        if(People::checkWeight($phoneNumber) == '###proccess###'){
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->weight = $message;
            $people->save();
        }


        ////////Tall
        if(People::checkQuestionTall($phoneNumber)){
            Message::sendMessage($phoneNumber, 'How tall are you??');
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->tall = '###proccess###';
            $people->save();
            exit;
        }
        if(People::checkTall($phoneNumber) == '###proccess###'){
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $people->tall = $message;
            $people->save();
            Message::sendMessage($phoneNumber, 'Okay well lets get started – text us what you eat and we’ll take care of tracking your calories. Oh and by the way the more specific you are the more accurate we will be ☺. ');

            exit;
        }


        ////ALL

        if(People::haveAllComplete($phoneNumber)){
            $people = People::where('phone_number', $phoneNumber)->get()->first();
            $calories = Calories::create();
            $calories->people_id = (int)$people->id;
            $calories->message = $message;
            $calories->save();
            Message::sendMessage($phoneNumber, 'Mmm!');
            exit;
        }



    }
}
