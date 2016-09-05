<div id="myModal2-{{ $categories->id }}-{{ $matches->id }}-{{ $team_match->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Score</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(array('method' => 'PATCH', 'action' => array('MatchTeamController@update', $categories->id, $matches->id, $team_match->id))) !!}
                  @include('admin.match_team.form.score_form', ['submit_text' => 'Add Score'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->
