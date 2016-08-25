<div id="Modal-{{ $id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Check Participant</h4>
            </div>
            <div class="modal-body">
              @if ($participant->bukti=='')
              <b>Note :</b> This Participant have no payment
              @else
              <center>
              <b>Atas Nama :</b> {{ $participant->atas_nama }} <br>
              <b>Nomor Rekening :</b> {{ $participant->no_rek }} <br>
              <b>Bukti Pembayaran:</b> <br>

                <img src="{!! asset('').'/'.$participant->bukti !!}" style="width:350px">
               <br>
              <b>Waktu :</b> {{ $participant->created_at }} <br>
              </center>
              @endif
            </div>
        </div>
    </div>
</div><!-- /.modal -->
