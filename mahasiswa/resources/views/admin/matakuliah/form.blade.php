<div class="form-group {{ $errors->has('kode_mata_kuliah') ? 'has-error' : ''}}">
    <label for="kode_mata_kuliah" class="control-label">{{ 'Kode Mata Kuliah' }}</label>
    <input class="form-control" name="kode_mata_kuliah" type="text" id="kode_mata_kuliah" value="{{ isset($matakuliah->kode_mata_kuliah) ? $matakuliah->kode_mata_kuliah : ''}}" >
    {!! $errors->first('kode_mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_mata_kuliah') ? 'has-error' : ''}}">
    <label for="nama_mata_kuliah" class="control-label">{{ 'Nama Mata Kuliah' }}</label>
    <textarea class="form-control" rows="5" name="nama_mata_kuliah" type="textarea" id="nama_mata_kuliah" >{{ isset($matakuliah->nama_mata_kuliah) ? $matakuliah->nama_mata_kuliah : ''}}</textarea>
    {!! $errors->first('nama_mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sks') ? 'has-error' : ''}}">
    <label for="sks" class="control-label">{{ 'Sks' }}</label>
    <select name="sks" class="form-control" id="sks" >
    @foreach (json_decode('{"2": "2", "3": "3", "4": "4", "5": "5", "6": "6", "7": "7", "8": "8"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($matakuliah->sks) && $matakuliah->sks == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('sks', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
