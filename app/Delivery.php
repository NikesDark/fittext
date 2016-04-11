<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    protected $fillable = [
        'people_id',
        'message'
    ];

    public static function SendDelivery()
    {
        $deliveries = Delivery::all();

        foreach($deliveries as $delivery){
            $message = $delivery->message;
            $phoneNumber = People::find($delivery->people_id)->phone_number;
            Message::sendMessage($phoneNumber, $message);
            Delivery::destroy($delivery->id);
        }
    }
}
