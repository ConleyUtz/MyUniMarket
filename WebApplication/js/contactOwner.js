function contactOwner(contactButtonID) {
    
    document.getElementById(contactButtonID).onclick = function(){    
        return prompt("Enter a brief message:");

    }

}