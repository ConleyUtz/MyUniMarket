/**
 * Script that will check if if a specific text field contains bad words
 * ID of the button that runs the script and the id of the field that the script is run on are passed in as parameters.
 * Implement all the TODO-s
 */

function badWordsParser(textFieldID, buttonID) {
   
    var badWordsArr = ["bloody","war","terror"]
   
    document.getElementById(buttonID).onclick = function (){

    var toCheck = document.getElementById(textFieldID).value;
   
    for(var i=0; i<badWordsArr.length; i++){
   
        if(toCheck.includes(badWordsArr[i])){
   
            alert("Inappropriate Word used.");
            return false;
   
        } 
   
    }
}
}