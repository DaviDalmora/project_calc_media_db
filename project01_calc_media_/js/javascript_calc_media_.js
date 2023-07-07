// Calcular Média
function calc(){
    let valor1 = Number(document.querySelector("#valor1").value); // Declaração de variável pro respectivo input
    let valor2 = Number(document.querySelector("#valor2").value);
    let valor3 = Number(document.querySelector("#valor3").value);
    if(valor1 > 10 || valor2 > 10 || valor3 > 10 || valor1 < 0 || valor2 < 0 || valor3 < 0){
        alert("Valor(es) Inválido(s)!");
        clear_inputs();
        die;
    }
    let calc = (valor1 + valor2 + valor3) / 3; // Cálculo da média
    document.querySelector("#result").value = calc.toFixed(2); // Declaração do resultado pra tag <span>
}

// Limpar inputs
function clear_inputs() {
    document.querySelector("#valor1").value = ""; // Limpar inputs
    document.querySelector("#valor2").value = "";
    document.querySelector("#valor3").value = "";
    document.querySelector("#result").value = ""; // Limpar <span>
}
