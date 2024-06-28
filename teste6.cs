using System;

class Program
{
    static void Main()
    {
        int num1, num2;

        // Solicitando o primeiro número
        Console.Write("Digite o primeiro número: ");
        num1 = Convert.ToInt32(Console.ReadLine());

        // Solicitando o segundo número
        Console.Write("Digite o segundo número: ");
        num2 = Convert.ToInt32(Console.ReadLine());

        // Calculando a soma
        int soma = num1 + num2;

        // Exibindo o resultado
        Console.WriteLine($"A soma entre {num1} e {num2} é igual a {soma}");

        // Aguardando o usuário pressionar Enter para sair
        Console.ReadLine();
    }
}
