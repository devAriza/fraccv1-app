<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 * 
 * @property int $contract_id
 * @property int $house_resident_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string|null $details
 * @property int|null $transaction_id
 * @property string $path_contract
 * 
 * @property HouseResident $house_resident
 * @property Transaction|null $transaction
 *
 * @package App\Models
 */
class Contract extends Model
{
	protected $table = 'contracts';
	protected $primaryKey = 'contract_id';
	public $timestamps = false;

	protected $casts = [
		'house_resident_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'transaction_id' => 'int'
	];

	protected $fillable = [
		'house_resident_id',
		'start_date',
		'end_date',
		'details',
		'transaction_id',
		'path_contract'
	];

	public function house_resident()
	{
		return $this->belongsTo(HouseResident::class);
	}

	public function transaction()
	{
		return $this->belongsTo(Transaction::class);
	}
}
