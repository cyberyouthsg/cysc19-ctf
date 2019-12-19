# CYS CTF

This repository houses all of the challenges that we have used, or will use, in CTFs organised by Cyber Youth Singapore.

## Challenge List

This is the list of challenges within this repository. _Unfortunately for now, this list has to be manually updated. Eventually, we'll shift to automatically building this list by walking the directories in this repository._

| Name                   | Category         | Difficulty |
| ---------------------- | ---------------- | ---------- |
| sample-challenge       | OSINT            | Easy       |
| prince-haus            | OSINT            | Easy       |
| east-india-company     | OSINT            | Easy       |
| sophia-hull            | OSINT            | Easy       |
| hey-thats-pretty-good  | OSINT            | Medium     |
| pierce-the-veil        | OSINT            | Medium     |
| domo-arigato-mr-roboto | Web Exploitation | Easy       |
| no-comment             | Web Exploitation | Easy       |
| whole-lotta-spam       | Web Exploitation | Easy       |
| hot-off-the-presses    | Web Exploitation | Medium     |
| Injection              | Web Exploitation | Medium     |
| Flagstore				 | Web Exploitation | Medium	 |
| bonjour                | Cryptography     | Easy       |
| football               | Cryptography     | Easy       |
| humpty-dumpty          | Cryptography     | Easy       |
| dictionary             | Cryptography     | Medium     |
| Asymmetric-1.0         | Cryptography     | Medium     |
| Asymmetric-2.0         | Cryptography     | Hard       |
| let-it-snow            | Forensics        | Easy       |
| bug-in-the-woods       | Forensics        | Medium     |
| treasure-chest         | Forensics        | Medium     |
| professional-slacker   | Forensics        | Hard       |
| insignificant          | Forensics        | Hard       |
| magnify                | Misc             | Easy       |
| basic                  | Misc             | Easy       |
| box                    | Misc             | Easy       |
| abstract               | Misc             | Medium     |
| unibase                | Misc             | Medium     |
| pixelate               | Misc             | Hard       |
| coffee                 | RE               | Easy       |
| string-cheese          | RE               | Easy       |
| recall                 | RE               | Medium     |
| wow-thats-fancy        | RE               | Medium   	 |
| Rox                    | RE               | Hard       |
| arp-spoofed            | Networking       | Easy       |
| follow-that-stream     | Networking       | Easy       |
| mail                   | Networking       | Easy       |
| frontier               | Networking       | Easy       | 
| carve-that-flag        | Networking       | Medium     |
| look-closer            | Networking	    | Medium	 |
| horseback              | Programming      | Easy       |
| optical                | Programming      | Medium     |
| ezpwn                  | pwn              | Easy       |

## Information of each challenge folder
Every challenge folder will have a `README.md` file that details what the challenge is about and how to solve it. The following explains the folders and their role.

- `distrib` contains all distributable files for all users
- `generate` contains all relevant source code used to generate the challenge (if not in service directory)
- `service` contains all the files needed to host the challenge on a server
- `solution` contains all the solution scripts or files.

### Requirements
Challenges that require hosting uses Docker to isolate the challenges.  
To install Docker for the common Linux distributions, run the script at: https://get.docker.com/

### Setting up a challenge
1. Change your directory to the challenge you would wish to host.
2. Run the `build.sh` scripts in either the root directory of the challenge or the service directory.
3. Type `docker inspect <containername>` or enter the docker via `docker exec -it <containername> sh` and `ifconfig` to find the IP address and head to that IP.
4. When attempting the challenges in your local setup, do take note to change all `*.cyberyouth.sg` to your local ip

## Authors

[Cyber Youth Singapore](https://cyberyouth.sg) would like to thank the following contributors and challenge authors:

- [kaskrex](https://github.com/kaskrex)
- [Javiery3889](https://github.com/Javiery3889)
- [chydarren](https://github.com/chydarren)
- [Red-Flag-Pole](https://github.com/Red-Flag-Pole)
- [ravernkoh](https://github.com/ravernkoh)
- [deveshl](https://github.com/deveshl)
- [DanielTanTWOfficial](https://github.com/DanielTanTWOfficial)
- [alloygoh](https://github.com/alloygoh)
- [Shadowtailx](https://github.com/Shadowtailx)
