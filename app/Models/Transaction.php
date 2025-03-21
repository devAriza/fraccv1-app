<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $transaction_id
 * @property float $amount
 * @property Carbon|null $date
 * @property string|null $description
 * @property int $transaction_type_id
 * @property int|null $resident_id
 * @property int $house_id
 * 
 * @property TransactionType $transaction_type
 * @property Resident|null $resident
 * @property House $house
 * @property Contract|null $contract
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';
	protected $primaryKey = 'transaction_id';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'float',
		'date' => 'datetime',
		'transaction_type_id' => 'int',
		'resident_id' => 'int',
		'house_id' => 'int'
	];

	protected $fillable = [
		'amount',
		'date',
		'description',
		'transaction_type_id',
		'resident_id',
		'house_id'
	];

	public function transaction_type()
	{
		return $this->belongsTo(TransactionType::class);
	}

	public function resident()
	{
		return $this->belongsTo(Resident::class);
	}

	public function house()
	{
		return $this->belongsTo(House::class);
	}

	public function contract()
	{
		return $this->hasOne(Contract::class);
	}
}
