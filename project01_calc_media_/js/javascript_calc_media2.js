let valores = Number(prompt("Informe a quantidade de valores que deseja calcular"));
var cont = 0;
var soma = 0

while (cont < valores){
    var valor = Number(prompt("Informe o valor"));
    var soma = soma + valor;
    var cont = cont + 1;
}
var media = soma / valores;
media = media.toFixed(2);

document.write("A média dos ",valores," valores é: ",media);
