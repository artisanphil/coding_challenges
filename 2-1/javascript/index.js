let string = "";
for (row = 1; row <= 4; row++) {
    for (hashNum = 1; hashNum <= 10 - row * 2; hashNum++) {
        string += "#";
    }
    string += "\n";
    string += " ".repeat(row);
}
console.log(string);