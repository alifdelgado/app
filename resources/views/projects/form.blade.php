@csrf
<div class="form-group col-md-12">
    <label>Titulo del proyecto</label>
    <input type="text" class="form-control shadow-sm" name="title" value="{{ old('title', $project->title) }}">
</div>
<div class="form-group col-md-12">
    <label>URL del proyecto</label>
    <input type="text" class="form-control shadow-sm" name="url" value="{{ old('url', $project->url) }}">
</div>
<div class="form-group col-md-12">
    <label>Descripción del proyecto</label>
    <textarea type="text" class="form-control shadow-sm" name="description">{{ old('description', $project->description) }}</textarea>
</div>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary btn-lg btn-block shadow">{{ $btnText }}</button>
</div>
