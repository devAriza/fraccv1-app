<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ResidentsType
 * 
 * @property int $type_id
 * @property string $name
 * 
 * @property Collection|Resident[] $residents
 *
 * @package App\Models
 */
class ResidentsType extends Model
{
	protected $table = 'residents_type';
	protected $primaryKey = 'type_id';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function residents()
	{
		return $this->hasMany(Resident::class, 'type_resident_id');
	}
}
