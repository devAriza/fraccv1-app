<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class House
 * 
 * @property int $house_id
 * @property string $address
 * @property string $type
 * @property string|null $status
 * 
 * @property Collection|Event[] $events
 * @property Collection|Resident[] $residents
 * @property Collection|Incident[] $incidents
 * @property Collection|Transaction[] $transactions
 *
 * @package App\Models
 */
class House extends Model
{
	protected $table = 'houses';
	protected $primaryKey = 'house_id';
	public $timestamps = false;

	protected $fillable = [
		'address',
		'type',
		'status'
	];

	public function events()
	{
		return $this->hasMany(Event::class);
	}

	public function residents()
	{
		return $this->belongsToMany(Resident::class, 'house_residents')
					->withPivot('house_resident_id', 'role', 'start_date', 'end_date');
	}

	public function incidents()
	{
		return $this->hasMany(Incident::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
