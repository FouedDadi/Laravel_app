<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbJourneePsm
 * 
 * @property int $nr
 * @property int $num
 * @property int $annee
 * @property Carbon $dat
 * @property int $journee
 * @property string $type_journee
 * @property string $categorie
 * @property int $bo_jeune
 * @property int $bo_dame
 * @property int $lieu
 * @property int $ref_journee
 * @property int $nr_plaque
 * @property int $licence1
 * @property int $licence2
 * @property int $licence3
 * @property string $cleub
 * @property int $presence_inscription
 * @property int $presense_pesee
 * @property int $poid_reel
 * @property int $poid_reserve
 * @property int $prise_val
 * @property int $prise_nonval
 * @property int $nbr_esp
 * @property int $poid_accept
 * @property int $bon_prise
 * @property int $bon_fav
 * @property int $bon_esp
 * @property int $bon_lim_esp
 * @property int $pinal_seuil
 * @property int $pinal
 * @property int $retard
 * @property int $retard_minute
 * @property int $montee_bat
 * @property int $montee
 * @property int $poid_plus
 * @property string $nom_gr_poisson
 * @property int $poid_gr_poisson
 * @property int $discal
 * @property int $points
 * @property float $points_calcul
 * @property float $pourcent
 * @property int $ref_class_ath
 * @property int $classement
 * @property int $ath_class_cl
 * @property float $tot_pourcent_cl
 * @property int $tot_poids_cl
 * @property int $tot_points_cl
 * @property int $tot_prise_cl
 * @property int $gr_prise_cl
 * @property int $bon_j
 * @property int $bon_d
 * @property int $ref_class_cl
 * @property int $rond_cl
 * @property int $presence_cl
 * @property int $tot_prise_val
 * @property int $gros_pri
 * @property float $tot_pourcent_ath
 * @property int $tot_poids_ath
 * @property int $tot_points_ath
 * @property int $nbr_journee
 * @property int $ref_class_ath_fin
 * @property int $rond_ath_fin
 * @property int $bonnus_jeune_cl
 * @property int $bonnus_dame_cl
 * @property int $bonnus_presence_cl
 * @property int $total_bo_j
 * @property int $total_bo_d
 * @property float $total_pourcent_cl
 * @property int $total_poids_cl
 * @property int $total_points_cl
 * @property int $total_prise_cl
 * @property int $gros_prise_cl
 * @property int $ref_class_fin_cl
 * @property int $rond_fin_cl
 * @property int $ref_final_psm
 * @property int $ref_final_final
 * @property float $tot_pourcent_final
 * @property int $rond_final
 * @property int $master_psm
 *
 * @package App\Models
 */
class TbJourneePsm extends Model
{
	protected $table = 'tb_journee_psm';
	protected $primaryKey = 'nr';
	public $timestamps = false;

	protected $casts = [
		'num' => 'int',
		'annee' => 'int',
		'dat' => 'datetime',
		'journee' => 'int',
		'bo_jeune' => 'int',
		'bo_dame' => 'int',
		'lieu' => 'int',
		'ref_journee' => 'int',
		'nr_plaque' => 'int',
		'licence1' => 'int',
		'licence2' => 'int',
		'licence3' => 'int',
		'presence_inscription' => 'int',
		'presense_pesee' => 'int',
		'poid_reel' => 'int',
		'poid_reserve' => 'int',
		'prise_val' => 'int',
		'prise_nonval' => 'int',
		'nbr_esp' => 'int',
		'poid_accept' => 'int',
		'bon_prise' => 'int',
		'bon_fav' => 'int',
		'bon_esp' => 'int',
		'bon_lim_esp' => 'int',
		'pinal_seuil' => 'int',
		'pinal' => 'int',
		'retard' => 'int',
		'retard_minute' => 'int',
		'montee_bat' => 'int',
		'montee' => 'int',
		'poid_plus' => 'int',
		'poid_gr_poisson' => 'int',
		'discal' => 'int',
		'points' => 'int',
		'points_calcul' => 'float',
		'pourcent' => 'float',
		'ref_class_ath' => 'int',
		'classement' => 'int',
		'ath_class_cl' => 'int',
		'tot_pourcent_cl' => 'float',
		'tot_poids_cl' => 'int',
		'tot_points_cl' => 'int',
		'tot_prise_cl' => 'int',
		'gr_prise_cl' => 'int',
		'bon_j' => 'int',
		'bon_d' => 'int',
		'ref_class_cl' => 'int',
		'rond_cl' => 'int',
		'presence_cl' => 'int',
		'tot_prise_val' => 'int',
		'gros_pri' => 'int',
		'tot_pourcent_ath' => 'float',
		'tot_poids_ath' => 'int',
		'tot_points_ath' => 'int',
		'nbr_journee' => 'int',
		'ref_class_ath_fin' => 'int',
		'rond_ath_fin' => 'int',
		'bonnus_jeune_cl' => 'int',
		'bonnus_dame_cl' => 'int',
		'bonnus_presence_cl' => 'int',
		'total_bo_j' => 'int',
		'total_bo_d' => 'int',
		'total_pourcent_cl' => 'float',
		'total_poids_cl' => 'int',
		'total_points_cl' => 'int',
		'total_prise_cl' => 'int',
		'gros_prise_cl' => 'int',
		'ref_class_fin_cl' => 'int',
		'rond_fin_cl' => 'int',
		'ref_final_psm' => 'int',
		'ref_final_final' => 'int',
		'tot_pourcent_final' => 'float',
		'rond_final' => 'int',
		'master_psm' => 'int'
	];

	protected $fillable = [
		'num',
		'annee',
		'dat',
		'journee',
		'type_journee',
		'categorie',
		'bo_jeune',
		'bo_dame',
		'lieu',
		'ref_journee',
		'nr_plaque',
		'licence1',
		'licence2',
		'licence3',
		'cleub',
		'presence_inscription',
		'presense_pesee',
		'poid_reel',
		'poid_reserve',
		'prise_val',
		'prise_nonval',
		'nbr_esp',
		'poid_accept',
		'bon_prise',
		'bon_fav',
		'bon_esp',
		'bon_lim_esp',
		'pinal_seuil',
		'pinal',
		'retard',
		'retard_minute',
		'montee_bat',
		'montee',
		'poid_plus',
		'nom_gr_poisson',
		'poid_gr_poisson',
		'discal',
		'points',
		'points_calcul',
		'pourcent',
		'ref_class_ath',
		'classement',
		'ath_class_cl',
		'tot_pourcent_cl',
		'tot_poids_cl',
		'tot_points_cl',
		'tot_prise_cl',
		'gr_prise_cl',
		'bon_j',
		'bon_d',
		'ref_class_cl',
		'rond_cl',
		'presence_cl',
		'tot_prise_val',
		'gros_pri',
		'tot_pourcent_ath',
		'tot_poids_ath',
		'tot_points_ath',
		'nbr_journee',
		'ref_class_ath_fin',
		'rond_ath_fin',
		'bonnus_jeune_cl',
		'bonnus_dame_cl',
		'bonnus_presence_cl',
		'total_bo_j',
		'total_bo_d',
		'total_pourcent_cl',
		'total_poids_cl',
		'total_points_cl',
		'total_prise_cl',
		'gros_prise_cl',
		'ref_class_fin_cl',
		'rond_fin_cl',
		'ref_final_psm',
		'ref_final_final',
		'tot_pourcent_final',
		'rond_final',
		'master_psm'
	];
}
