<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Calibracoes</title>
</head>
<body>
    <nav class="h-20 w-screen bg-gradient-to-r from-[#c7dde6] to-[#2597bf] flex justify-around items-center">
        <img width="100" src="{{ asset('/img/logo.png') }}" />
        <h1 class="text-white font-semibold text-xl md:text-3xl lg:text-3xl">Sistema de Gerenciamento de EHS</h1>
        <div class=" md:w-20 lg:w-20"></div>  
    </nav>

    <div class="flex flex-col lg:items-center space-y-6 m-4">
        <h2 class="text-2xl text-[#2596be]">Consulta de Calibrações de Produtos</h2>

        <div class="relative">
            <div class="bg-[#f4f4f5] rounded-md lg:w-[36rem] px-10 py-5 lg:space-x-6 relative z-20">
                <label for="equipamentos">Equipamentos</label>
                <select class="w-72 rounded-[0.3rem] border-solid border-[1.5px] border-cyan-600" name="equipamentos" id="equipamentos">
                    <option value="selecione" selected>Selecione um equipamento</option>
                    @foreach ($calibracaoData as $equipamento => $dados)
                        <option value="{{ $equipamento }}">{{ $equipamento }}</option>
                    @endforeach
                </select>
            </div>
            <div class="absolute -inset-1 rounded-md blur-sm bg-[#2596be] z-10"></div>
        </div>
        <div class="overflow-auto">
          <table class="table-auto border-separate border-spacing-1 rounded-sm">
            <thead class="bg-[#007199] text-left text-white">
              <tr>
                <th class="rounded-tl-lg px-2">Laboratorio</th>
                <th class="px-2">Certificado</th>
                <th class="px-2">Norma</th>
                <th class="px-2">DrCalibracao</th>
                <th class="px-2">Prazo Calibracao</th>
                <th class="rounded-tr-lg px-2">Prox. Calibracao</th>
              </tr>
            </thead>
            <tbody id="calibration-data-body">
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
          var selectEquipamentos = document.getElementById('equipamentos');
          var calibrationDataBody = document.getElementById('calibration-data-body');
  
          selectEquipamentos.addEventListener('change', function () {
              var selectedEquipamento = selectEquipamentos.value;
  
              if (selectedEquipamento === 'selecione') {
                  // Limpar o corpo da tabela se a opção "Selecione um equipamento" for escolhida
                  calibrationDataBody.innerHTML = '';
                  return;
              }
  
              // Faça uma requisição AJAX para obter as informações de calibração do equipamento
              fetch('calibracao.json')
                  .then(response => response.json())
                  .then(data => {
                      // Limpar o corpo da tabela
                      calibrationDataBody.innerHTML = '';
  
                      // Preencher a tabela com os dados recebidos
                      var calibrationInfo = data[selectedEquipamento] || {};
                      var row = document.createElement('tr');
                      row.innerHTML = `
                          <td>${calibrationInfo.laboratorio || ''}</td>
                          <td>${calibrationInfo.certificado || ''}</td>
                          <td>${calibrationInfo.norma || ''}</td>
                          <td>${calibrationInfo.drcalibracao || ''}</td>
                          <td>${calibrationInfo.prazo || ''}</td>
                          <td>${calibrationInfo.prox || ''}</td>
                          <td class="px-5"><a href="${calibrationInfo.pdf || '#'}"><img width="25" src="{{ asset('/img/download.png') }}" /></a></td>
                      `;
                      calibrationDataBody.appendChild(row);
                  })
                  .catch(error => {
                      console.error('Erro na requisição AJAX:', error);
                  });
          });
      });
  </script>
  
    
</body>
</html>