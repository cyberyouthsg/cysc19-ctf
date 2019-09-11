#include <stdio.h>
#include <string.h>
#include <stdint.h>

int main(int argc, char const *argv[])
{
    uint8_t size = 28;
    uint8_t flagarr[29] = {62, 84, 78, 118, 109, 46, 113, 46, 109, 48, 44, 105, 49, 90, 50, 99, 109, 43, 112, 49, 99, 90, 50, 44, 104, 46, 120, 5};
    
    for(int i = 0; i < size; i++){
        flagarr[i] += 5;
    }

    printf("Hey there! Help me recover the flag! - Tracer\n> ");
    
    uint8_t buffer[size+1];
    fgets(buffer,size+1,stdin);

    if(strcmp(buffer,flagarr) == 0) {
        printf("Splendid! You got the flag!\n");
    }
    else {
        printf("Sorry, but that wasn't the flag. Ever get that feeling of déjà vu?\n");
    }

    return 0;
}