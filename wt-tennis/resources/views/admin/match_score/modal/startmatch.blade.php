<div class="modal fade" id="myModal2-{{ $events->id }}-{{ $match->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Starting This Match?</h4>
      </div>
      <div class="modal-body">
        Note: This Match that has start you must always stay in this application.
      </div>
      <div class="modal-footer">
        {!! Form::open(array('method' => 'PATCH', 'action' => array('EventMatchScoreController@startmatch', $events->id, $match->id))) !!}
          <button type="submit" class="btn btn-danger"><i class="fa fa-play"></i> Start This! </button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
