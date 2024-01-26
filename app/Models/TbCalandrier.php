<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCalandrier
 * 
 * @property int $nr_cal
 * @property int $annee_cal
 * @property Carbon $dat_cal
 * @property int $ligue_cal
 * @property int $pool_cal
 * @property int $lieu_cal
 * @property int $journee_cal
 * @property string $type_journee_cal
 * @property string $nature_journee
 *
 * @package App\Models
 */
class TbCalandrier extends Model
{
	protected $table = 'tb_calandrier';
	protected $primaryKey = 'nr_cal';
	public $timestamps = false;

	protected $casts = [
		'annee_cal' => 'int',
		'dat_cal' => 'datetime',
		'ligue_cal' => 'int',
		'pool_cal' => 'int',
		'lieu_cal' => 'int',
		'journee_cal' => 'int'
	];

	protected $fillable = [
		'annee_cal',
		'dat_cal',
		'ligue_cal',
		'pool_cal',
		'lieu_cal',
		'journee_cal',
		'type_journee_cal',
		'nature_journee'
	];
}
