<script>
  tinymce.init({
    selector: '#deskripsi',
    plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality emoticons template paste textcolor save'
    ], //The plugins configuration option allows you to enable functionality within the editor.
    toolbar: 'insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | save',
    save_enablewhendirty: true,
  });
</script>

<div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-10">
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Thumbnail</label>
    <div class="col-md-10">
        {!! Form::file('thumbnail', null, ['class' => 'form-control input-md', 'required'],'') !!}
    </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">Peraturan Lomba</label>
  <div class="col-md-10">
  {!! Form::textarea('peraturan', null, ['placeholder' => 'Write a detail', 'id' => 'deskripsi', 'required'],'') !!}
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Biaya Pendaftaran</label>
    <div class="col-md-10">
        {!! Form::text('biaya_pendaftaran', null, ['class' => 'form-control',
        'required'],'') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Kuota</label>
    <div class="col-md-10">
        {!! Form::text('kuota', null, ['class' => 'form-control',
        'required'],'') !!}
    </div>
</div>

<div class="form-group" style="margin:1px">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-2 col-sm-10']) !!}
</div>
