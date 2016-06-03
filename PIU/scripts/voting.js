function voting(){
  $(".increment").click(function(){
    var count = parseInt($("~ .count", this).text());
    var count = parseInt($("~ .count", this).text());
    if($(this).hasClass("up")) {
      var count = count + 1;
      $("~ .count", this).text(count);
    } else {
      //var count = count - 1;
      $("~ .count", this).text(count);     
    }
    $.get("../../api/votes/NewVote.php",{votable_id: $question['id'],});
    $(this).parent().addClass("bump");

    setTimeout(function(){
      $(this).parent().removeClass("bump");    
    }, 400);
  });
};

$(document).ready(function(){
  voting();
});
