@extends('layouts.app')

@section('content')

<style type="text/css">
    /*
    *  Flex Layout Specifics
    */
    main{ display:flex;flex-direction:row; }
    .round{ display:flex;flex-direction:column;justify-content:center;width:200px;list-style:none;padding:0; }
    .round .spacer{ flex-grow:1; }
    .round .spacer:first-child,
    .round .spacer:last-child{ flex-grow:.5; }
    .round .game-spacer{flex-grow:1;border-right: solid; }
    /*
    *  General Styles
    */
    li.game{ padding-left:20px; }
    li.game.winner{ font-weight:bold; }
    li.game span{  }
    li.game-top{ border-bottom:0px solid #aaa; }
    li.game-spacer{ border-right:0px solid #aaa;min-height:40px; }
    li.game-bottom{ border-top:0px solid #aaa; }
</style>
<section class="drawer">
	<div class="col-md-12 size-img back-img-single">
		<div class="effect-cover">
			<h3 class="txt-advert animated">The best ROGER FEDERER</h3>
			<p class="txt-advert-sub">Player on the ATP World Tour </p>
		</div>
	</div>
</section>
<section id="single-match-pl" class="container secondary-page">
	<div class="general general-results players">
		<div class="top-score-title right-score col-md-12">
			<div class="top-score-title player-vs">
				<h3>{{ $categories->nama_event }} - {{ $categories->nama }} <span>Bracket</span><span class="point-little">.</span></h3>
				<div class="main">
          @include('bracket.include.bracket',  ['id_category' => $categories->id])
				</div>
      </div>
    </div>
  </div>
</section>
@endsection
