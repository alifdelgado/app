@csrf
<div class="form-group col-md-12">
    <label>Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
    {!! $errors->first('name', '<small>:message</small>') !!}
</div>
<div class="form-group col-md-12">
    <label>Email</label>
    <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
    {!! $errors->first('email', '<small>:message</small>') !!}
</div>
@unless ($user->id)
    <div class="form-group col-md-12">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control">
        {!! $errors->first('password', '<small>:message</small>') !!}
    </div>
    <div class="form-group col-md-12">
        <label>Password Confirm</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        {!! $errors->first('password_confirmation', '<small>:message</small>') !!}
    </div>
@endunless
<div class="form-group col-md-12">
    <div class="row">
        @foreach ($roles as $id => $name)
            <div class="input-group-prepend col-md-4">
                <div class="input-group-text">
                    <input type="checkbox" name="roles[]" value="{{ $id }}" {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}>
                </div>
                {{ $name }}
            </div>
        @endforeach
        {!! $errors->first('roles', '<small>:message</small>') !!}
    </div>
</div>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
</div>
