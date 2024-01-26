<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbApnee
 * 
 * @property int $nr_ap
 * @property int $num_ap
 * @property int $annee_ap
 * @property Carbon $dat_ap
 * @property string $categorie_ap
 * @property int $lieu_ap
 * @property int $cleub_ap
 * @property int $pool_ap
 * @property int $ref_journee_ap
 * @property int $journee_ap
 * @property int $nr_plaque_ap
 * @property int $nr_licence_ap
 * @property int $abs_ap
 * @property string $type_journee_ap
 * @property int $apnee_ap
 * @property int $apnee_statique
 * @property int $ins_stat
 * @property int $presence_ap_stat
 * @property int $ins_bf
 * @property int $presence_apnee_dinamique_bf
 * @property float $distance_ap_dina_bf
 * @property int $temps_ap_dina_bf
 * @property int $ins_mf
 * @property int $presence_ap_dinamique_mf
 * @property float $distance_ap_dina_mf
 * @property int $temps_ap_dina_mf
 * @property int $presence_ap_dinamique_nf
 * @property float $distance_ap_dina_nf
 * @property int $temps_ap_dina_nf
 * @property int $ref_statique
 * @property int $class_statique
 * @property int $ref_dinam_bf
 * @property int $class_dinam_bf
 * @property int $ref_dinam_mf
 * @property int $class_dinam_mf
 * @property int $ins_nf
 * @property int $ref_dinam_nf
 * @property int $class_dinam_nf
 * @property int $jaune_statique
 * @property int $jaune_dina_bf
 * @property int $jaune_dina_mf
 * @property int $jaune_dina_nf
 * @property int $rouge_statique
 * @property int $rouge_dina_bf
 * @property int|null $rouge_dina_mf
 * @property int $rouge_dina_nf
 *
 * @package App\Models
 */
class TbApnee extends Model
{
	protected $table = 'tb_apnee';
	protected $primaryKey = 'nr_ap';
	public $timestamps = false;

	protected $casts = [
		'num_ap' => 'int',
		'annee_ap' => 'int',
		'dat_ap' => 'datetime',
		'lieu_ap' => 'int',
		'cleub_ap' => 'int',
		'pool_ap' => 'int',
		'ref_journee_ap' => 'int',
		'journee_ap' => 'int',
		'nr_plaque_ap' => 'int',
		'nr_licence_ap' => 'int',
		'abs_ap' => 'int',
		'apnee_ap' => 'int',
		'apnee_statique' => 'int',
		'ins_stat' => 'int',
		'presence_ap_stat' => 'int',
		'ins_bf' => 'int',
		'presence_apnee_dinamique_bf' => 'int',
		'distance_ap_dina_bf' => 'float',
		'temps_ap_dina_bf' => 'int',
		'ins_mf' => 'int',
		'presence_ap_dinamique_mf' => 'int',
		'distance_ap_dina_mf' => 'float',
		'temps_ap_dina_mf' => 'int',
		'presence_ap_dinamique_nf' => 'int',
		'distance_ap_dina_nf' => 'float',
		'temps_ap_dina_nf' => 'int',
		'ref_statique' => 'int',
		'class_statique' => 'int',
		'ref_dinam_bf' => 'int',
		'class_dinam_bf' => 'int',
		'ref_dinam_mf' => 'int',
		'class_dinam_mf' => 'int',
		'ins_nf' => 'int',
		'ref_dinam_nf' => 'int',
		'class_dinam_nf' => 'int',
		'jaune_statique' => 'int',
		'jaune_dina_bf' => 'int',
		'jaune_dina_mf' => 'int',
		'jaune_dina_nf' => 'int',
		'rouge_statique' => 'int',
		'rouge_dina_bf' => 'int',
		'rouge_dina_mf' => 'int',
		'rouge_dina_nf' => 'int'
	];

	protected $fillable = [
		'num_ap',
		'annee_ap',
		'dat_ap',
		'categorie_ap',
		'lieu_ap',
		'cleub_ap',
		'pool_ap',
		'ref_journee_ap',
		'journee_ap',
		'nr_plaque_ap',
		'nr_licence_ap',
		'abs_ap',
		'type_journee_ap',
		'apnee_ap',
		'apnee_statique',
		'ins_stat',
		'presence_ap_stat',
		'ins_bf',
		'presence_apnee_dinamique_bf',
		'distance_ap_dina_bf',
		'temps_ap_dina_bf',
		'ins_mf',
		'presence_ap_dinamique_mf',
		'distance_ap_dina_mf',
		'temps_ap_dina_mf',
		'presence_ap_dinamique_nf',
		'distance_ap_dina_nf',
		'temps_ap_dina_nf',
		'ref_statique',
		'class_statique',
		'ref_dinam_bf',
		'class_dinam_bf',
		'ref_dinam_mf',
		'class_dinam_mf',
		'ins_nf',
		'ref_dinam_nf',
		'class_dinam_nf',
		'jaune_statique',
		'jaune_dina_bf',
		'jaune_dina_mf',
		'jaune_dina_nf',
		'rouge_statique',
		'rouge_dina_bf',
		'rouge_dina_mf',
		'rouge_dina_nf'
	];
}
