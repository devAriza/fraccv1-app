<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resident
 * 
 * @property int $resident_id
 * @property string $name
 * @property string|null $phone
 * @property string $email
 * @property string $password
 * @property int $type_resident_id
 * @property string $qr_code
 * @property Carbon|null $registration_date
 * 
 * @property ResidentsType $residents_type
 * @property Collection|House[] $houses
 * @property Collection|Incident[] $incidents
 * @property Collection|Movement[] $movements
 * @property Collection|Transaction[] $transactions
 * @property Collection|Visitor[] $visitors
 *
 * @package App\Models
 */
class Resident extends Model
{
	protected $table = 'residents';
	protected $primaryKey = 'resident_id';
	public $timestamps = false;

	protected $casts = [
		'type_resident_id' => 'int',
		'registration_date' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'phone',
		'email',
		'password',
		'type_resident_id',
		'qr_code',
		'registration_date'
	];

	public function residents_type()
	{
		return $this->belongsTo(ResidentsType::class, 'type_resident_id');
	}

	public function houses()
	{
		return $this->belongsToMany(House::class, 'house_residents', 'resident_id', 'house_id')
					->withPivot('house_resident_id', 'role', 'start_date', 'end_date');
	}

	public function incidents()
	{
		return $this->hasMany(Incident::class);
	}

	public function movements()
	{
		return $this->hasMany(Movement::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}

	public function visitors()
	{
		return $this->hasMany(Visitor::class);
	}
}
