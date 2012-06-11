<?php
 
function generatePassword($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	
	switch ($strength) {
		case 8:
			$consonants .= '@#$%';
		case 4:
			$consonants .= '23456789';
		case 2:
			$vowels .= "AEUY";
		case 1:
			$consonants .= 'BDGHJLMNPQRSTVWXZ';
			break;
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

if (!isset($_REQUEST['length'])) {
	header('Location: ' . $_SERVER['PHP_SELF'] . '?length=9&strength=8');
} else {
	$length = (int)$_REQUEST['length'];
}
if (!isset($_REQUEST['strength'])) {
	header('Location: ' . $_SERVER['PHP_SELF'] . '?length=9&strength=8');
} else {
	$strength = (int)$_REQUEST['strength'];
}

echo generatePassword($length, $strength);
