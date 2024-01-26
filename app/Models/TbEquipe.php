<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEquipe
 * 
 * @property int $nr_equipe
 * @property string $equipe
 *
 * @package App\Models
 */
class TbEquipe extends Model
{
	protected $table = 'tb_equipe';
	protected $primaryKey = 'nr_equipe';
	public $timestamps = false;

	protected $fillable = [
		'equipe'
	];
}
