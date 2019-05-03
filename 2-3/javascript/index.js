class symbolDrawings
{        
    constructor(symbol) {
        this.symbol = symbol;
    }
    createHalfX(string, row)
    {
        string += " ".repeat(row - 1); 
        string += this.symbol.repeat(row);

        //total size of grid is 15.
        let paddingLength = 15 - (row * 4);
        if(paddingLength >= 0)
        {
            string += " ".repeat(paddingLength + 1);
        }

        string += this.symbol.repeat(row);
        string += " ".repeat(row - 1);

        string += "\n";

        return string;    
    } 
}

let myHashDrawing = new symbolDrawings("#")
let string = "";
for (row = 1; row <= 4; row++) {
    string = myHashDrawing.createHalfX(string, row);
}

for (row = 4; row > 0; row--) {
    string = myHashDrawing.createHalfX(string, row);
}

console.log(string);