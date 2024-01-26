<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbJuge
 * 
 * @property int $nr_juge
 * @property int $num_juge
 * @property string $nom_juge
 * @property int $licence_juge
 * @property Carbon $dat_inscription
 * @property string $tel_juge
 * @property string $mail_juge
 * @property string $ville_juge
 * @property string $grade_juge
 * @property string $photo_juge
 * @property int $annee_ins
 * @property Carbon $dat_naissence
 * @property float $age
 * @property string $cin_juge
 *
 * @package App\Models
 */
class TbJuge extends Model
{
	protected $table = 'tb_juge';
	protected $primaryKey = 'nr_juge';
	public $timestamps = false;

	protected $casts = [
		'num_juge' => 'int',
		'licence_juge' => 'int',
		'dat_inscription' => 'datetime',
		'annee_ins' => 'int',
		'dat_naissence' => 'datetime',
		'age' => 'float'
	];

	protected $fillable = [
		'num_juge',
		'nom_juge',
		'licence_juge',
		'dat_inscription',
		'tel_juge',
		'mail_juge',
		'ville_juge',
		'grade_juge',
		'photo_juge',
		'annee_ins',
		'dat_naissence',
		'age',
		'cin_juge'
	];
}
