<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPoissonCoupePl
 * 
 * @property int $nr_coup
 * @property int $annee_coup
 * @property int $journee_coup
 * @property int $ref_journee_coup
 * @property int $ligue_coup
 * @property int $pool_coup
 * @property int $cleub_coup
 * @property Carbon $dat_coup
 * @property int $lieu_coup
 * @property string $type_journee_coup
 * @property int $nr_plaque_coup
 * @property int $nr_licence_coup
 * @property int $poisson_coup
 * @property int $prise_coup
 * @property float $longueur_vrai_coupe
 * @property float $longueur_coup
 *
 * @package App\Models
 */
class TbPoissonCoupePl extends Model
{
	protected $table = 'tb_poisson_coupe_pl';
	protected $primaryKey = 'nr_coup';
	public $timestamps = false;

	protected $casts = [
		'annee_coup' => 'int',
		'journee_coup' => 'int',
		'ref_journee_coup' => 'int',
		'ligue_coup' => 'int',
		'pool_coup' => 'int',
		'cleub_coup' => 'int',
		'dat_coup' => 'datetime',
		'lieu_coup' => 'int',
		'nr_plaque_coup' => 'int',
		'nr_licence_coup' => 'int',
		'poisson_coup' => 'int',
		'prise_coup' => 'int',
		'longueur_vrai_coupe' => 'float',
		'longueur_coup' => 'float'
	];

	protected $fillable = [
		'annee_coup',
		'journee_coup',
		'ref_journee_coup',
		'ligue_coup',
		'pool_coup',
		'cleub_coup',
		'dat_coup',
		'lieu_coup',
		'type_journee_coup',
		'nr_plaque_coup',
		'nr_licence_coup',
		'poisson_coup',
		'prise_coup',
		'longueur_vrai_coupe',
		'longueur_coup'
	];
}
