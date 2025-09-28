<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AvailedService;
use App\Models\Service;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'account_id',
        'orgnization',
        'password',
        'logged_out_at',
        'session_key',
        'active_at',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'session_key',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $superadmins = ['superadmin1@example.com'];

    public function isSuperAdmin(){
        return $this->role == 'superadmin';
    }

    public function validSuperAdmin(){
        // return in_array($this->username, $this->superadmins);
        return in_array(strtolower($this->email), array_map("strtolower", $this->superadmins));
    }

    public function isAdmin(){
        return $this->role == 'admin';
    }
    public function isNormal(){
        return $this->role == 'normal';
    }

    public function availedServices(){
        return $this->hasMany(AvailedService::class);
    }
}
