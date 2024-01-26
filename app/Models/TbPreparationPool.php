<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPreparationPool
 * 
 * @property int $nr_prepa
 * @property int $num_prepa
 * @property int $lique_prepa
 * @property int $annee_prepa
 * @property int $pool_prepa
 * @property int $cleub_prepa
 *
 * @package App\Models
 */
class TbPreparationPool extends Model
{
	protected $table = 'tb_preparation_pool';
	protected $primaryKey = 'nr_prepa';
	public $timestamps = false;

	protected $casts = [
		'num_prepa' => 'int',
		'lique_prepa' => 'int',
		'annee_prepa' => 'int',
		'pool_prepa' => 'int',
		'cleub_prepa' => 'int'
	];

	protected $fillable = [
		'num_prepa',
		'lique_prepa',
		'annee_prepa',
		'pool_prepa',
		'cleub_prepa'
	];
}
