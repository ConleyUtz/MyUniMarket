function forgotPassword(recoverButtonID) {
    
    document.getElementById(recoverButtonID).onclick = function(){    
        
        alert("Redirection link to update your password has been sent to your email!");
        window.location.href="signin.php";

    }

}