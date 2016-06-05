$(document).ready(function() {
    $(".increment.up").on('click', function() {
        console.log("incrementing vote");
    });

    $(".increment.down").on('click', function() {
        console.log("decrementing vote");
    });
});
