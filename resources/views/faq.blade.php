@extends('layouts.base')

@section('title', 'FAQ')
@section('css', 'faq')

@section('content')

<h1> Consultez la Foire Aux Questions </h1>

<h3> Comment faire une commande?</h3>

<section class="faq-section">
    <input type="checkbox" id="q1">
    <label for="q1">Les prix, sont-ils négociables? </label>
    <p> Vous pouvez faire confiance que sur notre site </p>
    <p>Sur notre site, les prix ne sont pas négociables</p>
</section>

<section class="faq-section">
    <input type="checkbox" id="q2">
    <label for="q2"> Comment acheter une voiture pendant la pandémie de la Covid? </label>
    <p>Sur notre site c'est simple</p>
    <p>Vous achetez votre prochaine voiture 100% en ligne. La livraison s'effectue dans le respect des gestes barrière pour que vous et nos agents soients protégés.</p>
</section>

<section class="faq-section">
    <input type="checkbox" id="q3">
    <label for="q3"> Quelles informations personnelles sont nécessaires pour créer un compte?  </label>
    <p> Si vous êtes interesé par une de nos offres, vous créez un compte </p>
    <p>Pour créer un compte, vous rénseignez des informations personnelles comme: votre nom et prénom, votre adresse email et votre numéro de téléphone</p>
</section>

<h3> Suivre ma commande</h3>

<section class="faq-section">
    <input type="checkbox" id="q4">
    <label for="q4"> Dans quelles tranches horaires ma commande est-elle livrée </label>
    <p> Nous livrons 6 jours par semaine </p>
    <p> Nos courriers travaillent du Lundi à Vendredi de 8h à 17h et le Samedi de 8h à 12h. Vous récevrez une message avec une tranche horaire prévue, le jour de la veille à la livraison  </p>
</section>

<section class="faq-section">
    <input type="checkbox" id="q5">
    <label for="q5"> Est-ce que je peux suivre ma commande? </label>
    <p>Oui</p>
    <p> Après l'achat, vous récevez un numéro de commande avec lequel vous pouvez suivre votre commande en cours, une fois connecté online </p>
</section>

<section class="faq-section">
    <input type="checkbox" id="q6">
    <label for="q6"> Puisse-je annuler la commande, si elle n'est pas livrée à temps? </label>
    <p> Oui </p>
    <p> Vous pouvez annuler la commande et vous serez rémboursé dans le cas ou votre commande n'a pas pu être livrés. Vous serez informé de l'état de votre commande </p>
</section>

<h3> Paiement et financement </h3>

<section class="faq-section">
    <input type="checkbox" id="q7">
    <label for="q7">Quels sont les moyens de paiement? </label>
    <p> Virement ou carte bancaine </p>
    <p> Vous pouvez payer votre commande soit par virement bancaire soit par carte bancaire. Les cartes bancaires acceptées: visa, master </p>
</section>

<section class="faq-section">
    <input type="checkbox" id="q8">
    <label for="q8"> Que se passe-t-il après le paiement? </label>
    <p> Félicitations ! </p>
    <p>Une fois le paiement efféctué, vous récevez un numéro de commande pour suivre l'avancement de votre commande.</p>
</section>

@endsection