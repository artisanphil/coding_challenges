using System;

namespace csharp
{
    class symbolDrawings
    {
        string symbol; 
        public symbolDrawings(string symbol)
        {
            this.symbol = symbol;
        }
        public static string repeat(string myString, int times)
        {
            string generatedString = "";
            for (int hashNum = 1; hashNum <= times; hashNum++) {            
                generatedString += myString;
            }

            return generatedString;
        }
        public void createHalfX(int row)
        {
            Console.Write(repeat(" ", row - 1));
            Console.Write(repeat(this.symbol, row));

            //total size of grid is 15.
            int paddingLength = 15 - (row * 4);
            if(paddingLength >= 0)
            {
                Console.Write(" ".PadLeft(paddingLength + 1));
            }

            Console.Write(repeat(this.symbol, row));
            Console.Write(repeat(" ", row - 1));

            Console.WriteLine("");
        }
    }
    class Program
    {
        static void Main(string[] args)
        {
            symbolDrawings myHashDrawing = new symbolDrawings("#");

            for (int row = 1; row <= 4; row++) {
                myHashDrawing.createHalfX(row);
            }
            for (int row = 4; row > 0; row--) {
                myHashDrawing.createHalfX(row);
            }
        }
    }
}
