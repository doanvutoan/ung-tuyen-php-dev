<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'winners';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'code';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'gift_id',
        'tick',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Get the phone associated with the user.
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class, 'gift_id', 'id');
    }
}
