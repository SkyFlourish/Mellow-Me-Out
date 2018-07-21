<?php

  function isInputEmpty($input) {
    // Null is not data type specific
    if ($input == null) {
      // Input is null, code behaviour is specified on the
      // section calling the function.
      return true;
    }
    else {
      // Input is not null, code behaviour is not specified
      // as it is assumed that the input is present (but perhaps not valid).
      return false;
    }
  }

  function validateEmailAddressFormat($input) {
    // Called after determining that the input is not empty
    
  }
