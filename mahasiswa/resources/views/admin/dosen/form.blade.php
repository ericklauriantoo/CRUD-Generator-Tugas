<div class="form-group {{ $errors->has('NIDN') ? 'has-error' : ''}}">
    <label for="NIDN" class="control-label">{{ 'Nidn' }}</label>
    <input class="form-control" name="NIDN" type="text" id="NIDN" value="{{ isset($dosen->NIDN) ? $dosen->NIDN : ''}}" >
    {!! $errors->first('NIDN', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($dosen->nama) ? $dosen->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="alamat" type="textarea" id="alamat" >{{ isset($dosen->alamat) ? $dosen->alamat : ''}}</textarea>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mata_kuliah') ? 'has-error' : ''}}">
    <label for="mata_kuliah" class="control-label">{{ 'Mata Kuliah' }}</label>
    <select name="mata_kuliah" class="form-control" id="mata_kuliah" >
    @foreach (json_decode('{"SISTEM INFORMASI": "SISTEM INFORMASI", "INFORMATIKA": "INFORMATIKA"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($dosen->mata_kuliah) && $dosen->mata_kuliah == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
