/**
 * Script that will check if if a specific text field contains bad words
 * ID of the button that runs the script and the id of the field that the script is run on are passed in as parameters.
 * Implement all the TODO-s
 */

function badWordsParser(textFieldID, buttonID) {
  
  var badWordsArr = ["<<CREATE BAD WORDS ARRAY HERE>>"];

  document.getElementById(buttonID).onclick = function(){
      

    var toCheck = document.getElementById(textFieldID).value;

    //Counter Variable
    var i = 0;

    //Checking loop
    while(i < badWordsArr.length){

      if(toCheck.includes(badWordsArr[i])){

        //TODO Notify user that there is a bad word in the text field. Terminate the loop. 
      }
      else{

        //TODO Continue to loop unless something is found
      }

      i++;
    }
  }
}