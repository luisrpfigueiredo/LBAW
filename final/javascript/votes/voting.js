function voting(){

  $(".increment").click(function(){
    if($(this).hasClass("up")) {
      var tipo = $( ".increment up :nth-child(1)" ).html;
      var id = $( ".increment up :nth-child(2)" ).html;
      var resultado = $( ".increment up :nth-child(3)" ).html;
      if(resultado == true) {
        if(tipo === 'q'){
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [true , id, 'q']}
          });
        } else {
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [true , id, 'a']}
          });
        }
      } else {
        if(tipo === 'q'){
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'q', true]},
          });
        } else {
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'a', true]},
          });
        }     
      }     
    } else {
      var tipo = $( "~ .increment down :nth-child(1)" ).html;
      var id = $( ".increment down :nth-child(2)" ).html;
      var resultado = $( ".increment down :nth-child(3)" ).html;
      if(resultado == true) {
        if(tipo === 'q'){
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [false ,id, 'q']}
          });
        } else {
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [false ,id, 'a']}
          });
        }
      } else {
        if(tipo === 'q'){
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'q', false]},
          });
        } else {
          jQuery.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'a', false]},
          });
        }     
      }     
    }

    $(this).parent().addClass("bump");

    setTimeout(function(){
      $(this).parent().removeClass("bump");    
    }, 400);
  });


  
};

$(document).ready(function(){
  voting();
});
