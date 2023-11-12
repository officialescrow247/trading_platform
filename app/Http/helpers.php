<?php

use App\Models\Country;
use App\Models\Deposit;
use App\Models\Setting;
use App\Models\Withdrawal;
use App\Models\Transaction;

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

if (! function_exists('ongoing_payment')) {
    function ongoing_payment()
    {
        return Deposit::where('user_id', auth()->id())
            ->where(function ($query) {
                $query->where('status', 0)
                    ->orWhere('status', 3);
            })
            ->get();
    }
}