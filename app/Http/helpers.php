<?php

use App\Models\Country;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Withdrawal;

if (! function_exists('settings')) {
    function settings($data)
    {
        return Setting::whereName($data)->value('value');
    }
}

if (! function_exists('countries')) {
    function countries()
    {
        $countries = Country::all();
        return $countries->sortBy('name', SORT_ASC);
    }
}

if (! function_exists('withdrawal')) {
    function withdrawal()
    {
        return Withdrawal::whereStatus(0)->where('user_id', auth()->id())->count();
    }
}