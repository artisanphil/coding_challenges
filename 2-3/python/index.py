class symbolDrawings:
    def __init__(self, symbol):
        self.symbol = symbol

    def createHalfX(self, row):
        print(" " * (row - 1), end="")
        print(self.symbol * row, end="")

        #total size of grid is 15.
        paddingLength = 15 - (row * 4)
        if(paddingLength >= 0):
            print(" " * (paddingLength + 1), end="")

        print(self.symbol * row, end="")
        print(" " * (row - 1), end="")


        print("")

myHashDrawing = symbolDrawings("#")

for row in range(1, 5):
    myHashDrawing.createHalfX(row)

for row in range(4, 0, -1):
    myHashDrawing.createHalfX(row)