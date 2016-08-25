<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Tim</label>
                    <div class="col-md-10">
                        {!! Form::text('nama_tim', null, ['class' => 'form-control', 'placeholder' => 'Nama Tim', 'required'],'') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Kapten</label>
                    <div class="col-md-10">
                        {!! Form::text('nama_kapten', null, ['class' => 'form-control', 'rows' => '5',
                        'placeholder' => 'Nama Kapten', 'required'],'') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">No. Hp</label>
                    <div class="col-md-10">
                        {!! Form::text('no_hp', null, ['class' => 'form-control', 'rows' => '5',
                        'placeholder' => 'No. Handphone', 'required'],'') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Warna Kostum</label>
                    <div class="col-md-10">
                        {!! Form::text('warna_kostum', null, ['class' => 'form-control', 'rows' => '5',
                        'placeholder' => 'Warna Kostum', 'required'],'') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Jumlah Pemain</label>
                    <div class="col-md-10">
                        {!! Form::text('jumlah_pemain', null, ['class' => 'form-control', 'rows' => '5',
                        'placeholder' => 'Jumlah pemain', 'required'],'') !!}
                    </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
                <div class="form-group">
                    <label class="col-md-2 control-label"> Nama Pengirim </label>
                    <div class="col-md-10">
                        {!! Form::text('atas_nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Pengirim', 'required'],'') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label"> No. Rekening </label>
                    <div class="col-md-10">
                        {!! Form::text('no_rek', null, ['class' => 'form-control', 'rows' => '5',
                        'placeholder' => 'No. Rekening', 'required'],'') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label"> Nama Bank </label>
                    <div class="col-md-10">
                        {!! Form::select('nama_bank', ['BRI'=>'BRI','Mandiri'=>'Mandiri', 'BCA'=>'BCA', 'BNI'=>'BNI'], null, ['class' => 'form-control', 'required'],'') !!}
                    </div>
                </div>
                <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Prev</button>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Prev</button>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
</form>
</div>
                   
