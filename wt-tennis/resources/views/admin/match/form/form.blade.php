<div class="form-group">
    <label class="col-md-2 control-label">No Match</label>
    <div class="col-md-10">
        {!! Form::text('no_match', null, ['class' => 'form-control', 'placeholder' => 'Write a match number',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Match</label>
    <div class="col-md-10">
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Waktu</label>
    <div class="col-md-10">
        {!! Form::date('waktu', null, ['class' => 'form-control', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tempat</label>
    <div class="col-md-10">
        {!! Form::text('tempat', null, ['class' => 'form-control', 'placeholder' => 'Write a place',
        'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
