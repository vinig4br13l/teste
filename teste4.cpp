#include <iostream>

using namespace std;

int main() {
    int num1, num2;

    // Solicitando o primeiro número
    cout << "Digite o primeiro número: ";
    cin >> num1;

    // Solicitando o segundo número
    cout << "Digite o segundo número: ";
    cin >> num2;

    // Calculando a soma
    int soma = num1 + num2;

    // Exibindo o resultado
    cout << "A soma entre " << num1 << " e " << num2 << " é igual a " << soma << endl;

    return 0;
}
