var botaoConsultaDatashow = document.querySelector("#consultaDatashow");
botaoConsultaDatashow.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#locacaoDeProjetoresParaAData");
    var dataShow = obtemDataHoraDoDataShow(form);
            
});

var botaoCadastroDatashow = document.querySelector("#cadastroDatashow");
botaoCadastroDatashow.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#locacaoDeProjetoresParaAData");
    var dataShow = obtemDadosDataShow(form);
                
});

var botaoConsultaSalaDeAula = document.querySelector("#consultaSalaDeAula");
botaoConsultaSalaDeAula.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#locacaoDeSalasParaAData");
    var SalaDeAula = obtemDataHoraDaSalaDeAula(form);
            
});

var botaoCadastroSalaDeAula = document.querySelector("#cadastroSalaDeAula");
botaoCadastroSalaDeAula.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#locacaoDeSalasParaAData");
    var SalaDeAula = obtemDadosSalaDeAula(form);
            
});

var botaoPerifericosDatashow = document.querySelector("#perifericosDatashow");
botaoPerifericosDatashow.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#termoDeLocacaoDeProjetores");
    var perifericos = obtemDadosPerifericos(form);
            
});

var botaoPerifericosRetirada = document.querySelector("#consultaPeriferico");
botaoPerifericosDatashow.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#termoDeRetiradaDoEquipamento");
    var perifericos = obtemNomePerifericos(form);
            
});

var botaoTermoRetirada = document.querySelector("#termoRetiradaPeriferico");
botaoTermoRetirada.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#termoDeRetiradaDoEquipamento");
    var perifericos = obtemTermoPerifericos(form);
            
});

var botaoRetiradaDatashow = document.querySelector("#retiradaDatashow");
botaoTermoRetirada.addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.querySelector("#termoDeLocacaoDeProjetores");
    var dataShow = obtemHoraFuncDataShow(form);
            
});

var botaoDevolucaoSim = document.querySelector("#devolucaoEquipamentosSim");
botaoDevolucaoSim.addEventListener("click", function(event){
    event.preventDefault();
    var form = document.querySelector("#termoDeLocacaoDeProjetores");
    var dataShow = obtemDevolucaoSim(form);
});

var botaoDevolucaoNao = document.querySelector("#devolucaoEquipamentosNao");
botaoDevolucaoNao.addEventListener("click", function(event){
    event.preventDefault();
    var form = document.querySelector("#termoDeLocacaoDeProjetores");
    var dataShow = obtemDevolucaoNao(form);
});

var botaoPerifericoSim = document.querySelector("#devolucaoPerifericosSim");
botaoDevolucaoSim.addEventListener("click", function(event){
    event.preventDefault();
    var form = document.querySelector("#termoDeRetiradaDoEquipamento");
    var perifericos = obtemPerifericoSim(form);
});

var botaoPerifericoNao = document.querySelector("#devolucaoPerifericosNao");
botaoDevolucaoSim.addEventListener("click", function(event){
    event.preventDefault();
    var form = document.querySelector("#termoDeRetiradaDoEquipamento");
    var perifericos = obtemPerifericoNao(form);
});

var botaoMemorando = document.querySelector("#cadastroMemorando");
botaoMemorando.addEventListener("click", function(event){
    event.preventDefault();
    var form = document.querySelector("#memorando");
    var memorando = obtemDadosMemorando(form);
    
});


function obtemDadosMemorando(form){
    var memorando = {
        nome:form.nome.value,
        setor:form.setor.value,
        ramal:form.ramal.value,
        dataUso:form.dataUso.value,
        horario:form.horario.value,
        recurso:form.recurso.value,
    }
}

function obtemPerifericoNao(form){
    var perifericos = {
    dataDevolucao: form.dataDevolucao.value,
    horaDevolucao: form.horaDevolucao.value,
    funcionario: form.funcionario.value,
    confirmacao: form.confirmacao.value,
    observacao: form.observacao.value,
    }
}

function obtemPerifericoSim(form){
    var perifericos = {
    dataDevolucao: form.dataDevolucao.value,
    horaDevolucao: form.horaDevolucao.value,
    funcionario: form.funcionario.value,
    confirmacao: form.confirmacao.value,
        
    }
    return perifericos;
}

function obtemDevolucaoNao(form){
    var dataShow = {
    dataDevolucao: form.dataDevolucao.value,
    horaDevolucao: form.horaDevolucao.value,
    funcionario: form.funcionario.value,
    confirmacao: form.confirmacao.value,
    observacao: form.observacao.value,
        
    }
    return dataShow;
}

function obtemDevolucaoSim(form){
    var dataShow = {
    dataDevolucao: form.dataDevolucao.value,
    horaDevolucao: form.horaDevolucao.value,
    funcionario: form.funcionario.value,
    confirmacao: form.confirmacao.value,
        
    }
    return dataShow;
}

function obtemHoraFuncDataShow(form){
    var dataSHow = {
        hora: form.hora.value,
        funcionario:form.funcionario.value,
        
    }
    return dataSHow;
}

function obtemTermoPerifericos(form){
    var perifericos = {
        data:form.data.value,
        hora:form.hora.value,
        nome:form.nome.value,
        setor:form.setor.value,
        ramal:form.ramal.value,
        quantidade:form.quantidade.value,
        descricao:form.descricao.value,
        patrimonio:form.patrimonio.value,
    }
}

function obtemNomePerifericos(form){
    var perifericos = {
        nome: form.nome.value,
    }
}

function obtemDadosPerifericos(form){
    var perifericos = {
        quantidade:form.quantidade.value,
        descricao:form.descricao.value,
            setor:form.setor.value,
    }
            return perifericos;
}

function obtemDataHoraDoDataShow(form) {
    var dataSHow = {
        data: form.data.value,
        hora: form.hora.value,
        
    }
    return dataSHow;
    
}

function obtemDadosDataShow(form) {
    var dataSHow = {
        data: form.data.value,
        nome: form.nome.value,
        setor:form.setor.value,
        ramal:form.ramal.value,
        
    }
    return dataSHow;
}

function obtemDataHoraDaSalaDeAula(form){
    var SalaDeAula = {
        data: form.data.value,
        hora: form.hora.value,
    }
    return SalaDeAula;
}

function obtemDadosDataShow(form) {
    var SalaDeAula = {
        data: form.data.value,
        nome: form.nome.value,        
        ramal:form.ramal.value,
        recurso:form.recurso.value,
        turno:form.turno.value,
        
    }
    return SalaDeAula;
}