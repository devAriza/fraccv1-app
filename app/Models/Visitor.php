<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 * 
 * @property int $visitor_id
 * @property int $resident_id
 * @property string $name
 * @property string $contact_info
 * @property string $qr_code
 * @property Carbon|null $entry_time
 * @property Carbon|null $exit_time
 * @property Carbon|null $created_at
 * 
 * @property Resident $resident
 * @property Collection|Movement[] $movements
 *
 * @package App\Models
 */
class Visitor extends Model
{
	protected $table = 'visitors';
	protected $primaryKey = 'visitor_id';
	public $timestamps = false;

	protected $casts = [
		'resident_id' => 'int',
		'entry_time' => 'datetime',
		'exit_time' => 'datetime'
	];

	protected $fillable = [
		'resident_id',
		'name',
		'contact_info',
		'qr_code',
		'entry_time',
		'exit_time'
	];

	public function resident()
	{
		return $this->belongsTo(Resident::class);
	}

	public function movements()
	{
		return $this->hasMany(Movement::class);
	}
}
