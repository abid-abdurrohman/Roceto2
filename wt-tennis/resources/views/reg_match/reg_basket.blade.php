@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-shop">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Product for player</h3>
      <p class="txt-advert-sub">Rackets - Ball - Bags - Shoes</p>
    </div>
  </div>

  <section id="shop" class="container secondary-page">
    <div class="general general-results">
     <div class="top-score-title col-md-9">
      <h3> Lomba <span>Basket</span><span class="point-little">.</span></h3>
      <div class="col-md-12 content-zoom">
        <div class="col-md-6 content-img-zoom">
         <img id="img_01" src="images\pertandingan\basketball.jpg" />
       </div>

       <div class="col-md-6 content-desc-zoom">
         <h3>Pertandingan Basket</h3>
         <p class="desc-prod" style="text-align:justify">
           <b>Bola basket</b> adalah olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan. Bola basket sangat cocok untuk ditonton karena biasa dimainkan di ruang olahraga tertutup dan hanya memerlukan lapangan yang relatif kecil. Selain itu, permainan bola basket juga lebih kompetitif karena tempo permainan cenderung lebih cepat jika dibandingkan dengan olahraga bola yang lain, seperti voli dan sepak bola. </p>
<!--          <p class="desc-prod"> Ada 3 posisi utama dalam bermain basket, yaitu :
         <li class="desc-prod"><b>Forward,</b> pemain yang tugas utamanya adalah mencetak poin dengan memasukkan bola ke keranjang lawan, </li>
         <li class="desc-prod"><b>Defense,</b> pemain yang tugas utamanya adalah menjaga pemain lawan agar pemain lawan kesulitan memasukkan bola,</li>
         <li class="desc-prod"><b>Playmaker,</b>pemain yang menjadi tokoh kunci permainan dengan mengatur alur bola dan strategi yang dimainkan oleh rekan-rekan setimnya.</li></p>
       -->
     </div>
   </div>

   <div class="col-md-12">
     <div class="panel-body" style="padding-top:100px">
       <div class="general general-results tournaments">
         <div id="c-calend" class="top-score-title right-score col-md-12">
           <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Peraturan Permainan Basket<span></span>
           </div>
           <div class="acc-content" style="display: block;">
            <div>Aturan dasar pada permainan Bola Basket adalah sebagai berikut:</div>
            <li class="desc-prod" style="text-align:justify">Bola dapat dipukul ke segala arah dengan menggunakan salah satu atau kedua tangan, tetapi tidak boleh dipukul menggunakan kepalan tangan (meninju). </li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan berlari sambil memegang bola. Pemain harus melemparkan bola tersebut dari titik tempat menerima bola, tetapi diperbolehkan apabila pemain tersebut berlari pada kecepatan biasa.</li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan menyeruduk, menahan, mendorong, memukul, atau menjegal pemain lawan dengan cara bagaimanapun. Pelanggaran pertama terhadap peraturan ini akan dihitung sebagai kesalahan, pelanggaran kedua akan diberi sanksi berupa diskualifikasi pemain pelanggar hingga keranjang timnya dimasuki oleh bola lawan, dan apabila pelanggaran tersebut dilakukan dengan tujuan untuk mencederai lawan, maka pemain pelanggar akan dikenai hukuman tidak boleh ikut bermain sepanjang pertandingan. Pada masa ini, pergantian pemain tidak diperbolehkan.</li>
            <li class="desc-prod" style="text-align:justify">Wasit berhak untuk memperhatikan permainan para pemain dan mencatat jumlah pelanggaran dan memberi tahu wasit pembantu apabila terjadi pelanggaran berturut-turut.</li>
          </div>

          <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Peraturan Permainan Basket<span></span>
           </div>
           <div class="acc-content" style="display: block;">
            <div>Aturan dasar pada permainan Bola Basket adalah sebagai berikut:</div>
            <li class="desc-prod" style="text-align:justify">Bola dapat dipukul ke segala arah dengan menggunakan salah satu atau kedua tangan, tetapi tidak boleh dipukul menggunakan kepalan tangan (meninju). </li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan berlari sambil memegang bola. Pemain harus melemparkan bola tersebut dari titik tempat menerima bola, tetapi diperbolehkan apabila pemain tersebut berlari pada kecepatan biasa.</li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan menyeruduk, menahan, mendorong, memukul, atau menjegal pemain lawan dengan cara bagaimanapun. Pelanggaran pertama terhadap peraturan ini akan dihitung sebagai kesalahan, pelanggaran kedua akan diberi sanksi berupa diskualifikasi pemain pelanggar hingga keranjang timnya dimasuki oleh bola lawan, dan apabila pelanggaran tersebut dilakukan dengan tujuan untuk mencederai lawan, maka pemain pelanggar akan dikenai hukuman tidak boleh ikut bermain sepanjang pertandingan. Pada masa ini, pergantian pemain tidak diperbolehkan.</li>
            <li class="desc-prod" style="text-align:justify">Wasit berhak untuk memperhatikan permainan para pemain dan mencatat jumlah pelanggaran dan memberi tahu wasit pembantu apabila terjadi pelanggaran berturut-turut.</li>
          </div>

          <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Peraturan Permainan Basket<span></span>
           </div>
           <div class="acc-content" style="display: block;">
            <div>Aturan dasar pada permainan Bola Basket adalah sebagai berikut:</div>
            <li class="desc-prod" style="text-align:justify">Bola dapat dipukul ke segala arah dengan menggunakan salah satu atau kedua tangan, tetapi tidak boleh dipukul menggunakan kepalan tangan (meninju). </li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan berlari sambil memegang bola. Pemain harus melemparkan bola tersebut dari titik tempat menerima bola, tetapi diperbolehkan apabila pemain tersebut berlari pada kecepatan biasa.</li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan menyeruduk, menahan, mendorong, memukul, atau menjegal pemain lawan dengan cara bagaimanapun. Pelanggaran pertama terhadap peraturan ini akan dihitung sebagai kesalahan, pelanggaran kedua akan diberi sanksi berupa diskualifikasi pemain pelanggar hingga keranjang timnya dimasuki oleh bola lawan, dan apabila pelanggaran tersebut dilakukan dengan tujuan untuk mencederai lawan, maka pemain pelanggar akan dikenai hukuman tidak boleh ikut bermain sepanjang pertandingan. Pada masa ini, pergantian pemain tidak diperbolehkan.</li>
            <li class="desc-prod" style="text-align:justify">Wasit berhak untuk memperhatikan permainan para pemain dan mencatat jumlah pelanggaran dan memberi tahu wasit pembantu apabila terjadi pelanggaran berturut-turut.</li>
          </div>

          <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Peraturan Permainan Basket<span></span></div>
           <div class="acc-content" style="display: block;">
            <div>Aturan dasar pada permainan Bola Basket adalah sebagai berikut:</div>
            <li class="desc-prod" style="text-align:justify">Bola dapat dipukul ke segala arah dengan menggunakan salah satu atau kedua tangan, tetapi tidak boleh dipukul menggunakan kepalan tangan (meninju). </li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan berlari sambil memegang bola. Pemain harus melemparkan bola tersebut dari titik tempat menerima bola, tetapi diperbolehkan apabila pemain tersebut berlari pada kecepatan biasa.</li>
            <li class="desc-prod" style="text-align:justify">Pemain tidak diperbolehkan menyeruduk, menahan, mendorong, memukul, atau menjegal pemain lawan dengan cara bagaimanapun. Pelanggaran pertama terhadap peraturan ini akan dihitung sebagai kesalahan, pelanggaran kedua akan diberi sanksi berupa diskualifikasi pemain pelanggar hingga keranjang timnya dimasuki oleh bola lawan, dan apabila pelanggaran tersebut dilakukan dengan tujuan untuk mencederai lawan, maka pemain pelanggar akan dikenai hukuman tidak boleh ikut bermain sepanjang pertandingan. Pada masa ini, pergantian pemain tidak diperbolehkan.</li>
            <li class="desc-prod" style="text-align:justify">Wasit berhak untuk memperhatikan permainan para pemain dan mencatat jumlah pelanggaran dan memberi tahu wasit pembantu apabila terjadi pelanggaran berturut-turut.</li>
          </div>
          <br>
          <div class="accordion waves-effect waves-light col-md-12" id="section11" data-toggle="modal" data-target="#con-close-modal" style="text-align:center">Ayo Join!</div>
          @include('reg_match.reg_basket.create_basket')

         </div>
       </div>
     </div>
   </div>

   <div class="row">
    <div class="col-md-12">

      <!-- <a href="{{ action('EventController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> -->
    </div>
  </div>

</div><!--Close Top Match-->

<div class="col-md-3 right-column">
 <div class="top-score-title col-md-12 right-title">
  <h3>Latest News</h3>
  <div class="right-content">
    <p class="news-title-right">A New Old Life</p>
    <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
    <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
  </div>
  <div class="right-content">
    <p class="news-title-right">A New Old Life</p>
    <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
    <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
  </div>
  <div class="right-content">
    <p class="news-title-right">A New Old Life</p>
    <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
    <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
  </div>
</div>
<div class="top-score-title col-md-12">
  <img src="http://placehold.it/1000x475" alt="" />
</div>


</div>
</div>
</section>

@endsection
