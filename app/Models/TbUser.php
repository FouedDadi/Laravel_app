<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbUser
 * 
 * @property int $nr_user
 * @property string $nom_user
 * @property string $mot_passe_user
 * @property bool $miseajour_local
 * @property bool $miseajour_principal
 * @property bool $enrg_licence
 * @property bool $enrg_juge
 * @property bool $classement_journee
 * @property bool $classement_final
 * @property bool $inscription
 * @property bool $select_playoff
 *
 * @package App\Models
 */
class TbUser extends Model
{
	protected $table = 'tb_user';
	protected $primaryKey = 'nr_user';
	public $timestamps = false;

	protected $casts = [
		'miseajour_local' => 'bool',
		'miseajour_principal' => 'bool',
		'enrg_licence' => 'bool',
		'enrg_juge' => 'bool',
		'classement_journee' => 'bool',
		'classement_final' => 'bool',
		'inscription' => 'bool',
		'select_playoff' => 'bool'
	];

	protected $fillable = [
		'nom_user',
		'mot_passe_user',
		'miseajour_local',
		'miseajour_principal',
		'enrg_licence',
		'enrg_juge',
		'classement_journee',
		'classement_final',
		'inscription',
		'select_playoff'
	];
}
