<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:850px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Join Competition Basketball</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(['action' => 'RegisterController@store_regBasket', 'class'=>'form-horizontal']) !!}
                  @include('reg_match.form.form', ['submit_text' => 'Join Competition Basket'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
