# MD5-Pin-EncoderDecoder

Reverse Hashing
----------------------------------------------------------
The PinMD5Decoder uses a very simple brute force attack to 
"reverse" an MD5 hash.  It is really not reversing the hash
at all as that would be impossible.  Instead it knows that 
the original pre hash text was a numeric string with 
exactly four numbers.

So the code uses four nested loops and tests all 
possible combinations of four numbers, and computes the
hashes of those values and checks to see if the computed hash
matches.

You can crack codes consisting alphabets or an alphanumeric 
code in similar manner by adjusting the for loops accordingly.

