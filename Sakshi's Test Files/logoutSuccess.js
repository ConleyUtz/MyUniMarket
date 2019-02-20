function logoutSuccess(logoutButtonID) {
    
    document.getElementById(logoutButtonID).onclick = function(){    
        function doConfirm(msg, yesFn, noFn) {
            var confirmBox = $("#confirmBox");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes,.no").unbind().click(function () {
                confirmBox.hide();
            });
            confirmBox.find(".yes").click(yesFn);
            confirmBox.find(".no").click(noFn);
            confirmBox.show();
        }
    }

}

function doConfirm(msg, yesFn, noFn) {
    var confirmBox = $("#confirmBox");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes,.no").unbind().click(function () {
        confirmBox.hide();
    });
    confirmBox.find(".yes").click(yesFn);
    confirmBox.find(".no").click(noFn);
    confirmBox.show();
}

$(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        var form = this;
        doConfirm("Are you sure you want to logout?", function yes() {
            form.submit();
        }, function no() {
            // do nothing
        });
    });
});