<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;
    use  TwoFactorAuthenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'family',
        'mobile',
        'status',
        'parent',
        'type',
        'theme',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function superuser()
    {
        return $this->superuser;
    }
    public function staff()
    {
        return $this->staff;
    }
    public function post()
    {
        return $this->hasMany(post::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function Service()
    {
        return $this->hasMany(Service::class);
    }
    public function Customer()
    {
        return $this->hasMany(Customer::class);
    }
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
    public function term()
    {
        return $this->hasMany(Term::class);
    }
    public function video()
    {
        return $this->hasMany(Video::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function validorder()
    {
        return $this->order->where('status', 1);
    }
    public function getnfAttribute()
    {
        return $this->name . ' ' . $this->family;
    }
    public function transactions()
    {
        return $this->hasMany(Wallet::class);
    }

    public function validTransactions()
    {
        return $this->transactions()->where('status', 1);
    }
    public function credit()
    {
        return $this->validTransactions()
            ->where('type', 'credit')
            ->sum('amount');
    }
    public function debit()
    {
        return $this->validTransactions()
            ->where('type', 'debit')
            ->sum('amount');
    }
    public function balance()
    {
        return $this->credit() - $this->debit();
    }
    public function allowWithdraw($amount): bool
    {
        return $this->balance() >= $amount;
    }
    public function activeCode()
    {
        return $this->hasMany(ActiveCode::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    public function getPicAttribute()
    {
        if (! $this->attributes['pic']) {
            return '/assets/images/man.png';
        }

        return $this->attributes['pic'];
    }
}

