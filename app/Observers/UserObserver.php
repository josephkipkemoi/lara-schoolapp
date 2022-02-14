<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Http\Client\Request;

class UserObserver
{
    //
    public function created()
    {
        // auth()->user()->role()->attach(1);
    }
}
