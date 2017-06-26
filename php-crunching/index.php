<?php
  $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
  $dico = explode("\n", $string);

  //-------------------------------------


  function NumberCharat($dico){
    $array = array();
    foreach($dico as $recup){
      if(strlen($recup) === 15){
        array_push($array, $recup);
      }
    }
    return count($array) . ' mots de 15 caractères';
  }
  //------------------------------------

  function WordofWww($dico){
    $array = array();
    foreach($dico as $recup){
      if(strpos($recup, 'w') !== false){
        array_push($array, $recup);
      }
    }
    return count($array) . ' mots contenant un "w"';
  }
  //-------------------------------------------------

  function MasterQ($dico){
    $array = array();
    foreach($dico as $recup){
      if(substr($recup, -1) === 'q'){
        array_push($array, $recup);
      }
    }
    return count($array) . ' finnisent par un "q".';
  }

//------------------------------------------------------

  echo '<ul> Dictionnaire :
          <li> ' .  count($dico) . ' mots en tout</li>
          <li> ' . NumberCharat($dico) . '</li>
          <li> ' . WordofWww($dico) .' </li>
          <li> ' . MasterQ($dico) .'</li>
        </ul>';

?>
