function voting(){

  $(".increment").click(function(){
    if($(this).hasClass("up")) {
      var tipo = $( ".up :nth-child(1)" ).html;
      var id = $( ".up :nth-child(2)" ).html;
      var resultado = $( ".up :nth-child(3)" ).html;
      if(resultado == true) {
        if(tipo === 'q'){
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [id, 'q', true]}
          });
        } else {
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [id, 'a', true]}
          });
        }
      } else {
        if(tipo === 'q'){
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'q', true]}
          });
        } else {
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'a', true]}
          });
        }     
      }     
    } else {
      var tipo = $( ".down :nth-child(1)" ).html;
      var id = $( ".down :nth-child(2)" ).html;
      var resultado = $( ".down :nth-child(3)" ).html;
      if(resultado == true) {
        if(tipo === 'q'){
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [id, 'q', false]}
          });
        } else {
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'changeVote',arguments: [id, 'a', false]}
          });
        }
      } else {
        if(tipo === 'q'){
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'q', false]}
          });
        } else {
          $.ajax({
          type: "POST",
          url: '../../api/votes/CallVoteFunctions.php',
          dataType: 'json',
          data: {functionname: 'newVote',arguments: [id, 'a', false]}
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
