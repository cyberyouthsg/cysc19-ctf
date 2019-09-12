const base2048 = require('base2048')
const fs = require('fs')

fs.readFile("./distrib/flag.bin", function read(err,data) {
    if(err) {
        return console.log(err);
    }
    var str
    str = data.toString()
    const arrayBuffer2 = base2048.decode(str)
    const uint8Array2 = new Uint8Array(arrayBuffer2)

    flag = ""
    for (var i = 0; i < uint8Array2.length; i++){
        flag += String.fromCharCode(uint8Array2[i])
    }
    console.log("The flag is: " + flag)
}); 