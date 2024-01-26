<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPoissonPl
 * 
 * @property int $nr_pois
 * @property string $poisson_pois
 * @property int $order_pois
 *
 * @package App\Models
 */
class TbPoissonPl extends Model
{
	protected $table = 'tb_poisson_pl';
	protected $primaryKey = 'nr_pois';
	public $timestamps = false;

	protected $casts = [
		'order_pois' => 'int'
	];

	protected $fillable = [
		'poisson_pois',
		'order_pois'
	];
}
