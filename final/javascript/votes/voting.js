function voting(){

  $(".increment").click(function(){
    if($(this).hasClass("up")) {
      var tipo = $( ".up :nth-child(1)" ).html();

      var id = $( ".up :nth-child(2)" ).html();

      var resultado = Boolean($( ".up :nth-child(3)" ).html());
      
      if(resultado == true) {
        if(tipo === 'q'){
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'changeVote',arguments: [true , id, 'q']},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        } else {
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'changeVote',arguments: [true , id, 'a']},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        }
      } else {
        if(tipo === 'q'){
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'newVote',arguments: [id, 'q', true]},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        } else {
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'newVote',arguments: [id, 'a', true]},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        }
      }
    } else {
      var tipo = $( ".down :nth-child(1)" ).html();
      var id = $( ".down :nth-child(2)" ).html();
      var resultado = $( ".down :nth-child(3)" ).html();
      if(resultado == true) {
        if(tipo === 'q'){
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'changeVote',arguments: [false ,id, 'q']},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        } else {
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'changeVote',arguments: [false ,id, 'a']},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        }
      } else {
        if(tipo === 'q'){
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'newVote',arguments: [id, 'q', false]},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
          });
        } else {
          $.ajax({
            type: "POST",
            url: '../../api/votes/CallVoteFunctions.php',
            dataType: 'json',
            data: {functionname: 'newVote',arguments: [id, 'a', false]},
            success: function(data){
              if(data['error'] != null){
                console.log(data['error']);
                return;
              }
              updateValue(data['result']);
            },
            error: function(data){
              console.log(data['error']);
            }
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

function updateValue(value) {
  $('#value').html(value);
};

$(document).ready(function(){
  voting();
});
