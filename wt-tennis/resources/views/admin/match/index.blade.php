
	<script type="text/javascript" src="{{ URL::asset('admin_asset/bracket-generator/jquery-1.12.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('admin_asset/bracket-generator/jquery.bracket.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_asset/bracket-generator/jquery.bracket.min.css') }}" />
	<?php
		$con = mysqli_connect('localhost', 'root', '', 'eo_sport');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}

		mysqli_select_db($con,"eo_sport");
		$sql = "SELECT * FROM participants";
		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		$i = 0;
		while ($data = mysqli_fetch_array($result)){
			$teams[$i] = $data['nama_tim'];
			$i++;
		}
	?>
	<script type="text/javascript">
	var saveData = {
			teams : [
				<?php
				$k = 0;
				for ($i=0; $i < $count/2; $i++) {
					for ($j=0; $j < 2; $j++) {
						$teamss[$i][$j] = $teams[$k];
						if ($j==0) {
							echo "['".$teamss[$i][$j]."'";
						}else if ($j==1) {
							echo ", '".$teamss[$i][$j]."'],";
						}
						$k++;
					}

				}
				?>
				]
					// [
			// ["Team 1",  "Team 2" ],
			// ["Team 3",  "Team 4" ],
			// ["Team 5",  "Team 6" ],
			// ["Team 7",  "Team 8" ],
			// ["Team 9",  "Team 10"],
			// ["Team 11", "Team 12"],
			// ["Team 13", "Team 14"],
			// ["Team 15", "Team 16"]
			// ],
			// results : [[ /* WINNER BRACKET */
			// [[3,5,"Match 1"], [2,4,"Match 2"], [6,3,"Match 3"], [2,3,"Match 4"], [1,5,"Match 5"], [5,3,"Match 6"], [7,2,"Match 7"], [1,2,"Match 8"]],
			// ]]
		}

	 /* Called whenever bracket is modified
	 *
	 * data:     changed bracket object in format given to init
	 * userData: optional data given when bracket is created.
	 */
	 function saveFn(data, userData) {
	 	var json = JSON.stringify(data)
	 	$('#saveOutput').text('POST '+userData+' '+json)
	  /* You probably want to do something like this
	  jQuery.ajax("rest/"+userData, {contentType: 'application/json', dataType: 'json', type: 'post', data: json})
	  */
	}

	function onclick(data) {
		$('#matchCallback').text("onclick(data: '" + data + "')")
	}

	function onhover(data, hover) {
		$('#matchCallback').text("onhover(data: '" + data + "', hover: " + hover + ")")
	}

	$(function() {
		$(function() {
	    var container = $('#bracket-save .bracket-demo')
	    container.bracket({
	      init: saveData,
	      save: saveFn,
	      userData: "http://myapi"})

	    /* You can also inquiry the current data */
	    var data = container.bracket('data')
	    $('#dataOutput').text(JSON.stringify(data))
	  })
	})
</script>
	<div id="matchCallback"></div>
	<div id="bracket-save">
		<div class="bracket-demo"></div>
	</div>
	<div id="dataOutput"></div>
