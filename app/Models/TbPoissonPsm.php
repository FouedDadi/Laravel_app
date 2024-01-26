<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPoissonPsm
 * 
 * @property int $nr_pois
 * @property string $poisson_pois
 * @property int $groupe_pois
 * @property int $poid_min
 * @property int $poid_max
 * @property int $pinalite_poid_min_pois
 * @property int $bonus_poisson_accepte_pois
 * @property int $bonus_fav_pois
 * @property int $nbr_max_pois
 *
 * @package App\Models
 */
class TbPoissonPsm extends Model
{
	protected $table = 'tb_poisson_psm';
	protected $primaryKey = 'nr_pois';
	public $timestamps = false;

	protected $casts = [
		'groupe_pois' => 'int',
		'poid_min' => 'int',
		'poid_max' => 'int',
		'pinalite_poid_min_pois' => 'int',
		'bonus_poisson_accepte_pois' => 'int',
		'bonus_fav_pois' => 'int',
		'nbr_max_pois' => 'int'
	];

	protected $fillable = [
		'poisson_pois',
		'groupe_pois',
		'poid_min',
		'poid_max',
		'pinalite_poid_min_pois',
		'bonus_poisson_accepte_pois',
		'bonus_fav_pois',
		'nbr_max_pois'
	];
}
