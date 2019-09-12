# Unibase

After learning about binary encoding, my friend decided to harness the power of it to bypass the Twitter 280-character word limit. He sent me a encoded Tweet but it seems like gibberish to me.

## Deployment

1. Install Node JS
2. `npm install base2048`
3. `node generate/generate.js`

## Solution
Essentially, what base-2048 achieves is increasing the number of available characters we have for encoding by using Unicode characters. This vastly greater compared to Base64, where there are only 64 characters to work with. In base-2048, it uses a 11-bit encoding which allows 3080 bits to be encoded in the 280-character limit. Effectively, 385 octets of data per Tweet. More information about base-2048 can be found [here](https://github.com/qntm/base2048).

There is a JS script in the `solution` directory which decodes the base-2048 string into the flag.
1. Install Node JS
2. `npm install base2048`
3. `node solution/solution.js`

### Flag
`CYS{600dby3_ch4r4c73r_l1m175}`
