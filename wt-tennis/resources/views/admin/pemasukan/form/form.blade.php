<div class="form-group">
    <label class="col-md-2 control-label">Nama Pemasukan</label>
    <div class="col-md-10">
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write yours kind report', 'required'], '') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Jumlah</label>
    <div class="col-md-10">
        {!! Form::text('jumlah', null, ['class' => 'form-control', 'placeholder' => 'Write a cost',
        'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>