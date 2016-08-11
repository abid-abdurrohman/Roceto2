<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-10">
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Detail</label>
    <div class="col-md-10">
        {!! Form::textarea('detail', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a detail', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
