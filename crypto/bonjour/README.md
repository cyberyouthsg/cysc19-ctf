# Bonjour!

Meeska, Mooska, Mickey Mouse! As Mickey walked to the doorstep of the club house, he found this scroll with the title “le chiffre indéchiffrable” pasted on the door.

```
Owpqvyfifsxuwpc sl ssnlmzo vri dxoa xsd bjsw AFT wzextgxkc :) Dsgwqnmt, nsl'f ziki tmcbx gr mim hav'v urmi vio xa lq dlc ahbwv opcvpczuyk ee gqe lyhs nzme kjkpjqbaw xa acfi wai zjsy i hvee. Mzmg, mf qu fipk wghsdbcxx daf sgy fw udew psnwvyqpoh gz clvid bq weiq mimv iia ds rts ngt fptoi nagclmavu. Gmrt zini mvf cynbcll jdwo Mczqf Sgyfp Usremdiji.
```

You are required to obtain the secret key and put it into the CYS flag format, i.e. `CYS{key}`.

### Hints

1. This is a ciphertext-only (COA) attack where you need to brute force the secret key. 

## Deployment 

None required. 

## Solution

1. The phrase ‘le chiffre indéchiffrable’ in the challenge statement suggests that the characters have been encrypted using vigenère cipher. 
2. With Guballa Vigènere Solver at https://www.guballa.de/vigenere-solver, paste the ciphertext and attempt to break cipher with the following configurations.
   - Cipher Variant: Classical Vigènere 
   - Language: English
   - 3-30
3. The secret key will be revealed, and the flag will be `CYS{mickeymouse}`. 
