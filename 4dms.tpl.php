<?php

    $message = '<table cellpadding="0" cellspacing="0" border="0"><tr><td colspan="2">Overstappen</td></tr><tr><td colspan="2">&nbsp;</td></tr><tr><td width="200">OrderID</td><td>: '.$this->uniekeID.'</td></tr>';
//if(typeformulier)
if($this->ingangsdatum){   
    $message .= '<tr><td width="200">Instapdatum</td><td>: '.$this->ingangsdatum.'</td></tr>';
}
if($this->contractdatum){   
    $message .= '<tr><td width="200">Contractdatum</td><td>: '.$this->contractdatum.'</td></tr>';
}
$message .= '<tr><td colspan="2">&nbsp;</td></tr><tr><td colspan="2">datum: '.date("d-m-Y") . ' ' . date("H:i:s").'</td></tr><tr><td colspan="2">-------------------------------------------------------</td></tr><tr><td colspan="2">Producten overzicht</td></tr><tr><td colspan="2">-------------------------------------------------------</td></tr>';
if($this->ppcStroom){
    $message .= '<tr><td>Stroomproduct </td><td>: '.$this->looptijdStroom .'-' . $this->ppcStroom . '</td></tr>';
}
if($this->ppcGas){
    $message .= '<tr><td>Gasproduct </td><td>: '.$this->looptijdGas .'-' . $this->ppcGas . '</td></tr>';
}
    $message .= '<tr><td>Actiecode</td><td>: ' . $this->actiecode . '</td></tr>';
    $message .= '<tr><td colspan="2">-------------------------------------------------------</td></tr><tr><td colspan="2">Klantgegegevens</td></tr><tr><td colspan="2">-------------------------------------------------------</td></tr>';


foreach($this->data as $key => $value) {
	if($key == 'submitBtn' || $key == 'voorwaarden') {
		continue;
	}
	/*
	if($key == 'sleuteloverdracht' && $value = '--') {
		$value = '';
	}*/
    
    if($key == 'voorletter'){
        $message .= '<tr><td width="200">Voorletters</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'tussenvoegsels'){
        $message .= '<tr><td width="200">Tussenvoegsel</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'achternaam'){
        $message .= '<tr><td width="200">Achternaam</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'geboortedatum'){
        $message .= '<tr><td width="200">Geboortedatum</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'aanhef'){
        $message .= '<tr><td width="200">Geslacht</td><td>: ' . (($value == "M") ? "Man" : "Vrouw") . '</td></tr>';
    }
    if($key == 'straat'){
        $message .= '<tr><td width="200">Straat</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'huisnummer'){
        $message .= '<tr><td width="200">Huisnummer</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'huisnummer_toevoeging'){
        $message .= '<tr><td width="200">Toevoeging</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'postcode'){
        $message .= '<tr><td width="200">Postcode</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'woonplaats'){
        $message .= '<tr><td width="200">Woonplaats</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'telefoonnummer'){
        $message .= '<tr><td width="200">Telefoon</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'email'){
        $message .= '<tr><td width="200">Emailadres</td><td>: ' . $value . '</td></tr>';
        $message .= '<tr><td colspan="2">-------------------------------------------------------</td></tr><tr><td colspan="2">Verhuizing</td></tr><tr><td colspan="2">-------------------------------------------------------</td></tr>';
    }

    if($key == 'sleuteloverdracht'){
        $message .= '<tr><td width="200">Datum Sleuteloverdracht</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'nieuwpostcode'){
        $message .= '<tr><td width="200">Postcode correspondentie adres</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'nieuwhuisnummer'){
        $message .= '<tr><td width="200">Huisnummer correspondentie adres</td><td>: ' . $value . '</td></tr>';
    }
    if($key == 'nieuwhuisnummer_toevoeging'){
        $message .= '<tr><td width="200">Toevoeging correspondentie adres</td><td>: ' . $value . '</td></tr>';
        $message .= '<tr><td colspan="2">-------------------------------------------------------</td></tr><tr><td colspan="2">Betaalgegevens</td></tr><tr><td colspan="2">-------------------------------------------------------</td></tr>';
    }
   
    if($key == 'betaling_betaalwijze'){
        $message .= '<tr><td width="200">Betaalwijze</td><td>: ' . (($value == "I") ? "Automatische incasso" : "Acceptgiro") . '</td></tr>';
    }
    if($key == 'rekeningnummer'){
        $message .= '<tr><td width="200">Bankrekening</td><td>: ' . $value . '</td></tr>';
        $message .= '<tr><td colspan="2">Ik ga akkoord met de producten en voorwaarden.</td></tr>';
    }
   
    if($key == 'woonbestemming'){
        $message .= '<tr><td width="200">Woon/Werk/Verblijfsfunctie</td><td>: ' . (($value == "J") ? "Ja, er woont of werkt iemand op dit adres" : "Nee, er woont of werkt niemand op dit adres") . '</td></tr>';
    }
}


$message .= '</table>';

echo $message;
