<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

/**
 * Class Logement
 *
 * @property int $code
 * @property string $type
 * @property string $description
 * @property float $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Logement extends Model
{
    use HasFactory;
	protected $table = 'logement';
	protected $primaryKey = 'code';

	protected $casts = [
		'note' => 'float'
	];

	protected $fillable = [
		'type',
		'description',
		'note'
	];
}
