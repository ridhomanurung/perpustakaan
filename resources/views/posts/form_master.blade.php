<div class="row">
  <div class="col-sm-2">
    {!! form::label('judulbuku','Judul Buku') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('judulbuku') ? 'has-error' : "" }}">
      {{ Form::text('judulbuku',NULL, ['class'=>'form-control', 'id'=>'judulbuku', 'placeholder'=>'Masukkan Judul Buku...']) }}
      <small id="passwordHelp" class="text-danger">
          *
        </small>
      {{ $errors->first('judulbuku', 'Berharap Diisi...') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('pengarang','Pengarang') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('pengarang') ? 'has-error' : "" }}">
      {{ Form::text('pengarang',NULL, ['class'=>'form-control', 'id'=>'pengarang', 'placeholder'=>'Masukkan Nama Pengarang...']) }}
      <small id="passwordHelp" class="text-danger">
          *
        </small>
      {{ $errors->first('pengarang', 'Jangan Biarkan Kosong...') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('sinopsis','Sinopsis') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('sinopsis') ? 'has-error' : "" }}">
      {{ Form::text('sinopsis',NULL, ['class'=>'form-control', 'id'=>'sinopsis', 'placeholder'=>'Ketikkan Sinopsis Buku...']) }}
      <small id="passwordHelp" class="text-danger">
          *
        </small>
        {{ $errors->first('pengarang', 'Kosong? seperti hati saya:(') }}
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>