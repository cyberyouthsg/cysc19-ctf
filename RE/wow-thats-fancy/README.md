# Wow That's Fancy

Time to learn about malware analysis...... with a fancy malware.

## Deployment

Compile the program: `pyinstaller --onefile evil.py` in a Windows environment.

- evil.exe
	- SHA1: `79f0ae31c9ed28a291521390e4e100a1e78e96ca`
	- Pyinstaller compiled PE program

## Solution

Use Dependency Walker to find out it is a Pyinstaller compiled PE and extract the python script with [unpacker](https://github.com/countercept/python-exe-unpacker)
Use uncompyle6 on the extracted pyc file to get original python script.

### Flag

`CYS{n0w_U_Kn0W_4nt1_4Naly5is_mAlw4R3}`


