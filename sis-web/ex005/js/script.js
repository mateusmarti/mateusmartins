function calculos(form){
    form.login.value = form.login.value.toUpperCase();

    //entrada de dados
    pagamento = form.pagamento.value;

    quant1 = form.quant1.value;
    quant2 = form.quant2.value;
    quant3 = form.quant3.value;
    quant4 = form.quant4.value;
    

    //processamento
    tot1 = quant1 * 300;
    tot2 = quant2 * 700;
    tot3 = quant3 * 650;
    tot4 = quant4 * 299;

    if (pagamento == 'din') {
        perc = 0.15;
    }
    else {
        perc = 0;
    }

    total = tot1 + tot2 + tot3 + tot4;
    desconto = total * perc;
    apagar = total - desconto;
    
    //saida
    form.tot1.value = "R$ " + tot1.toFixed(2);
    form.tot2.value = "R$ " + tot2.toFixed(2);
    form.tot3.value = "R$ " + tot3.toFixed(2);
    form.tot4.value = "R$ " + tot4.toFixed(2);

    document.getElementById('total').value = total.toFixed(2);
    document.getElementById('desconto').value = desconto.toFixed(2);
    document.getElementById('apagar').value = apagar.toFixed(2);

}
function confirma(form){
    total = form.total.value;
    if(form.login.value == "") {
        alert("O Campo nome é obrigatório")
        form.login.focus();
        return false;
    } 
    else if(form.senha1.value == ""){
        alert("O Campo senha é obrigatório")
        form.login.focus();
        return false;
    }
    else if(form.senha1.value != form.senha2.value){
        alert("As senhas não coincidem")
        form.senha1.focus()
        return false
    }
    else if((quant1 == 0) && (quant2 == 0) && (quant3 == 0) && (quant4 == 0)) {
        alert("Você precisa selecionar pelo menos 1 produto");
        form.quant1.focus();
        return false;
    } 
    else {
        if(confirm("Confirma o envio do Orçamento no valor de " + apagar)){
            alert("Orçamento enviado com sucesso!!!");
            return true;
        }
        else{
            alert("Orçamento não enviado");
            return false;
        }
    }

    
}