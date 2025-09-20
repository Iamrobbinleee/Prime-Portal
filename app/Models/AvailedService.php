<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Service;

class AvailedService extends Model
{   
    use SoftDeletes;

    protected $table = 'availed_services';

    protected $fillable = [
        'service_name',
        'service_url',
        'user_id',
        'account_id',
        'status',
        'type',
        'subscription_start',
        'subscription_end',
        'reference',
        'basic',
        'plus',
        'premium'
    ];
}
