<?php
function generatePassword()
{
    $letters = 'abcdefghjkilmnopqrstuvwyxzABCDEFGHJKILMNOPQRSTUVWYXZ1234567890!"$=%&/()';
    $lettersArr = [];
    $lettersLength = strlen($letters);

    if (isset($_GET['passwordLength']) && $_GET['passwordLength'] != '') {

        for ($i = 0; $i < $_GET['passwordLength']; $i++) {
            $randNumb = rand(0, $lettersLength - 1);
            $lettersArr[] = $letters[$randNumb];
        }

        return implode($lettersArr);
    }
}

?>

