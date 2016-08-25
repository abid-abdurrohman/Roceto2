<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:1200px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Join Competition {{ $event->nama}} - {{ $category->nama }}</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(['action' => array('RegisterController@store',$category->id), 'class'=>'form-horizontal']) !!}
                  @include('register.form.form', ['submit_text' => 'Join Competition  Basket'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->