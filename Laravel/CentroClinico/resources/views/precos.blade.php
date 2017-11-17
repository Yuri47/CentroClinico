@extends('layout.layout')
 
@section('title', 'Tabela de Preços -')

@section('ogUrl', 'valores-dos-servicos')
@section('ogTitle', 'Tabela de Preços')
@section('ogDescription', 'Centro Clinico Santa Maria')
@section('ogImage', 'ogimagehome.jpg')

@section('content')
     


<section class="section-table cid-qB4nLLwpCS" id="table1-o" data-rv-view="672">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Tabela de Preços 2017</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Segue abaixo a tabela com os valores dos nossos serviços de acordo com o DETRAN/DF</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Pesquisa:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      Serviço</th><th class="head-item mbr-fonts-style display-7">
                      Valor R$</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Obtenção 1ª CNH ( Categoria B – Automóvel )</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Obtenção 1ª CNH ( Categoria A – Moto )</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Obtenção 1ª CNH ( Categoria AB – Automóvel + Moto )</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Renovação CNH do DF</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Renovação CNH de Outros Estados</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Renovação CNH com Atividade Remunerada</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Adição de Categoria A (Moto)</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Trocar para categoria C, D e E</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Adição de EAR (Exercício de Atividade Remunerada)</td><td class="body-item mbr-fonts-style display-7">500,00</td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Mostrando</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">Resultados</span>
                <span class="infoFilteredBefore">(Filtrado de</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div> 
        </div>
      </div>
    </div>
</section>
    



@endsection