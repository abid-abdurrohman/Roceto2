

<!--SECTION SPONSOR-->
     <section class="container">
           <div class="client-sport client-sport-nomargin home-pg">
               <div class="content-banner">
                     <ul class="sponsor second">
                      <?php
                          $konek = mysqli_connect('localhost', 'root','','eo_sport');
                          if(!$konek){
                            die('Could not Connect');
                          }
      

                          $sql = "SELECT * FROM sponsors ORDER BY created_at DESC LIMIT 6";
                          $result = mysqli_query($konek, $sql);
                          while ($row = mysqli_fetch_array($result)) {
                      ?>
                      <li>
                        <a href="http://{!! $row['website_pt'] !!}" target="_blank">
                          <img src="{!! asset('').'/'.$row['foto_pt'] !!}" alt="" />
                        </a>
                      </li>
                      <?php
                          }
                      ?>
                    </ul>
                </div>
          </div>
     </section>