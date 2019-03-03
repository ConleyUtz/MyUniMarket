    $("#passButton").click(function() {
           //Hide change username div
           $("#useBlock").css("display", "none");

           //Hide delete account div
           $("#deleteBlock").css("display", "none");

           //Display change password div
           $("#passBlock").css("display", "block");
    });

    $("#useButton").click(function() {
        //Hide change password div
        $("#passBlock").css("display", "none");

        //Hide delete account div
        $("#deleteBlock").css("display", "none");

        //Display change username div
        $("#useBlock").css("display", "block");
    });

    $("#deleteButton").click(function(){
        //Hide change password div
        $("#passBlock").css("display", "none");

        //Hide change username div
        $("#useBlock").css("display", "none");

        //Display delete account div
        $("#deleteBlock").css("display", "block");
    });