function hideButton(ButtonID) {
    
    document.getElementById(ButtonID).onclick = function(){    
        var x = document.getElementById(ButtonID);
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
        alert("Thanks you for showing your interest in the item. We will provide you the seller's email soon.");

    }

}