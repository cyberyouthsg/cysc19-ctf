# Box

Our team has intercepted a PDF file containing a set of user credentials, help us retrieve it!

## Deployment

Upload `box.pdf` in `distrib` to static file server.

- box.pdf
  - SHA1: `ec0b99170c6c8352f39fbcf58d722d8d6e8695d7`
  - PDF file containing redacted username and password fields. 

## Solution

PDF files can be viewed as many layers, the most bottom layer being the text in the PDF document. Hence, even if the text is redacted by Microsoft Word for example, the text itself will remain unchanged in the PDF. Therefore, we can select the text in the password field and copy-paste it to a text editor to reveal the flag.

### Flag
`CYS{bu7_c4n_u_533_7h15}`
