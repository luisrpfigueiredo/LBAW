function voting(){

  jQuery.ajax({
  type: "POST",
  url: '../../api/votes/CallVoteFunctions.php',
  dataType: 'json',
  data: {functionname: 'verifyVote',arguments: [$user['id'], $question['id'], 'q']},

  success: function (obj, textstatus) {
                if( !('error' in obj) ) {
                    var resultado = Boolean(obj.result);
                }
                else {
                    console.log(obj.error);
                }
          }
  });

  $(".increment").click(function(){
    var count = 
    var count = parseInt($("~ .count", this).text());
    //var count = parseInt($("~ .count", this).text());
    if($(this).hasClass("up")) {
      
      if(resultado == true) {
        jQuery.ajax({
        type: "POST",
        url: '../../api/votes/CallVoteFunctions.php',
        dataType: 'json',
        data: {functionname: 'changeVote',arguments: [false ,$user['id'], $question['id'], 'q']},

        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                          var resultado = Boolean(obj.result);
                      }
                      else {
                          console.log(obj.error);
                      }
                }
        });
      } else {
        jQuery.ajax({
        type: "POST",
        url: '../../api/votes/CallVoteFunctions.php',
        dataType: 'json',
        data: {functionname: 'newVote',arguments: [$user['id'], $question['id'], 'q', true]},
        });
      }
    } else {
      if(resultado == true) {
        jQuery.ajax({
        type: "POST",
        url: '../../api/votes/CallVoteFunctions.php',
        dataType: 'json',
        data: {functionname: 'changeVote',arguments: [true ,$user['id'], $question['id'], 'q']},

        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                          var resultado = Boolean(obj.result);
                      }
                      else {
                          console.log(obj.error);
                      }
                }
        });
      } else {
        jQuery.ajax({
        type: "POST",
        url: '../../api/votes/CallVoteFunctions.php',
        dataType: 'json',
        data: {functionname: 'newVote',arguments: [$user['id'], $question['id'], 'q', false]},
        });
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
