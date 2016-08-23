@extends('layouts.app')

@section('content')

<section id="login" class="container secondary-page">
      <div class="general general-results players">
           <div class="top-score-title right-score col-md-6">
                <h3>Welcome<span class="point-int"> !</span></h3>
                <div class="col-md-12 login-page login-w-page">
                   <p class="logiin-w-title">The Tennis Club Tour is proud to present the Fan Credential, ATP’s free membership program for fans of Men’s Professional Tennis.</p>
                   <p>With 61 exciting venues in 30 countries, we understand how busy life can get, so tell us your preferences and we’ll create an
                   experience specifically designed for you.
                   </p>
                   <h3><img class="ball-tennis" src="images/ball.png" alt=""/>ATP World Tour Insider</h3>
                   <p>Get off-court and go behind the scenes of the tour each week.</p>
                   <h3><img class="ball-tennis" src="images/ball.png" alt=""/>ATP World Tour Weekly</h3>
                   <p>Official report and schedule including results</p>
                </div>
           </div><!--Close welcome-->
           <!-- LOGIN BOX -->
           <div class="top-score-title right-score col-md-6">
               <h3>Login<span> Now</span><span class="point-int"> !</span></h3>
                <div class="col-md-12 login-page">
                  <form method="post" class="login-form">
                        <div class="name">
                            <label for="name_login">Email:</label><div class="clear"></div>
                            <input id="name_login" name="name_login" type="text" placeholder="example@domain.com" required=""/>
                        </div>
                        <div class="pwd">
                            <label for="password_login">Password:</label><div class="clear"></div>
                            <input id="password_login" name="password_login" type="password" placeholder="********" required=""/>
                        </div>
                        <div id="login-submit">
                            <input type="submit" value="Submit"/>
                            <p>
                                <a href="redirect/facebook">FB Login</a>
                                <a href="redirect/twitter">Twitter Login</a>
                                <a href="redirect/google">G+</a>
                            </p>
                        </div>
                     </form>
                </div>

           </div><!--Close Login-->

          </div>
        </section>
@endsection
