# Hey, That's Pretty Good

Your mission, should you choose to accept it, is to locate the contact email for private investigation firm GBE Intelligence. You know they use the domain gbeintelligen.ce and only communicate over end-to-end encrypted email; can you use that information to find out the email for their head investigator?

## Deployment

No action should be necessary; this key should already be on keyserver.ubuntu.com, pgp.circl.lu and the sks-keyservers.net pool, which are the first few results for "pgp keyserver" on Google. A copy of the ASCII-armoured key is stored in generate/gbekey.asc for reference.

## Solution

Pretty Good Privacy, as alluded to in the challenge title, is a popular form of end-to-end encryption for email. Encryption keys are distributed via keyservers, and a recon technique for finding emails for a particular domain is to search PGP keyservers for that domain to find people who have posted their public keys online. To solve ths challenge, use your keyserver of choice (e.g. keyserver.ubuntu.com)to search for the string "gbeintelligen.ce". A result for `Chief Keef (CYS{l0st_in_the_s4uce}) <chieffkeeffsossa@gbeintelligen.ce>` should show up.

Flag is `CYS{l0st_in_the_s4uce}`
