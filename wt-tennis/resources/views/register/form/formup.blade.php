<div class="form-group">
	<label class="col-md-2 control-label">Nama Pengirim</label>
	<div class="col-md-10">
		{!! Form::text('nama_pengirim', null, ['class' => 'form-control', 'placeholder' => 'Write a name', 'required'], '') !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-2 control-label">Nomer Rekening</label>
	<div class="col-md-10">
		{!! Form::text('nomer', null, ['class' => 'form-control', 'placeholder' => 'Write numbers', 'required'], '') !!}
	</div>
</div>
<div class="form-group">
     <label class="col-md-2 control-label"> Nama Bank </label>
      <div class="col-md-10">
          {!! Form::select('nama_bank', ['BRI'=>'BRI','Mandiri'=>'Mandiri', 'BCA'=>'BCA', 'BNI'=>'BNI'], null, ['class' => 'form-control', 'required'],'') !!}
   </div>
 </div>
<div class="form-group">
    <label class="col-md-2 control-label">Bukti Pembayaran</label>
    <div class="col-md-10">
        {!! Form::file('bukti', null, ['class' => 'form-control input-md', 'required'],'') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
