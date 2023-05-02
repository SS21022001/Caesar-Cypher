<?php
// A PHP program to illustrate Caesar
// Cipher Technique

// This function receives text and shift
// and returns the encrypted text
function encrypt($text, $s)
{
	$result = "";

	// traverse text
	for ($i = 0; $i < strlen($text); $i++)
	{
		// apply transformation to each
		// character Encrypt Uppercase letters
		if (ctype_upper($text[$i]))
			$result = $result.chr((ord($text[$i]) +
							$s - 65) % 26 + 65);

	// Encrypt Lowercase letters
	else
		$result = $result.chr((ord($text[$i]) +
						$s - 97) % 26 + 97);
	}

	// Return the resulting string
	return $result;
}

// Driver Code
$text = "ATTACKATONCE";
$s = 4;
echo "Text : " . $text;
echo "\nShift: " . $s;
echo "\nCipher: " . encrypt($text, $s);

// This code is contributed by ita_c
?>
