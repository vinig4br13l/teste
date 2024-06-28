#include <stdio.h>

int main() {
    int num1, num2;

    // Solicitando o primeiro número
    printf("Digite o primeiro número: ");
    scanf("%d", &num1);

    // Solicitando o segundo número
    printf("Digite o segundo número: ");
    scanf("%d", &num2);

    // Calculando a soma
    int soma = num1 + num2;

    // Exibindo o resultado
    printf("A soma entre %d e %d é igual a %d\n", num1, num2, soma);

    return 0;
}
