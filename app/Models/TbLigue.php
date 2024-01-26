<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbLigue
 * 
 * @property int $nr_lig
 * @property string $ligue_lig
 *
 * @package App\Models
 */
class TbLigue extends Model
{
	protected $table = 'tb_ligue';
	protected $primaryKey = 'nr_lig';
	public $timestamps = false;

	protected $fillable = [
		'ligue_lig'
	];
}
