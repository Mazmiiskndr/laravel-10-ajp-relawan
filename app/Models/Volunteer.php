<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'volunteers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_id',
        'tps_coordinate_id',
        'nik',
        'nkk',
        'name',
        'gender',
        'phone',
        'source',
        'flag',
        'coordinator',
        'is_agree'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_agree' => 'boolean',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    /**
     * Get the TpsCoordinate associated with this model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tpsCoordinate()
    {
        return $this->belongsTo(TpsCoordinate::class, 'tps_coordinate_id', 'id');
    }
}
