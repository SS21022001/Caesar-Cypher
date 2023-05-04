# Caesar Cypher
Cryptography

The Caesar Cipher technique is one of the earliest and simplest methods of encryption technique. It’s simply a type of substitution cipher, i.e., each letter of a given text is replaced by a letter with a fixed number of positions down the alphabet. For example with a shift of 1, A would be replaced by B, B would become C, and so on. The method is apparently named after Julius Caesar, who apparently used it to communicate with his officials. 

Thus to cipher a given text we need an integer value, known as a shift which indicates the number of positions each letter of the text has been moved down. 
The encryption can be represented using modular arithmetic by first transforming the letters into numbers, according to the scheme, A = 0, B = 1,…, Z = 25. Encryption of a letter by a shift n can be described mathematically as. 

E_n(x)=(x+n)mod\ 26              
(Encryption Phase with shift n)

D_n(x)=(x-n)mod\ 26              
(Decryption Phase with shift n)

# Examples : 

Text : ABCDEFGHIJKLMNOPQRSTUVWXYZ
Shift: 23
Cipher: XYZABCDEFGHIJKLMNOPQRSTUVW

Text : ATTACKATONCE
Shift: 4
Cipher: EXXEGOEXSRGI

# Advantages:-
Easy to implement and use thus, making suitable for beginners to learn about encryption.
Can be physically implemented, such as with a set of rotating disks or a set of cards, known as a scytale, which can be useful in certain situations.
Requires only a small set of pre-shared information.
Can be modified easily to create a more secure variant, such as by using a multiple shift values or keywords.

# Disadvantages:-
It is not secure against modern decryption methods.
Vulnerable to known-plaintext attacks, where an attacker has access to both the encrypted and unencrypted versions of the same messages.
The small number of possible keys means that an attacker can easily try all possible keys until the correct one is found, making it vulnerable to a brute force attack.
It is not suitable for long text encryption as it would be easy to crack.
It is not suitable for secure communication as it is easily broken.
Does not provide confidentiality, integrity, and authenticity in a message.

# Algorithm for Caesar Cipher: 
Input: 

A String of lower case letters, called Text.
An Integer between 0-25 denoting the required shift.
Procedure: 

Traverse the given text one character at a time .
For each character, transform the given character as per the rule, depending on whether we’re encrypting or decrypting the text.
Return the new string generated
