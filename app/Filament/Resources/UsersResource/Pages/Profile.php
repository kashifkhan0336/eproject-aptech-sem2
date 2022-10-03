<?php

namespace App\Filament\Resources\UsersResource\Pages;

use App\Filament\Resources\UsersResource;
use Filament\Resources\Pages\Page;

class Profile extends Page
{
    protected static string $resource = UsersResource::class;

    protected static string $view = 'filament.resources.users-resource.pages.profile';
}
