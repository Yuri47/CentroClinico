@extends('layout.layout')
 
@section('title', '')

@section('ogUrl', '')
@section('ogTitle', '')
@section('ogDescription', 'Centro Clinico Santa Maria')
@section('ogImage', 'ogimagehome.jpg')

@section('content')
     

<section class="features12 cid-qB9hsa5Oef" id="features12-p" data-rv-view="652">
 <div class="container">
        <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2">Centro Clínico Santa Maria</h2>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">Somos credenciados junto ao DETRAN-DF, para realização de Exames Médico e Avaliações Psicológicas especializadas para Obtenção, Renovação, Adição e/ou Troca de Categoria, de Carteira Nacional de Habilitação – CNH</h3>

        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbr-iconfont mbri-sites" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Tirar 1ª Habilitação</h4>
                        </div>
                    </div>                

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            O primeiro passo para tirar sua carteira de motorista é realizar o Exame Médico e Teste Psicotécnico.
                        </p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-drag-n-drop2 mbr-iconfont" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Adicionar Categoria</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Cada tipo de veículo possui sua categoria de habilitação. Moto está na Categoria A; Automóvel na B; Caminhão na Cat C; Etc… Regularize a categoria da sua CNH.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mbr-figure" style="width: 50%;">
                <img src="{{ asset('source/images/logo-centro-clinico-800x8003.png') }}" alt="Centro Clinico Santa Maria" title="" media-simple="true">
            </div>

            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbri-features mbr-iconfont" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Renovar CNH</h4>
                        </div>
                    </div>                

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Rápido e Fácil. Basta Realizar o Exame Clínico no Centro Clínico Santa Maria e aguardar sua nova Carteira de Habilitação.</p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-cash" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">CNH Profissional</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Motoristas Profissionais devem ter a informação EAR (Exerce Atividade Remunerada) em sua CNH.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    



@endsection