<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTravail
 * 
 * @property int $nr_trav
 * @property string $nom_trav
 * @property string $mot_passe_trav
 * @property Carbon $dat_trav
 * @property Carbon $heure_depart_trav
 * @property Carbon $heure_fin_trav
 * @property int $annee_trav
 *
 * @package App\Models
 */
class TbTravail extends Model
{
	protected $table = 'tb_travail';
	protected $primaryKey = 'nr_trav';
	public $timestamps = false;

	protected $casts = [
		'dat_trav' => 'datetime',
		'heure_depart_trav' => 'datetime',
		'heure_fin_trav' => 'datetime',
		'annee_trav' => 'int'
	];

	protected $fillable = [
		'nom_trav',
		'mot_passe_trav',
		'dat_trav',
		'heure_depart_trav',
		'heure_fin_trav',
		'annee_trav'
	];
}
