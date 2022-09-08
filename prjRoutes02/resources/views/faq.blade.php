@extends('layouts.home-template')

@section('header')

<link rel="stylesheet" href="{{ asset('css/faq.css') }}">

@endsection

@section('content')

          <div class="main-container">
          <div class="card">
            <div class="flex-container">
              <div class="flex-container">
                <div>
                  <div class="container">
                    <h2>Perguntas Frequentes</h2><br></br>
                      <div class="accordion">

                        <div class="accordion-item">
                          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Como funciona o sistema de gamificação?</span><span class="icon" aria-hidden="true"></span></button>
                          <div class="accordion-content">
                            <p>Ao dar início em uma tarefa, o gestor inicia também uma contagem de tempo, na qual será base do sistema de pontuação, junto a pontuação de qualidade da tarefa dada pelo gestor e os respectivos membros. Essa pontuação irá para um sistema de rankeamento, disponível para visualização apenas pelos gestores. Os pontos poderão ser trocados por premiações criadas pelo gestor ou por acessórios para o avatar.</p>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">O ranking pode gerar improdutividade ou rivalidade?</span><span class="icon" aria-hidden="true"></span></button>
                          <div class="accordion-content">
                            <p>Não! O ranking será de visualização exclusiva do gestor. Sendo assim, não haverá comparações explicitas pelo sistema para os funcionários.</p>
                          </div>
                        </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Como funciona o sistema de pontuação?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>O sistema de pontuação funcionará como uma média ponderada, onde terá maior peso o tempo de tarefa, peso intermediário a avaliação do gestor e, o menor peso, a avaliação dos demais membros.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Quem terá acesso ao resultado do feedback?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>Tendo em vista as informações necessárias de satisfação do funcionário para com a empresa e pessoal, os feedbacks também serão de visualização exclusiva do gestor.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Quais são os benefícios do sistema para os membros?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>O sistema evidenciará a relação empresa e membro por meio dos feedbacks, onde a empresa ficará ciente do estado atual (mental, físico e profissional) do membro, além da opinião dele diante o tratamento da empresa. Se necessário, o membro poderá trocar seus pontos por benefícios à ele, além de melhorar a comuicação com o recurso do chat.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">O que posso fazer com a minha pontuação?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>Sua pontuação pode ser utilizada para adquirir mais itens de customização para o seu avatar ou trocar por premiações criadas pelo gestor na aba Loja de pontos.</p>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Como customizar o meu avatar?</span><span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                              <p>O avatar pode ser customizado na aba de customização do avatar, onde estará disponível os itens desbloqueados pelo usuário até o momento.</p>
                            </div>
                          </div>

                        <div class="accordion-item">
                          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Como eu posso trocar de linguagem?</span><span class="icon" aria-hidden="true"></span></button>
                          <div class="accordion-content">
                            <p>Na aba Linguagens, podendo selecionar qualquer linguagem disponível pelo sistema.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
    $(document).ready(function () {
      $(".sidebar-btn").click(function () {
        $(".wrapper").toggleClass("collapse");
      });
    });

    const items = document.querySelectorAll(".accordion button");

 function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

@endsection