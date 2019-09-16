# Magnify

I was doing some decoding of hexadecimals when I accidentally mixed it up with my text file. Help me retrieve the flag!

### Hints

Some people tell me that my expressions aren't really regular

## Deployment

Run `./generate/build.py`

- flag.txt
    - SHA1: `64bd8dee38bf07e7bea77404c677c770f786d779`
    - ASCII Text

## Solution

Use a regex to find the characters in the file that belong to base-16, afterwards decode it to get the flag. Cyberchef recipe can be found [here](https://gchq.github.io/CyberChef/#recipe=Regular_expression('User%20defined','%5B0-9a-f%5D',true,true,false,false,false,false,'List%20matches')From_Hex('Auto')).

### Flag
`CYS{r363x_15_my_b357_fr13nd}`
