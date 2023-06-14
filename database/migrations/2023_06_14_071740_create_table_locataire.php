<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Logement;
use App\Models\Locataire;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locataire', function (Blueprint $table) {
            $table->id();
            $table->string("nom", 180);
            $table->string("telephone", 16)->unique();
            $table->string("login", 60)->unique();
            $table->string("mot_de_passe", 255);
            $table->timestamps();
        });

        //table association
        // Schema::create('locataire_logment', function (Blueprint $table) {
        //     //$table->foreignIdFor(Logement::class)->constrains()->onDeleteCascade();
        //     // $table->foreignIdFor(Locataire::class)->constrains()->onDeleteCascade();
        //     $table->date("date_debut");
        //     $table->date("date_fin");
        //     // $table->primary(["logement_id", "locataire_id"]);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locataire');
    }
};
