<script>
  tinymce.init({
    selector: '#deskripsi',
    plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality emoticons template paste textcolor save'
    ], //The plugins configuration option allows you to enable functionality within the editor.
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | save',
    save_enablewhendirty: true,
  });
</script>
<div class="form-group">
  <label for="exampleInputFile">Judul :</label>
  {!! Form::text('judul', null, ['class' => 'form-control input-md', 'placeholder' => 'Write a title',
  'files' => true, 'required'],'') !!}
</div>
<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <label for="exampleInputFile">Thumbnail :</label>
      {!! Form::file('thumbnail', null, ['class' => 'form-control input-md', 'placeholder' => 'Write a title',
      'required'],'') !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="exampleInputFile">Kategori :</label>
      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kategori" required>
        <option selected="selected" value="news">News</option>
        <option value="informasi">Informasi</option>
      </select>
    </div>
  </div>
  <div class="col-md-5">
    <div class="form-group">
      <label for="exampleInputFile">Tag :</label>
      {!! Form::text('tag', null, ['class' => 'form-control input-md', 'placeholder' => 'Separate Tags with a (,)',
      'required'],'') !!}
    </div>
  </div>
</div>
<div class="form-group">
  {!! Form::textarea('deskripsi', null, ['placeholder' => 'Write a detail', 'id' => 'deskripsi', 'required'],'') !!}
  <!-- {!! Form::textarea('deskripsi', null, ['class' => 'ckeditor', 'rows' => '10', 'cols' => '80',
  'placeholder' => 'Write a detail', 'required'],'') !!} -->
</div>
<div class="form-group">
  {!! Form::button($submit_text, ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-light col-sm-offset-4 col-sm-4']) !!}
</div>
