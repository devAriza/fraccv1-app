<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IncidentType
 * 
 * @property int $type_id
 * @property string $name
 * @property string|null $description
 * 
 * @property Collection|Incident[] $incidents
 *
 * @package App\Models
 */
class IncidentType extends Model
{
	protected $table = 'incident_types';
	protected $primaryKey = 'type_id';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description'
	];

	public function incidents()
	{
		return $this->hasMany(Incident::class, 'type_id');
	}
}
