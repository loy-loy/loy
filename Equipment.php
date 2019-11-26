<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'equipment_name', 'equipment_Brand', 'Serial_number', 'Quantity', 'Qualification',
    ];
    //
}
