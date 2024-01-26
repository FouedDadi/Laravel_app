<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAthlete
 * 
 * @property int $nr_ath
 * @property int $num_ath
 * @property int $annee_ath
 * @property string $athlete
 * @property int $nr_licence_ath
 * @property Carbon $date_naissense_ath
 * @property string $cin
 * @property string $categorie_ath
 * @property string $sexe
 * @property string $specialite_ath
 * @property float $age_ath
 * @property int $tph_ath
 * @property string $ville_ath
 * @property string $photo_ath
 * @property Carbon $dat_enregistrement
 *
 * @package App\Models
 */
class TbAthlete extends Model
{
	protected $table = 'tb_athlete';
	protected $primaryKey = 'nr_ath';
	public $timestamps = false;

	protected $casts = [
		'num_ath' => 'int',
		'annee_ath' => 'int',
		'nr_licence_ath' => 'int',
		'date_naissense_ath' => 'datetime',
		'age_ath' => 'float',
		'tph_ath' => 'int',
		'dat_enregistrement' => 'datetime'
	];

	protected $fillable = [
		'num_ath',
		'annee_ath',
		'athlete',
		'nr_licence_ath',
		'date_naissense_ath',
		'cin',
		'categorie_ath',
		'sexe',
		'specialite_ath',
		'age_ath',
		'tph_ath',
		'ville_ath',
		'photo_ath',
		'dat_enregistrement'
	];
}
