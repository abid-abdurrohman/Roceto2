<div class="form-group">
    <label class="col-md-2 control-label">Nama Tim</label>
    <div class="col-md-10">
        {!! Form::text('nama_tim', null, ['class' => 'form-control', 'placeholder' => 'Nama Tim', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Kapten</label>
    <div class="col-md-10">
        {!! Form::text('nama_kapten', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Nama Kapten', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">No. Hp</label>
    <div class="col-md-10">
        {!! Form::text('no_hp', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'No. Handphone', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Warna Kostum</label>
    <div class="col-md-10">
        {!! Form::text('warna_kostum', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Warna Kostum', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Jumlah Pemain</label>
    <div class="col-md-10">
        {!! Form::text('jml_pemain', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Jumlah pemain', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit','class'=>'btn btn-primary waves-effect waves-light col-sm-offset-4 col-md-4']) !!}
</div>
