<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbGeneral
 * 
 * @property int $nr_general
 * @property int $num_general
 * @property int $nr_order
 * @property int $licence_general
 * @property int $cleub_general
 * @property Carbon $dat_naissence_general
 * @property string $cin_general
 * @property string $specialite_general
 * @property string $sexe_general
 * @property string $categorie_general
 * @property float $age
 * @property int $annee_general
 * @property int $master_general
 *
 * @package App\Models
 */
class TbGeneral extends Model
{
	protected $table = 'tb_general';
	protected $primaryKey = 'nr_general';
	public $timestamps = false;

	protected $casts = [
		'num_general' => 'int',
		'nr_order' => 'int',
		'licence_general' => 'int',
		'cleub_general' => 'int',
		'dat_naissence_general' => 'datetime',
		'age' => 'float',
		'annee_general' => 'int',
		'master_general' => 'int'
	];

	protected $fillable = [
		'num_general',
		'nr_order',
		'licence_general',
		'cleub_general',
		'dat_naissence_general',
		'cin_general',
		'specialite_general',
		'sexe_general',
		'categorie_general',
		'age',
		'annee_general',
		'master_general'
	];
}
