<div class="form-group">
    <label class="col-md-2 control-label">Nama Tim</label>
    <div class="col-md-10">
        {!! Form::text('nama_tim', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Kapten</label>
    <div class="col-md-10">
        {!! Form::text('nama_kapten', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a name of captain ', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">No. Handphone</label>
    <div class="col-md-10">
        {!! Form::text('no_hp', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a Phone Number ', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Warna Kostum</label>
    <div class="col-md-10">
        {!! Form::text('warna_kostum', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a costum color', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Jumlah Pemain</label>
    <div class="col-md-10">
        {!! Form::text('jumlah_pemain', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Write a ', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Event</label>
    <div class="col-md-10">
        {!! Form::select('event', [1,2,3], null, ['class' => 'form-control input-md', 'id' => 'event', 'onchange' => 'cek()'], '') !!}
    </div>
</div>
<div class="form-group" id="kategori">
    <label class="col-md-2 control-label">Category</label>
    <div class="col-md-10">
        {!! Form::select('kategori', $category, null, ['class' => 'form-control input-md', 'required'], '') !!}
    </div>
</div>
<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
@section('footer')
<script type="text/javascript">
  $(document).ready(function(){
    $("#kategori").hide();
  });
  function cek(){
    if($("#event").val()=='2'){
      $("#kategori").show();
    }else{
      $("#kategori").hide();
    }
  }
</script>
@endsection
