<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HouseResident
 * 
 * @property int $house_resident_id
 * @property int $house_id
 * @property int $resident_id
 * @property string $role
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * 
 * @property House $house
 * @property Resident $resident
 * @property Collection|Contract[] $contracts
 *
 * @package App\Models
 */
class HouseResident extends Model
{
	protected $table = 'house_residents';
	protected $primaryKey = 'house_resident_id';
	public $timestamps = false;

	protected $casts = [
		'house_id' => 'int',
		'resident_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'house_id',
		'resident_id',
		'role',
		'start_date',
		'end_date'
	];

	public function house()
	{
		return $this->belongsTo(House::class);
	}

	public function resident()
	{
		return $this->belongsTo(Resident::class);
	}

	public function contracts()
	{
		return $this->hasMany(Contract::class);
	}
}
