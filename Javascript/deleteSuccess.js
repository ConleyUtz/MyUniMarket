function deleteSuccess(deleteButtonID) {
    
    document.getElementById(deleteButtonID).onclick = function(){    
        var r = confirm("Do you really want to delete your account?"); 
        if (r == true) {
            window.location.href="try2.html";
            alert("Account deleted");
          } 
    }

}

