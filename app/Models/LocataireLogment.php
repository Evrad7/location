<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LocataireLogment
 * 
 * @property int $locataire_id
 * @property Carbon $date_debut
 * @property Carbon $date_fin
 *
 * @package App\Models
 */
class LocataireLogment extends Model
{
	protected $table = 'locataire_logment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'locataire_id' => 'int',
		'date_debut' => 'datetime',
		'date_fin' => 'datetime'
	];

	protected $fillable = [
		'locataire_id',
		'date_debut',
		'date_fin'
	];
}
