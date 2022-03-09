<div class="form-group">
    <label for="">NIS</label>
    <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror"
        value="{{ old('nis', @$student->nis) }}">
    @error('nis')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', @$student->user->name) }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="">No. HP</label>
    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror"
        placeholder="ex. 08xxxxxxx" value="{{ old('phone', @$student->phone) }}">
    @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
        placeholder="ex. user@gmail.com" value="{{ old('email', @$student->user->email) }}">
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
    @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="d-grid">
    <button class="btn btn-primary">Simpan</button>
</div>
