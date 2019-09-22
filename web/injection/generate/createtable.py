#!/usr/bin/env python3
# Script to generate sqlite db file
import sqlite3

movieslist = [("Alita: Battle Angel",
"An astutely mounted sci-fi entertainer."),
("Avengers Endgame","Don't expect a typical happy ending. Just prepare to be wowed."),
("The Lion King", "Rawr 10/10"),
("Captain Marvel","It's very watchable"),
("IT Chapter Two","A very fine follow-up to the most successful horror film ever."),
("Dark Phoenix","Meh."),
("Spiderman: Far From Home","The best movie"),
("test","testing"),
("CYS{pr3p4r3_70_u53_pr3p4r3d_57473m3n75}","wow u found me")]

conn = sqlite3.connect('../service/src/movies.db')
c = conn.cursor()
c.execute("CREATE TABLE movies (movietitle text, review text)")
c.executemany('INSERT INTO movies VALUES (?,?)',movieslist)
conn.commit()
conn.close()