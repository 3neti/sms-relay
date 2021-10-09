<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use LBHurtado\Missive\Models\Contact as BaseContact;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends BaseContact
{
    use HasFactory, HasRoles, Notifiable;

    protected $guard_name = 'web';
}
