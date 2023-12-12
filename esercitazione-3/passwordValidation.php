<?php
function ValidatePssw($pssw, $attempt = 1){
    $psswLengthIsValid = false;
    $psswHasANumber = false;
    $psswHasAnUppercase = false;
    $psswHasSymbol = false;
    $errors = [];

    if(strlen($pssw ?? "") >= 8){
        $psswLengthIsValid = true;
    }

    for ($i = 0; $i < strlen($pssw ?? ""); $i++){
        if(is_numeric($pssw[$i])){
            $psswHasANumber = true;
        } else if (ctype_upper($pssw[$i])){
            $psswHasAnUppercase = true;
        } else if( preg_match('/[@_!#$%^&*()<>?\/|}{~:]/', $pssw[$i])){
            $psswHasSymbol = true;
        }
    }

    $isValid = $psswHasANumber && $psswHasAnUppercase && $psswLengthIsValid && $psswHasSymbol;

    if(!$psswHasANumber){
        array_push($errors,"- La password non ha un numero \n");
    }

    if(!$psswHasAnUppercase){
        array_push($errors,"La password non ha un carattere maiuscolo \n");
    }

    if(!$psswHasSymbol){
        array_push($errors,"La password non contiene un simbolo \n");
    }

    if(!$psswLengthIsValid){
        array_push($errors,"La password deve essere almeno di 8 caratteri");
    }

    $errorMessage = implode("- ", $errors);

    if($isValid){
        echo "Password valida";
    } else {
		$attempt++;
		if($attempt>3){
			$attempt=1;
			echo"numero massimo di tentativi raggiunti, riprovare tra 10 minuti";
		} else{
			echo "Password non valida per i seguenti motivi:\n$errorMessage\n";
			$newPssw=readline("tentativo n°$attempt (max 3 tentativi): inserisci nuovamente la password: ");
			ValidatePssw($newPssw, $attempt);
		}
    }
}