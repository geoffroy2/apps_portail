@extends('layout')

@section('content')
<div class="discovery-module-one-pop-out py-5 py-lg-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-4">
            <h2 class="display-1">Orange Bonjour</h2>
            <p class="lead">
            Ce portail web est une plateforme dont la fonction première est de vous donner accès à des ressources et services numériques en rapport avec votre travail à OBA.
Il s'agit d'un espace de travail, personnalisé et sécurisé avec des droits d'accès par utilisateur.
            </p>
            @if(isset($userName))
              <h4>Bonjour {{ $userName }}!</h4>
            @else
              <a href="{{ url('signin') }}" class="btn btn-secondary">
              Connectez-vous
              </a>
            @endif
          </div>
          <div class="col-12 col-md-6 col-lg-8">
          
            <img src="{{asset('/dist/img/team.jpg')}}" alt="" class="img-fluid" width="860" height="558" loading="lazy"/>
          </div>
        </div>
      </div>
    </div>


    
    <div class="bg-light pt-5 pb-3">
      <div class="container">
        <div id="discovery-carousel" class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide" id="slide1">
              <!-- Header title + link to see all -->
              <div class="d-flex mb-3">
                <h2 class="m-0">Connaitre nos produits</h2>
                <a href="#" class="btn btn-secondary ml-auto">En savoir plus<span class="sr-only"> about the module XXXX</span></a>
              </div>
              <div class="row discovery-carousel-frame-row">
                <div class="col-4">
                  <div class="card border">
                    <img src="{{asset('/dist/img/Savings.png')}}" alt="" class="rounded mx-auto d-block margin-top" width="340" height="340" loading="lazy"/>
                    <div class="card-body position-static">
                      <h3 class="card-title mb-2">Epargne Tik Tak</h3>
                      <p class="card-text mb-3">
                      Alimentez votre compte épargne en quelques clics depuis votre compte Orange Money de façon continue et sans limite
Bénéficiez d’un taux de rémunération exclusif de 3,5% annuel*.
                      </p>
                      <a href="https://orangebank.ci/epargne-tiktak/" class="btn btn-primary" target="_blank">Find out more<span class="sr-only">&nbsp;about the TITLE OF THE INSIGHT</span></a>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card border">
                  <br/>
                    <img src="{{asset('/dist/img/ico_loan.png')}}" alt="" class="rounded mx-auto d-block margin-top" width="340" height="340"  loading="lazy"/>
                    <div class="card-body position-static">
                      <h3 class="card-title mb-2">Prêt TikTak</h3>
                      <p class="card-text mb-3">
                      Empruntez à partir de 5 000 F CFA* à tout moment et de manière sécurisée depuis votre mobile
Réalisez vos demandes de prêt depuis votre application Orange Money ou en composant le #144*33#.
                      </p>
                      <a href="https://orangebank.ci/pret-tiktak/" class="btn btn-primary" target="_blank">Find out more<span class="sr-only">&nbsp;about the TITLE OF THE INSIGHT</span></a>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card border">
                    <img src="{{asset('/dist/img/app.png')}}" alt="" class="rounded mx-auto d-block margin-top" width="260" height="340" loading="lazy"/>
                    <div class="card-body position-static">
                      <h3 class="card-title mb-2">Compte courant</h3>
                      <p class="card-text mb-3">
                      Ouvrez votre compte courant** à un prix attractif afin de domicilier votre salaire, disposer d’un moyen de paiement et gérer vos dépenses à tout moment depuis votre application mobile Orange Bank.
                      </p>
                      <a href="https://orangebank.ci/comment-sinscrire/" class="btn btn-primary" target="_blank">Find out more<span class="sr-only">&nbsp;about the TITLE OF THE INSIGHT</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" id="slide12">
              <div class="d-flex mb-3">
                <h2 class="m-0">Actualités OBA</h2>
                <a href="#" class="btn btn-secondary ml-auto">Read more<span class="sr-only"> about the module XXXX</span></a>
              </div>
              <div class="row discovery-carousel-frame-row ">
                <div class="col-4">
                  <div class="card border">
                    <img src="{{asset('/dist/img/discovery.svg')}}" alt="" class="card-img-top bg-yellow" width="416" height="229" loading="lazy"/>
                    <div class="card-body position-static">
                      <h3 class="card-title mb-2">Port de masques</h3>
                      <p class="card-text mb-3">
                        Ommoditatur sendand amusanti nobisci psandae dolupta tatur, con corrum sam fugitatiunt aliae
                        pa doluptatur sit aut alite excerei ctasimin.
                      </p>
                      <a href="#" class="btn btn-primary">Find out more<span class="sr-only">&nbsp;about the TITLE OF THE INSIGHT</span></a>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card border">
                    <img src="{{asset('/dist/img/discovery.svg')}}" alt="" class="card-img-top bg-yellow" width="416" height="229" loading="lazy"/>
                    <div class="card-body position-static">
                      <h3 class="card-title mb-2">Port de Badges</h3>
                      <p class="card-text mb-3">
                        Ommoditatur sendand amusanti nobisci psandae dolupta tatur, con corrum sam fugitatiunt aliae
                        pa doluptatur sit aut alite excerei ctasimin.
                      </p>
                      <a href="#" class="btn btn-primary">Find out more<span class="sr-only">&nbsp;about the TITLE OF THE INSIGHT</span></a>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card border">
                    <img src="{{asset('/dist/img/discovery.svg')}}" alt="" class="card-img-top bg-yellow" width="416" height="229" loading="lazy"/>
                    <div class="card-body position-static">
                      <h3 class="card-title mb-2">Lancement SIR RH</h3>
                      <p class="card-text mb-3">
                        Ommoditatur sendand amusanti nobisci psandae dolupta tatur, con corrum sam fugitatiunt aliae
                        pa doluptatur sit aut alite excerei ctasimin.
                      </p>
                      <a href="#" class="btn btn-primary">Find out more<span class="sr-only">&nbsp;about the TITLE OF THE INSIGHT</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
@endsection