# Injection

After learning about databases, I decided to create one to store my reviews about movies.

But, I think there might be a flag somewhere...

### Hints
1. Take a look at OWASP TOP 10 2017.

## Deployment

Run `sudo ./build.sh` in the `service` directory.

## Solution

A simple `' OR 1=1 -- -` injection will allow us to display us the contents of the entire table and get the flag.

### Flag
`CYS{pr3p4r3_70_u53_pr3p4r3d_57473m3n75}`
