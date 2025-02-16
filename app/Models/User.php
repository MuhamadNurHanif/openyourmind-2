<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $guard_name = 'web';

    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function updateProfilePhoto($photo)
    {
        if ($this->profile_photo_path) {
            Storage::delete($this->profile_photo_path);
        }

        $path = $photo->store('profile-photos', 'public');

        $this->update(['profile_photo_path' => $path]);

        return $path;
    }
}
