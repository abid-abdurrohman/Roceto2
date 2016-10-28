 <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Please Login</h4>
                            </div>
                            <div class="modal-body">
                              <p>If you want to be participant. Login first</p>
                              <div style="padding-left:400px">
                                <a href="{{ action('LogController@login') }}" type="button" class="btn btn-primary waves-effect waves-light" ><i class="fa fa-btn fa-sign-in"></i> Login</a>
                                <a type="button" class="btn btn-default" data-dismiss="modal">Cancel</a>
                              </div>
                            </div>
                        </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
</div><!-- /.modal -->