NAME = ezpwn
CC = gcc
CFLAGS = -no-pie -fno-pie -fno-stack-protector -z execstack -m32 -Wno-implicit-function-declaration
all:
	$(CC) ${NAME}.c $(CFLAGS) -o ../service/${NAME}
	cp ../service/$(NAME) ../distrib/
	cp $(NAME).c ../distrib/$(NAME).c
clean:
	rm -f ../service/${NAME}
	rm -f ../distrib/${NAME}
	rm -f ../distrib/$(NAME).c
