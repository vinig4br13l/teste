const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Digite o primeiro número: ', (num1) => {
  rl.question('Digite o segundo número: ', (num2) => {
    // Convertendo os valores de string para números inteiros
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    
    // Calculando a soma
    const soma = num1 + num2;
    
    // Exibindo o resultado
    console.log(`A soma entre ${num1} e ${num2} é igual a ${soma}`);
    
    rl.close();
  });
});
