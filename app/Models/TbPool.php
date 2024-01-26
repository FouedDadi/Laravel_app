<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPool
 * 
 * @property int $nr_pool
 * @property string $type_pool
 * @property int $ligue_pool
 * @property string $pool_pool
 *
 * @package App\Models
 */
class TbPool extends Model
{
	protected $table = 'tb_pool';
	protected $primaryKey = 'nr_pool';
	public $timestamps = false;

	protected $casts = [
		'ligue_pool' => 'int'
	];

	protected $fillable = [
		'type_pool',
		'ligue_pool',
		'pool_pool'
	];
}
