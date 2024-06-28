import java.util.Scanner;

public class teste3 {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Digite o primeiro número: ");
        int num1 = scanner.nextInt();

        System.out.print("Digite o segundo número: ");
        int num2 = scanner.nextInt();

        // Calculando a soma
        int soma = num1 + num2;

        // Exibindo o resultado
        System.out.println("A soma entre " + num1 + " e " + num2 + " é igual a " + soma);

        scanner.close();
    }
}
