function logoutSuccess(logoutButtonID) {
    
    document.getElementById(logoutButtonID).onclick = function(){    
        window.location.href="signin.php";
        alert("You have been successfully logged out!");

    }

}

