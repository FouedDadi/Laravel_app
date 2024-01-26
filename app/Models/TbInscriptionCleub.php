<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbInscriptionCleub
 * 
 * @property int $nr_cl_ins
 * @property int $num_cl_ins
 * @property int $annee_cl_ins
 * @property int $cleub_cl_ins
 * @property float $payement_cl_ins
 *
 * @package App\Models
 */
class TbInscriptionCleub extends Model
{
	protected $table = 'tb_inscription_cleub';
	protected $primaryKey = 'nr_cl_ins';
	public $timestamps = false;

	protected $casts = [
		'num_cl_ins' => 'int',
		'annee_cl_ins' => 'int',
		'cleub_cl_ins' => 'int',
		'payement_cl_ins' => 'float'
	];

	protected $fillable = [
		'num_cl_ins',
		'annee_cl_ins',
		'cleub_cl_ins',
		'payement_cl_ins'
	];
}
