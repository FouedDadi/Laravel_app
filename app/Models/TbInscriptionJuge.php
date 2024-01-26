<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbInscriptionJuge
 * 
 * @property int $nr_ins
 * @property int $num_ins
 * @property int $juge_ins
 * @property Carbon $dat_ins
 * @property int $pool_ins
 * @property int $lieu_ins
 * @property int $journee_ins
 * @property string $type_journee_ins
 * @property string $mis_ins
 * @property int $abs_ins
 * @property int $presence_ins
 * @property int $sect_ins
 * @property string $cat_ins
 * @property string $ville_ins
 * @property int $ref_journee_ins
 * @property int $annee_ins
 *
 * @package App\Models
 */
class TbInscriptionJuge extends Model
{
	protected $table = 'tb_inscription_juge';
	protected $primaryKey = 'nr_ins';
	public $timestamps = false;

	protected $casts = [
		'num_ins' => 'int',
		'juge_ins' => 'int',
		'dat_ins' => 'datetime',
		'pool_ins' => 'int',
		'lieu_ins' => 'int',
		'journee_ins' => 'int',
		'abs_ins' => 'int',
		'presence_ins' => 'int',
		'sect_ins' => 'int',
		'ref_journee_ins' => 'int',
		'annee_ins' => 'int'
	];

	protected $fillable = [
		'num_ins',
		'juge_ins',
		'dat_ins',
		'pool_ins',
		'lieu_ins',
		'journee_ins',
		'type_journee_ins',
		'mis_ins',
		'abs_ins',
		'presence_ins',
		'sect_ins',
		'cat_ins',
		'ville_ins',
		'ref_journee_ins',
		'annee_ins'
	];
}
