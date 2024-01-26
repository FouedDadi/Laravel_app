<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPecheaufloteur
 * 
 * @property int $nr_jour
 * @property int $num_jour
 * @property int $annee_jour
 * @property int $ref_journee_jour
 * @property int $pool_jour
 * @property int $cleub_jour
 * @property int $lieu_jour
 * @property Carbon $dat_jour
 * @property string $type_journee_jour
 * @property string $categorie_jour
 * @property int $journee_jour
 * @property int $nr_licence_jour
 * @property int $nr_plaque_jour
 * @property int $presence_inscription_jour
 * @property int $secteur_jour
 * @property int $bonus_jeune
 * @property int $presence_pesee_jour
 * @property int $prise_jour
 * @property int $nbr_esp_jour
 * @property int $poid_total_jour
 * @property int $gros_prise_jour
 * @property int $pinalite_jour
 * @property int $abs_jour
 * @property int $discal_jour
 * @property int $prise_discal
 * @property int $nbr_esp_discal
 * @property int $gros_prise_discal
 * @property int $poid_total_discal
 * @property float $pourcen_ath_jour
 * @property int $total_points
 * @property int $p_p_sec_jour
 * @property int $sect_tech_jour
 * @property int $classement_ath_jour
 * @property int $p_p_jour_ath_jour
 * @property int $ref_ath_fin_jour
 * @property int $ath_class_cl_jour
 * @property int $meil_ath_class_cl_jour
 * @property int $tot_prise_cl_jour
 * @property int $tot_p_p_jour_cl_jour
 * @property float $tot_pourcen_cl_jour
 * @property int $tot_poids_cl_jour
 * @property int $tot_points_cl_jour
 * @property int $gros_prise_cl_jour
 * @property int $abs_cl_jour
 * @property int $presence_cl_jour
 * @property int $ref_cleub_fin_jour
 * @property int $p_p_jour_cl_jour
 * @property int $rond_cl_jour
 * @property int $t_p_p_jour_ath_jour
 * @property int $m_class_ath_jour
 * @property float $t_pourcen_ath_jour
 * @property int $t_poids_ath_jour
 * @property int $t_points_ath_jour
 * @property int $t_prise_ath_jour
 * @property int $gros_prise_ath_jour
 * @property int $nbr_jour_jour
 * @property int $rond_ath_jour
 * @property int $rond_fin_ath_jour
 * @property int $t_p_jour_cleub_jour
 * @property int $m_p_jour_cleub_jour
 * @property int $m_p_ath_cleub
 * @property float $t_pourcen_cleub_jour
 * @property int $t_poids_cleub_jour
 * @property int $t_points_cleub_jour
 * @property int $t_prise_cleub_jour
 * @property int $gr_prise_cleub_jour
 * @property int $rond_cleub_jour
 * @property int $rond_fin_cleub_jour
 * @property int $playoff_ath_jour
 * @property float $pourc_playoff_ath_jour
 * @property float $pinal_playoff_ath_jour
 * @property int $class_select_playoff_ath_jour
 * @property int $playoff_cleub_jour
 * @property float $pourc_playoff_cleub_jour
 * @property float $pinal_playoff_cleub_jour
 * @property int $class_select_playoff_cleub_jour
 * @property int $rond_ath_jeune7jour
 * @property int $tot_p_psec_dame
 * @property int $class_jour_dame
 * @property int $bonus_capt
 * @property int $presence_inscription_cl_jour
 * @property int $master_jour
 * @property int|null $playoff_ath_20_jour
 *
 * @package App\Models
 */
class TbPecheaufloteur extends Model
{
	protected $table = 'tb_pecheaufloteur';
	protected $primaryKey = 'nr_jour';
	public $timestamps = false;

	protected $casts = [
		'num_jour' => 'int',
		'annee_jour' => 'int',
		'ref_journee_jour' => 'int',
		'pool_jour' => 'int',
		'cleub_jour' => 'int',
		'lieu_jour' => 'int',
		'dat_jour' => 'datetime',
		'journee_jour' => 'int',
		'nr_licence_jour' => 'int',
		'nr_plaque_jour' => 'int',
		'presence_inscription_jour' => 'int',
		'secteur_jour' => 'int',
		'bonus_jeune' => 'int',
		'presence_pesee_jour' => 'int',
		'prise_jour' => 'int',
		'nbr_esp_jour' => 'int',
		'poid_total_jour' => 'int',
		'gros_prise_jour' => 'int',
		'pinalite_jour' => 'int',
		'abs_jour' => 'int',
		'discal_jour' => 'int',
		'prise_discal' => 'int',
		'nbr_esp_discal' => 'int',
		'gros_prise_discal' => 'int',
		'poid_total_discal' => 'int',
		'pourcen_ath_jour' => 'float',
		'total_points' => 'int',
		'p_p_sec_jour' => 'int',
		'sect_tech_jour' => 'int',
		'classement_ath_jour' => 'int',
		'p_p_jour_ath_jour' => 'int',
		'ref_ath_fin_jour' => 'int',
		'ath_class_cl_jour' => 'int',
		'meil_ath_class_cl_jour' => 'int',
		'tot_prise_cl_jour' => 'int',
		'tot_p_p_jour_cl_jour' => 'int',
		'tot_pourcen_cl_jour' => 'float',
		'tot_poids_cl_jour' => 'int',
		'tot_points_cl_jour' => 'int',
		'gros_prise_cl_jour' => 'int',
		'abs_cl_jour' => 'int',
		'presence_cl_jour' => 'int',
		'ref_cleub_fin_jour' => 'int',
		'p_p_jour_cl_jour' => 'int',
		'rond_cl_jour' => 'int',
		't_p_p_jour_ath_jour' => 'int',
		'm_class_ath_jour' => 'int',
		't_pourcen_ath_jour' => 'float',
		't_poids_ath_jour' => 'int',
		't_points_ath_jour' => 'int',
		't_prise_ath_jour' => 'int',
		'gros_prise_ath_jour' => 'int',
		'nbr_jour_jour' => 'int',
		'rond_ath_jour' => 'int',
		'rond_fin_ath_jour' => 'int',
		't_p_jour_cleub_jour' => 'int',
		'm_p_jour_cleub_jour' => 'int',
		'm_p_ath_cleub' => 'int',
		't_pourcen_cleub_jour' => 'float',
		't_poids_cleub_jour' => 'int',
		't_points_cleub_jour' => 'int',
		't_prise_cleub_jour' => 'int',
		'gr_prise_cleub_jour' => 'int',
		'rond_cleub_jour' => 'int',
		'rond_fin_cleub_jour' => 'int',
		'playoff_ath_jour' => 'int',
		'pourc_playoff_ath_jour' => 'float',
		'pinal_playoff_ath_jour' => 'float',
		'class_select_playoff_ath_jour' => 'int',
		'playoff_cleub_jour' => 'int',
		'pourc_playoff_cleub_jour' => 'float',
		'pinal_playoff_cleub_jour' => 'float',
		'class_select_playoff_cleub_jour' => 'int',
		'rond_ath_jeune7jour' => 'int',
		'tot_p_psec_dame' => 'int',
		'class_jour_dame' => 'int',
		'bonus_capt' => 'int',
		'presence_inscription_cl_jour' => 'int',
		'master_jour' => 'int',
		'playoff_ath_20_jour' => 'int'
	];

	protected $fillable = [
		'num_jour',
		'annee_jour',
		'ref_journee_jour',
		'pool_jour',
		'cleub_jour',
		'lieu_jour',
		'dat_jour',
		'type_journee_jour',
		'categorie_jour',
		'journee_jour',
		'nr_licence_jour',
		'nr_plaque_jour',
		'presence_inscription_jour',
		'secteur_jour',
		'bonus_jeune',
		'presence_pesee_jour',
		'prise_jour',
		'nbr_esp_jour',
		'poid_total_jour',
		'gros_prise_jour',
		'pinalite_jour',
		'abs_jour',
		'discal_jour',
		'prise_discal',
		'nbr_esp_discal',
		'gros_prise_discal',
		'poid_total_discal',
		'pourcen_ath_jour',
		'total_points',
		'p_p_sec_jour',
		'sect_tech_jour',
		'classement_ath_jour',
		'p_p_jour_ath_jour',
		'ref_ath_fin_jour',
		'ath_class_cl_jour',
		'meil_ath_class_cl_jour',
		'tot_prise_cl_jour',
		'tot_p_p_jour_cl_jour',
		'tot_pourcen_cl_jour',
		'tot_poids_cl_jour',
		'tot_points_cl_jour',
		'gros_prise_cl_jour',
		'abs_cl_jour',
		'presence_cl_jour',
		'ref_cleub_fin_jour',
		'p_p_jour_cl_jour',
		'rond_cl_jour',
		't_p_p_jour_ath_jour',
		'm_class_ath_jour',
		't_pourcen_ath_jour',
		't_poids_ath_jour',
		't_points_ath_jour',
		't_prise_ath_jour',
		'gros_prise_ath_jour',
		'nbr_jour_jour',
		'rond_ath_jour',
		'rond_fin_ath_jour',
		't_p_jour_cleub_jour',
		'm_p_jour_cleub_jour',
		'm_p_ath_cleub',
		't_pourcen_cleub_jour',
		't_poids_cleub_jour',
		't_points_cleub_jour',
		't_prise_cleub_jour',
		'gr_prise_cleub_jour',
		'rond_cleub_jour',
		'rond_fin_cleub_jour',
		'playoff_ath_jour',
		'pourc_playoff_ath_jour',
		'pinal_playoff_ath_jour',
		'class_select_playoff_ath_jour',
		'playoff_cleub_jour',
		'pourc_playoff_cleub_jour',
		'pinal_playoff_cleub_jour',
		'class_select_playoff_cleub_jour',
		'rond_ath_jeune7jour',
		'tot_p_psec_dame',
		'class_jour_dame',
		'bonus_capt',
		'presence_inscription_cl_jour',
		'master_jour',
		'playoff_ath_20_jour'
	];
}
