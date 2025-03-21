<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movement
 * 
 * @property int $movement_id
 * @property string $qr_code
 * @property string $qr_source
 * @property int|null $resident_id
 * @property int|null $visitor_id
 * @property Carbon|null $movement_time
 * @property string $movement_type
 * @property string|null $device_location
 * 
 * @property Resident|null $resident
 * @property Visitor|null $visitor
 *
 * @package App\Models
 */
class Movement extends Model
{
	protected $table = 'movements';
	protected $primaryKey = 'movement_id';
	public $timestamps = false;

	protected $casts = [
		'resident_id' => 'int',
		'visitor_id' => 'int',
		'movement_time' => 'datetime'
	];

	protected $fillable = [
		'qr_code',
		'qr_source',
		'resident_id',
		'visitor_id',
		'movement_time',
		'movement_type',
		'device_location'
	];

	public function resident()
	{
		return $this->belongsTo(Resident::class);
	}

	public function visitor()
	{
		return $this->belongsTo(Visitor::class);
	}
}
