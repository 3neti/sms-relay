<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobile = '+639173011987';
        $handle = 'LB Hurtado';
        Contact::create(compact('mobile', 'handle'))->syncRoles('forwarder');
    }
}
