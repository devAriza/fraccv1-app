<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $notice_id
 * @property string $title
 * @property string $category
 * @property Carbon|null $event_day
 * @property Carbon|null $event_hour_start
 * @property Carbon|null $event_hour_end
 * @property string|null $priority
 * @property int $house_id
 * @property Carbon|null $created_at
 * 
 * @property House $house
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'events';
	protected $primaryKey = 'notice_id';
	public $timestamps = false;

	protected $casts = [
		'event_day' => 'datetime',
		'event_hour_start' => 'datetime',
		'event_hour_end' => 'datetime',
		'house_id' => 'int'
	];

	protected $fillable = [
		'title',
		'category',
		'event_day',
		'event_hour_start',
		'event_hour_end',
		'priority',
		'house_id'
	];

	public function house()
	{
		return $this->belongsTo(House::class);
	}
}
