<?php

namespace App;

use App\Message;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $fillable = [
        'phone_number',
        'activity',
        'gender',
        'age',
        'weight',
        'tall',
    ];


    /**
     * @param $phoneNumber
     */
    public static function checkIsNewPeople($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() == 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkQuestionActivity($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->activity === '') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function checkActivity($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->activity !== '') {
                if ($people->activity == '###proccess###') {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public static function checkQuestionGender($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->gender === '') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function checkGender($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->gender !== '') {
                if ($people->gender == '###proccess###') {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public static function checkQuestionAge($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->age === '') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function checkAge($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->age !== '') {
                if ($people->age == '###proccess###') {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public static function checkQuestionWeight($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->weight === '') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function checkWeight($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->weight !== '') {
                if ($people->weight == '###proccess###') {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public static function checkQuestionTall($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->tall === '') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function checkTall($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if ($people->tall !== '') {
                if ($people->tall == '###proccess###') {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public static function haveAllComplete($phoneNumber)
    {
        if (People::where('phone_number', $phoneNumber)->get()->count() > 0) {
            $people = People::where('phone_number', $phoneNumber)->get()->first();

            if($people->activity !== '' && $people->gender !== '' && $people->age !== '' && $people->weight !== '' && $people->tall !== ''){
                return true;
            }else{
                return false;
            }

        } else {
            return false;
        }
    }


}
