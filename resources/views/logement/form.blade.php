@csrf
<div class="mb-3">
    <label for="nom" class="form-label">Nom </label>
    <input type="text" name="nom" id="nom" class="form-control" required
        value="{{ old('nom', $logement->nom) }}">
    @error('nom')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="type" class="form-label">type </label>
    <input type="text" name="type" id="type" class="form-control" required
        value="{{ old('type', $logement->type) }}">
    @error('type')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description </label>
    <input type="text" name="description" id="description" class="form-control" required
        value="{{ old('description', $logement->description) }}">
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="note" class="form-label">note</label>
    <input type="text" name="note" id="note" class="form-control" required
        value="{{ old('note', $logement->note) }}">
    @error('note')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>




<div class="mb-3">
    <button type="submit" class="btn btn-primary">Enregistrer</button>

</div>
