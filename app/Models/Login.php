<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Login extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function login($email, $password)
    {
        $data = $this->where('email', $email)->get();

        if ($data->count() >= 1) {
            if (Hash::check($password, $data[0]->password)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
