# ezpwn
Wait what? A pwn challenge? Seems like the file isn't really descriptive am i right?

`nc pwn.cysc19.cyberyouth.sg 13200`

## Deployment
1. `cd generate`
2. `make`
3. `cd ../service`
4. `sudo ./build.sh`

- ezpwn
    - SHA1: `11b5e23d98e8f28d71a9571457ad5edffe2e73dc`
    - ELF 32-bit LSB executable

- ezpwn.c
    - SHA1: `0f889f640a776d1aa04d696569e178d0776e68c5`
    - C source code

## Solution
### Quick intro to file descriptors
File descriptors simply are indicators or handles used to access a file or i/o (input/output) resource , File descriptors are represented in C as integers and there are 3 types of file descriptors :
standard input (stdin) , its integer value is 0
standard output (stdout) , its integer value is 1
standard error (stderr) , its integer value is 2

We are given the source code as well as the compiled binary for this challenge. It appears that the `buf` variable needs to match `GIVEFLAGPLS\n`. 

```c
    if (!strcmp("GIVEFLAGPLS\n", buf)) {
        system("/bin/cat /home/ezpwn/flag.txt");
        exit(0);
    }
```

This can be acheived in the two lines.

```c
    int fd = number - 0x13371;
    int len = read(fd, buf, 32);
```

When the file descriptor variable, `fd`, is set to zero, the read system call reads input from stdin. Hence, our "number" in this case is `0x13371` in order to subtract `fd` to zero.

```bash
$ nc 127.0.0.1 13200
Number? 78705
GIVEFLAGPLS
CYS{d35cr1b3_4_f1l3_1n_0n3_1n7363r}

```

### Flag
`CYS{d35cr1b3_4_f1l3_1n_0n3_1n7363r}`