
$(document).ready(function() {
  $(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
  });
});

$(document).ready(function(){
  var i=1;
  $("#add_row").click(function(){
    $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='Nickname"+i+"' type='text' placeholder='nickname' class='form-control input-md'  /> </td><td><input  name='posisi"+i+"' type='text' placeholder='Posisi'  class='form-control input-md'></td><td><input  name='no_punggung"+i+"' type='text' placeholder='No. Punggung'  class='form-control input-md'></td><td><input  name='foto"+i+"' type='file' placeholder='Select your Photo'  class='form-control input-md'></td>");

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
    i++;

  });
  $("#delete_row").click(function(){
    if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
   }
 });

});
