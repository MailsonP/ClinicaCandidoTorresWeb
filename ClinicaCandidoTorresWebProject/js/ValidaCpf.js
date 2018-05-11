/**
 * Description of Paciente
 *
 * @author Felipe
 */

// TRATAMENTO DE ERROS DO CAMPO CPF
function VerificaCPF() {
    switch (ValidacaoCPF(document.getElementById("cpf").value)) {
        case 0:
            document.getElementById("error").innerHTML = "";
            return true;
            break;
        case 1:
            document.getElementById("error").innerHTML = "CPF Nao Existe!!!";
            return false;
            break;
        case 2:
            document.getElementById("error").innerHTML = "Total de Números Inválidos!!!";
            return false;
            break;
        case 3:
            document.getElementById("error").innerHTML = "CPF Inválido!!!";
            return false;
            break;
        case 4:
            document.getElementById("error").innerHTML = "";
            return false;
            break;

    }

}

// FUNÇÃO DE VALIDAÇÃO DO CAMPO CPF
function ValidacaoCPF(cpfi) {
   
    cpf = cpfi.replace(/[^0-9]/g, '');

    if (cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999")
        return 1;
    
    else if(cpf==""){
        return 4;
    }

    if (cpf.length != 11)
        return 2;

    add = 0;

    for (i = 0; i < 9; i ++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return 3;
    add = 0;
    for (i = 0; i < 10; i ++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return 3;

    return 0;
}

