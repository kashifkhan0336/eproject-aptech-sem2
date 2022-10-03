<?php

use App\Models\Category;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Users;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('fresh', function (){
   Users::factory()->count(1)->create();
    Category::factory()
        ->count(5)
        ->sequence(
            ["name" => "Files & Folders","desc" => "A category of Files & Folders"],
            ["name" => "Arts","desc" => "A category of Arts Items"],
            ["name" => "Dolls", "desc" => "A category of Dolls"],
            ["name" => "Hand Bags","desc"=>"A category of Hand Bags"],
            ["name" => "Greeting Cards", "desc" => "A category of Greeting Cards"]
        )
        ->create();
});
