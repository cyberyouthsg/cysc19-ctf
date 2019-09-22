# CYS CTF

This repository houses all of the challenges that we have used, or will use, in CTFs organised by Cyber Youth Singapore.

## Challenge List

This is the list of challenges within this repository. _Unfortunately for now, this list has to be manually updated. Eventually, we'll shift to automatically building this list by walking the directories in this repository._

| Name                   | Category         | Difficulty |
| ---------------------- | ---------------- | ---------- |
| sample-challenge       | OSINT            | Easy       |
| hey-thats-pretty-good  | OSINT            | Medium     |
| domo-arigato-mr-roboto | Web Exploitation | Easy       |
| no-comment             | Web Exploitation | Easy       |
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
| unibase                | Misc             | Medium     |
| pixelate               | Misc             | Hard       |
| coffee                 | RE               | Easy       |
| recall                 | RE               | Medium     |
| arp-spoofed            | Networking       | Easy       |
| follow-that-stream     | Networking       | Easy       |
| mail                   | Networking       | Easy       |
| carve-that-flag        | Networking       | Medium     |

## How to Contribute

The ["Challenges" GitHub project](https://github.com/kaskrex/cys-ctf/projects/1) shows the current state of the challenges in this repo (e.g. To Review, To Merge, etc.).

### Challenge Creation

Take the following steps when creating a new challenge.

1. Create a new directory in the root of the repository with your challenge name. Also, create a branch to work on the challenge.

```bash
mkdir sample-challenge
git checkout -b sample-challenge
```

2. Add your challenge into the main challenge table, located in the main README.

<img alt="Challenge table additions" src="https://i.paste.pics/a63b77f609d1ae798b8d1c27525fd521.png?trs=115b59deab7d460455d250c0a61e87ca7f9945da47c1780af66c7ea670d0f499" width="560px" />

3. Once done with the creation of the challenge files, create a README file for the challenge. As seen below, it should contain the following:

    * Description of the challenge (to be displayed in the CTF system)
    * Deployment instructions (for operations to deploy the challenge)
    * Solution (how to solve the challenge, assume that the reader has basic knowlege only)
    * Flag (should be in the `CYS{abcdefg}` format)

![Challenge README](https://i.paste.pics/ac4fd2b8a16a37e2a3232fdf029dae8e.png?trs=115b59deab7d460455d250c0a61e87ca7f9945da47c1780af66c7ea670d0f499)

4. Create a Pull Request from the challenge branch against `master`. Add this PR to the "Challenges" project, in order for the rest of the team to review it.

<img alt="Add to GitHub project" src="https://i.paste.pics/7e5f8adadde7f1c1c4e877457e2fcfed.png?trs=115b59deab7d460455d250c0a61e87ca7f9945da47c1780af66c7ea670d0f499" width="360px" />

5. Once the Pull Request has 2 approvals, it is ready to be merged into `master`. Merge the branch with the "Squash and Merge" option.

<img alt="Squash and Merge option" src="https://i.paste.pics/bff14a3229536e39f31d137bd734aabd.png?trs=115b59deab7d460455d250c0a61e87ca7f9945da47c1780af66c7ea670d0f499" width="560px" />
