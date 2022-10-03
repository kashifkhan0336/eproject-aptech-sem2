<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Cvsouth\EloquentInheritance\InheritableModel;
class Users extends Authenticatable implements FilamentUser
{
    use HasFactory;
    public $table = "users";
    protected $fillable = ['username','password','firstName','lastName', 'email','remember_token','role', 'name'];
    protected $hidden = ["password","remember_token"];
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['password']=Hash::make($data['password']);
        return $data;
    }

    public function canAccessFilament(): bool
    {
        if($this->role == "customer"){
            return false;
        }else{
            return true;
        }
        // TODO: Implement canAccessFilament() method.
    }
}
