using System;

namespace csharp
{
    class Program
    {
        static void Main(string[] args)
        {
            for (int row = 1; row <= 4; row++) {
                for (int hashNum = 1; hashNum <= 10 - row * 2; hashNum++) {
                    Console.Write("#");
                }
                Console.WriteLine("");
                Console.Write(" ".PadLeft(row));
            }            
        }
    }
}
