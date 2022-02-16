<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\ContactNotification;

class ContactObserver
{
    //
    public function created()
    {
        // User::where('administrator',1)->notify(new ContactNotification());
    }
}
