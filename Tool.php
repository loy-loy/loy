<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tools_name', 'tools_Brand', 'serial_number', 'Quantity', 'Qualification',
    ];
    //
}
