<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Incident
 * 
 * @property int $incident_id
 * @property int|null $resident_id
 * @property int $house_id
 * @property string $description
 * @property Carbon $date_reported
 * @property int $is_resolved
 * @property string $priority
 * @property string|null $resolution_details
 * @property int $type_id
 * @property string|null $resolved_by
 * @property Carbon|null $created_at
 * 
 * @property Resident|null $resident
 * @property House $house
 * @property IncidentType $incident_type
 *
 * @package App\Models
 */
class Incident extends Model
{
	protected $table = 'incidents';
	protected $primaryKey = 'incident_id';
	public $timestamps = false;

	protected $casts = [
		'resident_id' => 'int',
		'house_id' => 'int',
		'date_reported' => 'datetime',
		'is_resolved' => 'int',
		'type_id' => 'int'
	];

	protected $fillable = [
		'resident_id',
		'house_id',
		'description',
		'date_reported',
		'is_resolved',
		'priority',
		'resolution_details',
		'type_id',
		'resolved_by'
	];

	public function resident()
	{
		return $this->belongsTo(Resident::class);
	}

	public function house()
	{
		return $this->belongsTo(House::class);
	}

	public function incident_type()
	{
		return $this->belongsTo(IncidentType::class, 'type_id');
	}
}
