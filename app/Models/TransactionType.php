<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransactionType
 * 
 * @property int $type_id
 * @property string $name
 * @property string $category
 * 
 * @property Collection|Transaction[] $transactions
 *
 * @package App\Models
 */
class TransactionType extends Model
{
	protected $table = 'transaction_types';
	protected $primaryKey = 'type_id';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'category'
	];

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
