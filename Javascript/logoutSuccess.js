function logoutSuccess(logoutButtonID) {
    
    document.getElementById(logoutButtonID).onclick = function(){    
        window.location.href="signup.php";
        alert("You have been successfully logged out!");

    }

}

