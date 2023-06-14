@csrf
<div class="mb-3">
    <label for="nom" class="form-label">Nom </label>
    <input type="text" name="nom" id="nom" class="form-control" required
        value="{{ old('nom', $locataire->nom) }}">
    @error('nom')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="telephone" class="form-label">telephone </label>
    <input type="text" name="telephone" id="telephone" class="form-control" required
        value="{{ old('telephone', $locataire->telephone) }}">
    @error('telephone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="login" class="form-label">login </label>
    <input type="text" name="login" id="login" class="form-control" required
        value="{{ old('login', $locataire->login) }}">
    @error('login')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="mot_de_passe" class="form-label">mot_de_passe</label>
    <input type="text" name="mot_de_passe" id="mot_de_passe" class="form-control" required
        value="{{ old('mot_de_passe', $locataire->mot_de_passe) }}">
    @error('mot_de_passe')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>




<div class="mb-3">
    <button type="submit" class="btn btn-primary">Enregistrer</button>

</div>
