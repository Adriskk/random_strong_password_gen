<?php


function random_password($length=5) {
    # DECLARING ARRAYS LIKE CHARS, LETTERS, NUMBERS
    $a_letters = range("a", "z");
    $A_letters = range("A", "Z");

    $_numbers = [
        "1","2","3","4","5","6","7","8","9","0"
    ];

    $_chain = "@,#,$,%,&,*,_,-,=,<,>,?";
    $_chars = explode(',', $_chain);

    $password = '';

    for($i=0; $i<$length; $i++) {
       # INSERTING RANDOM VALUES FROM THE BEFORE DECLARED ARRAYS TO THE ONE ARRAY
       $array[0] = $a_letters[array_rand($a_letters)];
       $array[1] = $A_letters[array_rand($A_letters)];
       $array[2] = $_chars[array_rand($_chars)];
       $array[3] = $_numbers[array_rand($_numbers)];

       # ADDING RANDOM CHOSEN CHAR OR NUM, LETTER TO THE GENERATING PASSWORD
       $password .= $array[rand(0, count($array)-1)];
    }

    return $password;
}

echo "Type the password length to be generated: "; $length = (int)fgets(STDIN);
$pass = random_password($length);

# PRINT GENERATED PASSWORD
echo "Your new password is:    {$pass}\n";

