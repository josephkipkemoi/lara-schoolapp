<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;
use App\Notifications\ContactNotification;

class ContactObserver
{
    //
    public function created()
    {
        $administrators = Role::find(3)->user;

        foreach($administrators as $administrator)
        {
            $administrator->notify(new ContactNotification());
        }
    }
}
