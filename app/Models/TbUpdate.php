<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbUpdate
 * 
 * @property int $nr
 * @property string $version
 * @property string $file
 * @property Carbon $date
 *
 * @package App\Models
 */
class TbUpdate extends Model
{
	protected $table = 'tb_update';
	protected $primaryKey = 'nr';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'version',
		'file',
		'date'
	];
}
