const base2048 = require('base2048')
const fs = require('fs')

// Flag in decimal notation
const uint8Array = new Uint8Array([67,89,83,123,54,48,48,100,98,121,51,95,99,104,52,114,52,99,55,51,114,95,108,49,109,49,55,53,125])
const arrayBuffer = uint8Array.buffer

const str = base2048.encode(arrayBuffer)
fs.writeFile("./distrib/flag.bin", str, function(err) {
    if(err) {
        return console.log(err);
    }

    console.log("The file is saved in the distrib directory.");
}); 