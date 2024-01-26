<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbLieu
 * 
 * @property int $nr_lieu
 * @property string $lieu_lieu
 *
 * @package App\Models
 */
class TbLieu extends Model
{
	protected $table = 'tb_lieu';
	protected $primaryKey = 'nr_lieu';
	public $timestamps = false;

	protected $fillable = [
		'lieu_lieu'
	];
}
