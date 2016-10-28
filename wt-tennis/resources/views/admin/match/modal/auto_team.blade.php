<div class="modal fade" id="myModal-{{ $events->id }}-{{ $id_part }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Auto Add Team?</h4>
      </div>
      <div class="modal-body">
        Note: The Team in this event has been created automatically can not be delete.
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'POST', 'action' => ['MatchController@auto_team', $events->id, $id_part]]) !!}
            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Auto Add</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        {!! Form::close() !!}    
      </div>
    </div>
  </div>
</div>
