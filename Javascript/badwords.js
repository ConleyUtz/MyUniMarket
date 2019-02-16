/**
 * Script that will check if if a specific text field contains bad words
 * ID of the button that runs the script and the id of the field that the script is run on are passed in as parameters.
 * Implement all the TODO-s
 */

function badWordsParser(textFieldID, buttonID) {
  
  //Read BadWords.txt
  var fs = require("fs");

  var text = fs.readFileSync("./BadWords.txt", "utf-8");

  //Create array from text file
  var badWordsArr = text.split("\n");

  document.getElementById(buttonID).onclick = function(){
      

    var toCheck = document.getElementById(textFieldID).value;

    //Counter Variable
    var i = 0;

    //Checking loop
    while(i < badWordsArr.length){

      if(toCheck.includes(badWordsArr[i])){

        //Notify user of innapropriate word/phrase with popup box and terminate loop
        alert("Text contains an innpropriate word/phrase\nRemove the word/phrase and try again");
        return false;
      }

      i++;
    }
  }
}