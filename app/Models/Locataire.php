<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

/**
 * Class Locataire
 *
 * @property int $id
 * @property string $nom
 * @property string $telephone
 * @property string $login
 * @property string $mot_de_passe
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Locataire extends Model
{
    use HasFactory;
	protected $table = 'locataire';

	protected $fillable = [
		'nom',
		'telephone',
		'login',
		'mot_de_passe'
	];
}
