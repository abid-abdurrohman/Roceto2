<p>Hello <b> {{ $nama_tim }} </b> ,</p>
<p>Terima kasih anda telah mendaftar pada perlombaan Olahraga {{$nama_event}}</p>
<p>Silahkan Anda Melakukan Pembayaran dengan rincian berikut : </p>
<p><b>Nama Pendaftar : </b><b><u> {{ $nama_tim }} </u></b></p>
<p><b>Nomer HP : </b><b><u>  {{ $no_hp }} </u></b></p>
<p><b>Email : </b><b><u> {{ $email }}</p>
<p><b>Nama Event : </b><b><u> {{ $nama_event }} </u></b></p>
<p><b>Biaya Pendaftaran : </b><b><u> {{ $biaya_pendaftaran }} </u></b></p>

<p>Silahkan untuk melakukan pembayaran, serta upload bukti pembayaran di link berikut : <a href="{{ URL::asset('http://localhost/roceto2/wt-tennis/public/join/1') }}">Klik Disini</a> </p>