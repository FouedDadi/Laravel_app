<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPoissonChampPl
 * 
 * @property int $nr_champ
 * @property int $num_champ
 * @property int $annee_champ
 * @property int $journee_champ
 * @property int $ref_journee_champ
 * @property int $ligue_champ
 * @property int $pool_champ
 * @property int $cleub_champ
 * @property Carbon $dat_champ
 * @property int $lieu_champ
 * @property string $type_journee_champ
 * @property int $nr_plaque_champ
 * @property int $nr_licence_champ
 * @property int $poisson_champ
 * @property int $prise_champ
 * @property int $poids_reel_champ
 * @property int $poids_champ
 * @property string $categorie_champ
 * @property int $master_champ
 *
 * @package App\Models
 */
class TbPoissonChampPl extends Model
{
	protected $table = 'tb_poisson_champ_pl';
	protected $primaryKey = 'nr_champ';
	public $timestamps = false;

	protected $casts = [
		'num_champ' => 'int',
		'annee_champ' => 'int',
		'journee_champ' => 'int',
		'ref_journee_champ' => 'int',
		'ligue_champ' => 'int',
		'pool_champ' => 'int',
		'cleub_champ' => 'int',
		'dat_champ' => 'datetime',
		'lieu_champ' => 'int',
		'nr_plaque_champ' => 'int',
		'nr_licence_champ' => 'int',
		'poisson_champ' => 'int',
		'prise_champ' => 'int',
		'poids_reel_champ' => 'int',
		'poids_champ' => 'int',
		'master_champ' => 'int'
	];

	protected $fillable = [
		'num_champ',
		'annee_champ',
		'journee_champ',
		'ref_journee_champ',
		'ligue_champ',
		'pool_champ',
		'cleub_champ',
		'dat_champ',
		'lieu_champ',
		'type_journee_champ',
		'nr_plaque_champ',
		'nr_licence_champ',
		'poisson_champ',
		'prise_champ',
		'poids_reel_champ',
		'poids_champ',
		'categorie_champ',
		'master_champ'
	];
}
