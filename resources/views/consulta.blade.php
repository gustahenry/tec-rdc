<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Consulta</title>
</head>
<body>
    <nav class="h-20 w-screen bg-gradient-to-r from-[#c7dde6] to-[#2597bf] flex justify-around items-center">
        <img width="100" src="{{ asset('/img/logo.png') }}" />
        <h1 class="text-white font-semibold text-xl md:text-3xl lg:text-3xl">Sistema de Gerenciamento de EHS</h1>
        <div class=" md:w-20 lg:w-20"></div>  
    </nav>

    <div class="flex flex-col lg:items-center space-y-6 m-4">
        <h2 class="text-2xl text-center text-[#2596be]">Consulta de Equipamentos</h2>
       
        
        <div class="relative">
            <div class="bg-[#f4f4f5] rounded-md lg:w-[36rem] px-10 py-5 lg:space-x-6 relative z-20">
                <label for="equipamentos">Equipamentos</label>
                <select class="w-72 rounded-[0.3rem] border-solid border-[1.5px] border-cyan-600" name="equipamentos" id="equipamentos">
                    <option value="selecione" selected>Selecione um equipamento</option>
                    @foreach($equipamentos as $equipamento)
                    <option value="{{ $equipamento }}">{{ $equipamento }}</option>
                    @endforeach

                </select>
            </div>
            <div class="absolute -inset-1 rounded-md blur-sm bg-[#2596be] z-10"></div>
        </div>
        
        
        <form class="space-y-2" action="calibracoes">
            <div class="flex flex-wrap lg:justify-center lg:space-x-10 ">
                <div class="flex flex-col space-y-2">
                    <div class="space-x-5">
                        <label for="codigo" class="text-[#00a2e8]">Codigo:</label>
                        <input name="codigo" id="codigo" type="text" class="w-10 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                    <div class="space-x-5">
                        <label for="modelo" class="text-[#00a2e8]">Modelo</label>
                        <input  name="modelo" id="modelo" type="text" class="lg:w-72 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                    <div class="space-x-10">
                        <label for="serie" class="text-[#00a2e8]">Serie</label>
                        <input name="serie" id="serie" type="text" class="w-28 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                    <div class="space-x-11">
                        <label for="tipo" class="text-[#00a2e8]">Tipo</label>
                        <input name="tipo1" id="tipo1" type="text" class="w-10 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                        <input name="tipo2" id="tipo2" type="text" class="lg:w-72 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                    <div class="space-x-1">
                        <label for="fabricante" class="text-[#00a2e8]">Fabricante</label>
                        <input name="fabricante1" id="fabricante1" type="text" class="w-20 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                        <input name="fabricante2" id="fabricante2" type="text" class="lg:w-72 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                    <div class="flex  lg:space-x-8 justify-between">
                        <span class="text-[#00a2e8]">Capacidade</span>
                        <div>
                            <label for="min" class="text-[#00a2e8]">Min</label>
                            <input name="min" id="min" type="text" class="w-20 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                        </div>
                        <div>
                            <label for="max" class="text-[#00a2e8]">Max</label>
                            <input name="max" id="max" type="text" class="w-20 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                        </div>
                    </div>
                </div>
                <div id="image" class=" w-52 h-52 order-first md:order-none lg:order-none mb-5 lg:mb-0">
                    <img class="object-cover" width="180" src="" alt="">
                </div>
            </div>

            <div class="space-y-2">
                <div class="flex flex-row flex-wrap lg:space-x-6 lg:space-y-0 space-y-2">
                    <div class="space-x-8">
                        <label for="escala" class="text-[#00a2e8]">Escala</label>
                        <input name="escala" id="escala" type="text" class="w-20 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                    <div class="lg:space-x-5">
                        <label for="localizacao" class="text-[#00a2e8]">Localizacao</label>
                        <input name="localizacao1" id="localizacao1" type="text" class="w-10 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                        <input name="localizacao2" id="localizacao2" type="text" class="lg:w-72 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                    </div>
                </div>
                <div class="space-x-4">
                    <label for="situacao" class="text-[#00a2e8]">Situação</label>
                    <input name="situacao" id="situacao" type="text" class="w-20 px-1 bg-[#dbdbd1] rounded-[0.3rem] border-solid border-[1.5px] border-[#2596be]" disabled>
                </div>
            </div>
            
            <div class="flex justify-end space-x-2">
                <button type="submit" class="bg-[#495057] text-white rounded-[0.3rem] py-1 px-2">Calibração</button>
                <button class="bg-[#495057] text-white rounded-[0.3rem] py-1 px-2">Limpar</button>
                <button class="bg-[#495057] text-white rounded-[0.3rem] py-1 px-2">Cancelar</button>
            </div>
            
        </form>
        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selectEquipamentos = document.getElementById('equipamentos');
            var inputCodigo = document.getElementById('codigo');
            var inputModelo = document.getElementById('modelo');
            var inputSerie = document.getElementById('serie');
            var inputTipo1 = document.getElementById('tipo1');
            var inputTipo2 = document.getElementById('tipo2');
            var inputFabricante1 = document.getElementById('fabricante1');
            var inputFabricante2 = document.getElementById('fabricante2');
            var inputMin = document.getElementById('min');
            var inputMax = document.getElementById('max');
            var inputEscala = document.getElementById('escala');
            var inputLocalizacao1 = document.getElementById('localizacao1');
            var inputLocalizacao2 = document.getElementById('localizacao2');
            var inputSituacao = document.getElementById('situacao');
            var imgElement = document.getElementById('image').querySelector('img'); // Seleciona a tag img dentro da div específica
    
            selectEquipamentos.addEventListener('change', function () {
                var selectedEquipamento = selectEquipamentos.value;
    
                // Faça uma requisição AJAX para obter as informações do equipamento
                fetch('api.json')
                    .then(response => response.json())
                    .then(data => {
                        // Preencha os campos com os dados recebidos
                        var equipamentoInfo = data[selectedEquipamento] || {};
                        inputCodigo.value = equipamentoInfo.codigo || '';
                        inputModelo.value = equipamentoInfo.modelo || '';
                        inputSerie.value = equipamentoInfo.serie || '';
                        inputTipo1.value = equipamentoInfo.tipo1 || '';
                        inputTipo2.value = equipamentoInfo.tipo2 || '';
                        inputFabricante1.value = equipamentoInfo.fabricante1 || '';
                        inputFabricante2.value = equipamentoInfo.fabricante2 || '';
                        inputMin.value = equipamentoInfo.min || '';
                        inputMax.value = equipamentoInfo.max || '';
                        inputEscala.value = equipamentoInfo.escala || '';
                        inputLocalizacao1.value = equipamentoInfo.localizacao1 || '';
                        inputLocalizacao2.value = equipamentoInfo.localizacao2 || '';
                        inputSituacao.value = equipamentoInfo.situacao || '';
    
                        // Exiba a imagem
                        imgElement.src = equipamentoInfo.img || '';
                    })
                    .catch(error => {
                        console.error('Erro na requisição AJAX:', error);
                    });
            });
        });
    </script>
    
    
    
</body>
</html>