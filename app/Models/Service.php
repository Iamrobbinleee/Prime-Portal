<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AvailedService;

class Service extends Model
{
    use SoftDeletes;
    
    protected $table = 'services';

    protected $fillable = [
        'service_name',
        'service_url',
        'status',
        'type',
        'reference',
        'basic',
        'plus',
        'premium',
        'developed_by',
        'remarks'
    ];

    public function availedService(){
        return $this->belongsTo(AvailedService::class);
    }
}
