#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc){
    char buf[32] = {0x00};
    int number = 0x00;

    setbuf(stdout, NULL);

    printf("Number? ");
    scanf("%d", &number);

    int fd = number - 0x13371;
    int len = read(fd, buf, 32);

    if (!strcmp("GIVEFLAGPLS\n", buf)) {
        system("/bin/cat /home/ezpwn/flag.txt");
        exit(0);
    }

    return 0;
}
