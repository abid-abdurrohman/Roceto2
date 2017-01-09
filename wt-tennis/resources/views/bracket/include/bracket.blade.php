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
<?php
    $con = mysqli_connect('localhost', 'root','','eo_sport');
    if(!$con){
      die('Could not Connect');
    }
    mysqli_select_db($con ,'eo_sport');
?>
<main id="tournament">
  <?php
      $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=1";
      $result = mysqli_query($con, $sql);
      $count = mysqli_num_rows($result);
      if ($count == 0) {

      }else{
          echo "<ul class='round round-1'>";
          while ($row = mysqli_fetch_array($result)) {
            $id_match = $row['id'];
            $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
              INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.event_id=$event->id AND matches.id=$id_match";
            $result2 = mysqli_query($con, $sql2);
            $i[0] = "top";
            $i[1] = "bottom";
            $j = 0;
            echo "<li class='spacer'>&nbsp;</li>";
            $count = mysqli_num_rows($result2);
            if ($count == 0) {
  ?>
                <li class="game game-top">
                  <div class="input-group"><div class="form-control">&nbsp;</div>
                  <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
                </li>
                <li class='game game-spacer'>&nbsp;</li>
                <li class="game game-bottom">
                  <div class="input-group"><div class="form-control">&nbsp;</div>
                  <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
               </li>
  <?php
            }elseif ($count == 1) {
              while ($row2 = mysqli_fetch_array($result2)) {
  ?>
                  <li class="game game-top">
                    <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
                    <span class="input-group-addon"></span>
                  </li>
  <?php
              }
  ?>
              <li class='game game-spacer'>&nbsp;</li>
              <li class="game game-bottom">
                <div class="input-group"><div class="form-control">&nbsp;</div>
                <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
              </li>
  <?php
            }else{
              $i[0] = "top";
              $i[1] = "bottom";
              $j = 0;
              while ($row2 = mysqli_fetch_array($result2)) {
  ?>
           <li class="game game-{{ $i[$j] }}">
             <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
             <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
          </li>
  <?php
              if ($j == 0) {
                  echo "<li class='game game-spacer'>&nbsp;</li>";
              }
              $j++;
              }
          }
        }
          echo "<li class='spacer'>&nbsp;</li>";
          echo "</ul>";
      }
  ?>
 <?php
     $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=2";
     $result = mysqli_query($con, $sql);
     $count = mysqli_num_rows($result);
     if ($count == 0) {
         $sql4 = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=1";
         $result4 = mysqli_query($con, $sql4);
         $count4 = mysqli_num_rows($result4);
         if ($count4 == 1) {
             echo "<ul class='round round-2'>";
             $sql3 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
               INNER JOIN participants ON participants.id=match_teams.participant_id WHERE match_teams.status='win' AND matches.event_id=$event->id AND matches.no_match=1";
             $result3 = mysqli_query($con, $sql3);
             $count3 = mysqli_num_rows($result3);
             if ($count3 == 1) {
               while ($row3 = mysqli_fetch_array($result3)) {
                   echo "<li class='spacer'>&nbsp;</li>";
 ?>
                   <li class="game game-top">
                       <div class="input-group"><div class="form-control">{{ $row3['nama_tim'] }}</div>
                       <span class="input-group-addon"></span>
                   </li>
 <?php
                   echo "<li class='spacer'>&nbsp;</li>";
               }
             }else{
                   echo "<li class='spacer'>&nbsp;</li>";
 ?>
                   <li class="game game-top">
                       <div class="input-group"><div class="form-control">&nbsp;</div>
                       <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
                   </li>
 <?php
                   echo "<li class='spacer'>&nbsp;</li>";
             }
             echo "</ul>";
         }
     }else{
         echo "<ul class='round round-2'>";
         while ($row = mysqli_fetch_array($result)) {
           $id_match = $row['id'];
           $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
             INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.event_id=$event->id AND matches.id=$id_match";
           $result2 = mysqli_query($con, $sql2);
           $i[0] = "top";
           $i[1] = "bottom";
           $j = 0;
           echo "<li class='spacer'>&nbsp;</li>";
           $count = mysqli_num_rows($result2);
           if ($count == 0) {
 ?>
               <li class="game game-top">
                 <div class="input-group"><div class="form-control">&nbsp;</div>
                 <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
               </li>
               <li class='game game-spacer'>&nbsp;</li>
               <li class="game game-bottom">
                 <div class="input-group"><div class="form-control">&nbsp;</div>
                 <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
              </li>
 <?php
           }elseif ($count == 1) {
             while ($row2 = mysqli_fetch_array($result2)) {
 ?>
                 <li class="game game-top">
                   <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
                   <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
                 </li>
 <?php
             }
 ?>
             <li class='game game-spacer'>&nbsp;</li>
             <li class="game game-bottom">
               <div class="input-group"><div class="form-control">&nbsp;</div>
               <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
             </li>
 <?php
           }else{
             $i[0] = "top";
             $i[1] = "bottom";
             $j = 0;
             while ($row2 = mysqli_fetch_array($result2)) {
 ?>
          <li class="game game-{{ $i[$j] }}">
            <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
            <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
         </li>
 <?php
             if ($j == 0) {
                 echo "<li class='game game-spacer'>&nbsp;</li>";
             }
             $j++;
             }
         }
       }
         echo "<li class='spacer'>&nbsp;</li>";
         echo "</ul>";
     }
 ?>
 <?php
     $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=3";
     $result = mysqli_query($con, $sql);
     $count = mysqli_num_rows($result);
     if ($count == 0) {
         $sql4 = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=2";
         $result4 = mysqli_query($con, $sql4);
         $count4 = mysqli_num_rows($result4);
         if ($count4 == 1) {
             echo "<ul class='round round-3'>";
             $sql3 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
               INNER JOIN participants ON participants.id=match_teams.participant_id WHERE match_teams.status='win' AND matches.event_id=$event->id AND matches.no_match=2";
             $result3 = mysqli_query($con, $sql3);
             $count3 = mysqli_num_rows($result3);
             if ($count3 == 1) {
               while ($row3 = mysqli_fetch_array($result3)) {
                   echo "<li class='spacer'>&nbsp;</li>";
 ?>
                   <li class="game game-top">
                       <div class="input-group"><div class="form-control">{{ $row3['nama_tim'] }}</div>
                       <span class="input-group-addon"></span>
                   </li>
 <?php
                   echo "<li class='spacer'>&nbsp;</li>";
               }
             }else{
                   echo "<li class='spacer'>&nbsp;</li>";
 ?>
                   <li class="game game-top">
                       <div class="input-group"><div class="form-control">&nbsp;</div>
                       <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
                   </li>
 <?php
                   echo "<li class='spacer'>&nbsp;</li>";
             }
             echo "</ul>";
         }
     }else{
         echo "<ul class='round round-3'>";
         while ($row = mysqli_fetch_array($result)) {
           $id_match = $row['id'];
           $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
             INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.event_id=$event->id AND matches.id=$id_match";
           $result2 = mysqli_query($con, $sql2);
           $i[0] = "top";
           $i[1] = "bottom";
           $j = 0;
           echo "<li class='spacer'>&nbsp;</li>";
           $count = mysqli_num_rows($result2);
           if ($count == 0) {
 ?>
               <li class="game game-top">
                 <div class="input-group"><div class="form-control">&nbsp;</div>
                 <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
               </li>
               <li class='game game-spacer'>&nbsp;</li>
               <li class="game game-bottom">
                 <div class="input-group"><div class="form-control">&nbsp;</div>
                 <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
              </li>
 <?php
           }elseif ($count == 1) {
             while ($row2 = mysqli_fetch_array($result2)) {
 ?>
                 <li class="game game-top">
                   <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
                   <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
                 </li>
 <?php
             }
 ?>
             <li class='game game-spacer'>&nbsp;</li>
             <li class="game game-bottom">
               <div class="input-group"><div class="form-control">&nbsp;</div>
               <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
             </li>
 <?php
           }else{
             $i[0] = "top";
             $i[1] = "bottom";
             $j = 0;
             while ($row2 = mysqli_fetch_array($result2)) {
 ?>
          <li class="game game-{{ $i[$j] }}">
            <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
            <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
         </li>
 <?php
             if ($j == 0) {
                 echo "<li class='game game-spacer'>&nbsp;</li>";
             }
             $j++;
             }
         }
       }
         echo "<li class='spacer'>&nbsp;</li>";
         echo "</ul>";
     }
 ?>
 <?php
     $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=4";
     $result = mysqli_query($con, $sql);
     $count = mysqli_num_rows($result);
     if ($count == 0) {
         $sql4 = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=3";
         $result4 = mysqli_query($con, $sql4);
         $count4 = mysqli_num_rows($result4);
         if ($count4 == 1) {
             echo "<ul class='round round-4'>";
             $sql3 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
               INNER JOIN participants ON participants.id=match_teams.participant_id WHERE match_teams.status='win' AND matches.event_id=$event->id AND matches.no_match=3";
             $result3 = mysqli_query($con, $sql3);
             $count3 = mysqli_num_rows($result3);
             if ($count3 == 1) {
               while ($row3 = mysqli_fetch_array($result3)) {
                   echo "<li class='spacer'>&nbsp;</li>";
 ?>
                   <li class="game game-top">
                       <div class="input-group"><div class="form-control">{{ $row3['nama_tim'] }}</div>
                       <span class="input-group-addon"></span>
                   </li>
 <?php
                   echo "<li class='spacer'>&nbsp;</li>";
               }
             }else{
                   echo "<li class='spacer'>&nbsp;</li>";
 ?>
                   <li class="game game-top">
                       <div class="input-group"><div class="form-control">&nbsp;</div>
                       <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
                   </li>
 <?php
                   echo "<li class='spacer'>&nbsp;</li>";
             }
             echo "</ul>";
         }
     }else{
         echo "<ul class='round round-4'>";
         while ($row = mysqli_fetch_array($result)) {
           $id_match = $row['id'];
           $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
             INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.event_id=$event->id AND matches.id=$id_match";
           $result2 = mysqli_query($con, $sql2);
           $i[0] = "top";
           $i[1] = "bottom";
           $j = 0;
           echo "<li class='spacer'>&nbsp;</li>";
           $count = mysqli_num_rows($result2);
           if ($count == 0) {
 ?>
               <li class="game game-top">
                 <div class="input-group"><div class="form-control">&nbsp;</div>
                 <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
               </li>
               <li class='game game-spacer'>&nbsp;</li>
               <li class="game game-bottom">
                 <div class="input-group"><div class="form-control">&nbsp;</div>
                 <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
              </li>
 <?php
           }elseif ($count == 1) {
             while ($row2 = mysqli_fetch_array($result2)) {
 ?>
                 <li class="game game-top">
                   <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
                   <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
                 </li>
 <?php
             }
 ?>
             <li class='game game-spacer'>&nbsp;</li>
             <li class="game game-bottom">
               <div class="input-group"><div class="form-control">&nbsp;</div>
               <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
             </li>
 <?php
           }else{
             $i[0] = "top";
             $i[1] = "bottom";
             $j = 0;
             while ($row2 = mysqli_fetch_array($result2)) {
 ?>
          <li class="game game-{{ $i[$j] }}">
            <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
            <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
         </li>
 <?php
             if ($j == 0) {
                 echo "<li class='game game-spacer'>&nbsp;</li>";
             }
             $j++;
             }
         }
       }
         echo "<li class='spacer'>&nbsp;</li>";
         echo "</ul>";
     }
 ?>
<?php
    $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=5";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $sql4 = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=4";
        $result4 = mysqli_query($con, $sql4);
        $count4 = mysqli_num_rows($result4);
        if ($count4 == 1) {
            echo "<ul class='round round-5'>";
            $sql3 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
              INNER JOIN participants ON participants.id=match_teams.participant_id WHERE match_teams.status='win' AND matches.event_id=$event->id AND matches.no_match=4";
            $result3 = mysqli_query($con, $sql3);
            $count3 = mysqli_num_rows($result3);
            if ($count3 == 1) {
              while ($row3 = mysqli_fetch_array($result3)) {
                  echo "<li class='spacer'>&nbsp;</li>";
?>
                  <li class="game game-top">
                      <div class="input-group"><div class="form-control">{{ $row3['nama_tim'] }}</div>
                      <span class="input-group-addon"></span>
                  </li>
<?php
                  echo "<li class='spacer'>&nbsp;</li>";
              }
            }else{
                  echo "<li class='spacer'>&nbsp;</li>";
?>
                  <li class="game game-top">
                      <div class="input-group"><div class="form-control">&nbsp;</div>
                      <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
                  </li>
<?php
                  echo "<li class='spacer'>&nbsp;</li>";
            }
            echo "</ul>";
        }
    }else{
        echo "<ul class='round round-5'>";
        while ($row = mysqli_fetch_array($result)) {
          $id_match = $row['id'];
          $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
            INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.event_id=$event->id AND matches.id=$id_match";
          $result2 = mysqli_query($con, $sql2);
          $i[0] = "top";
          $i[1] = "bottom";
          $j = 0;
          echo "<li class='spacer'>&nbsp;</li>";
          $count = mysqli_num_rows($result2);
          if ($count == 0) {
?>
              <li class="game game-top">
                <div class="input-group"><div class="form-control">&nbsp;</div>
                <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
              </li>
              <li class='game game-spacer'>&nbsp;</li>
              <li class="game game-bottom">
                <div class="input-group"><div class="form-control">&nbsp;</div>
                <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
             </li>
<?php
          }elseif ($count == 1) {
            while ($row2 = mysqli_fetch_array($result2)) {
?>
                <li class="game game-top">
                  <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
                  <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
                </li>
<?php
            }
?>
            <li class='game game-spacer'>&nbsp;</li>
            <li class="game game-bottom">
              <div class="input-group"><div class="form-control">&nbsp;</div>
              <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
            </li>
<?php
          }else{
            $i[0] = "top";
            $i[1] = "bottom";
            $j = 0;
            while ($row2 = mysqli_fetch_array($result2)) {
?>
         <li class="game game-{{ $i[$j] }}">
           <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
           <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
        </li>
<?php
            if ($j == 0) {
                echo "<li class='game game-spacer'>&nbsp;</li>";
            }
            $j++;
            }
        }
      }
        echo "<li class='spacer'>&nbsp;</li>";
        echo "</ul>";
    }
?>
<?php
    $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=6";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $sql4 = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=5";
        $result4 = mysqli_query($con, $sql4);
        $count4 = mysqli_num_rows($result4);
        if ($count4 == 1) {
            echo "<ul class='round round-6'>";
            $sql3 = "SELECT match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
              INNER JOIN participants ON participants.id=match_teams.participant_id WHERE match_teams.status='win' AND matches.event_id=$event->id AND matches.no_match=5";
            $result3 = mysqli_query($con, $sql3);
            $count3 = mysqli_num_rows($result3);
            if ($count3 == 1) {
              while ($row3 = mysqli_fetch_array($result3)) {
                  echo "<li class='spacer'>&nbsp;</li>";
?>
                  <li class="game game-top">
                      <div class="input-group"><div class="form-control">{{ $row3['nama_tim'] }}</div>
                      <span class="input-group-addon"></span>
                  </li>
<?php
                  echo "<li class='spacer'>&nbsp;</li>";
              }
            }else{
                  echo "<li class='spacer'>&nbsp;</li>";
?>
                  <li class="game game-top">
                      <div class="input-group"><div class="form-control">&nbsp;</div>
                      <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
                  </li>
<?php
                  echo "<li class='spacer'>&nbsp;</li>";
            }
            echo "</ul>";
        }
    }else{
        echo "<ul class='round round-6'>";
        while ($row = mysqli_fetch_array($result)) {
          $id_match = $row['id'];
          $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
            INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.event_id=$event->id AND matches.id=$id_match";
          $result2 = mysqli_query($con, $sql2);
          $i[0] = "top";
          $i[1] = "bottom";
          $j = 0;
          echo "<li class='spacer'>&nbsp;</li>";
          $count = mysqli_num_rows($result2);
          if ($count == 0) {
?>
              <li class="game game-top">
                <div class="input-group"><div class="form-control">&nbsp;</div>
                <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
              </li>
              <li class='game game-spacer'>&nbsp;</li>
              <li class="game game-bottom">
                <div class="input-group"><div class="form-control">&nbsp;</div>
                <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
             </li>
<?php
          }elseif ($count == 1) {
            while ($row2 = mysqli_fetch_array($result2)) {
?>
                <li class="game game-top">
                  <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
                  <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
                </li>
<?php
            }
?>
            <li class='game game-spacer'>&nbsp;</li>
            <li class="game game-bottom">
              <div class="input-group"><div class="form-control">&nbsp;</div>
              <span class="input-group-addon"><span class="badge pull-right">&nbsp;</span></span>
            </li>
<?php
          }else{
            $i[0] = "top";
            $i[1] = "bottom";
            $j = 0;
            while ($row2 = mysqli_fetch_array($result2)) {
?>
         <li class="game game-{{ $i[$j] }}">
           <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
           <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
        </li>
<?php
            if ($j == 0) {
                echo "<li class='game game-spacer'>&nbsp;</li>";
            }
            $j++;
            }
        }
      }
        echo "<li class='spacer'>&nbsp;</li>";
        echo "</ul>";
    }
?>
</main>
