<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPoissonJourneePsm
 * 
 * @property int $nr_poisson
 * @property int $num_poisson
 * @property int $annee_poisson
 * @property int $ligue_poisson
 * @property int $ref_journee_poisson
 * @property int $journee_poisson
 * @property int $cleub_poisson
 * @property Carbon $dat_poisson
 * @property int $lieu_poisson
 * @property string $type_journee_poisson
 * @property int $nr_plaque_poisson
 * @property int $poisson_poisson
 * @property int $poid_max
 * @property int $poid_min
 * @property int $poid_reel_poisson
 * @property int $nbr_max_espece
 * @property int $pinal_poid_min
 * @property int $poid_poisson
 * @property int $points_fav
 * @property int $prise_nv
 * @property int $poid_resv
 * @property int $prise_interdit
 * @property int $prise_poisson
 * @property int $bonus_accept
 * @property int $poid_plus_poisson
 * @property int $prise_moin
 * @property string $categorie_poisson
 * @property int $master_champ_psm
 *
 * @package App\Models
 */
class TbPoissonJourneePsm extends Model
{
	protected $table = 'tb_poisson_journee_psm';
	protected $primaryKey = 'nr_poisson';
	public $timestamps = false;

	protected $casts = [
		'num_poisson' => 'int',
		'annee_poisson' => 'int',
		'ligue_poisson' => 'int',
		'ref_journee_poisson' => 'int',
		'journee_poisson' => 'int',
		'cleub_poisson' => 'int',
		'dat_poisson' => 'datetime',
		'lieu_poisson' => 'int',
		'nr_plaque_poisson' => 'int',
		'poisson_poisson' => 'int',
		'poid_max' => 'int',
		'poid_min' => 'int',
		'poid_reel_poisson' => 'int',
		'nbr_max_espece' => 'int',
		'pinal_poid_min' => 'int',
		'poid_poisson' => 'int',
		'points_fav' => 'int',
		'prise_nv' => 'int',
		'poid_resv' => 'int',
		'prise_interdit' => 'int',
		'prise_poisson' => 'int',
		'bonus_accept' => 'int',
		'poid_plus_poisson' => 'int',
		'prise_moin' => 'int',
		'master_champ_psm' => 'int'
	];

	protected $fillable = [
		'num_poisson',
		'annee_poisson',
		'ligue_poisson',
		'ref_journee_poisson',
		'journee_poisson',
		'cleub_poisson',
		'dat_poisson',
		'lieu_poisson',
		'type_journee_poisson',
		'nr_plaque_poisson',
		'poisson_poisson',
		'poid_max',
		'poid_min',
		'poid_reel_poisson',
		'nbr_max_espece',
		'pinal_poid_min',
		'poid_poisson',
		'points_fav',
		'prise_nv',
		'poid_resv',
		'prise_interdit',
		'prise_poisson',
		'bonus_accept',
		'poid_plus_poisson',
		'prise_moin',
		'categorie_poisson',
		'master_champ_psm'
	];
}
