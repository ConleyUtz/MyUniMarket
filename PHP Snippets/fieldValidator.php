<?php
  if ($_POST){

  //! Checking if field 1 has correct input in it
  if(!$_POST['<<field1Name>>']){

    $error .= "Error message";

  }
  else{

    //! If field has value DO SOMETHING
  }

  //! Checking if field 2 has correct input in it
  if(!$_POST['<<field2Name>></field2Name>']){

    $error .= "Error message";
  }
  else{

      //! If field has value DO SOMETHING
  }

  //! If error message variable is not empty display the errors and finish running code there
  if($error != ""){

    $error = '<div class="signup-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
  }
  else{

      /**
       * IFF all fields have correct values in them execute the following code.
       */
  }

  }
?>