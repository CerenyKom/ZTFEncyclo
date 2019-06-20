
@extends('layouts.app')

@section('content')
    <link href="css/pay.css" rel="stylesheet" type="text/css">
    <div id="w3l-payment-pg" class="w3l-payment-pg ">
        <div class="container">
            <h4 class="w3ls-inner-title">Gestion des Sessions</h4>
            <div class="content-wthree">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li class="w3-pay-active">Enregistrer un nouvelle sessiont</li>
                        <li>Liste des Etudiants par session</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab1 active">
                            <form action="#" method="post" class="agile_form">
                                <div class="w3ls-text sec-left">
                                    <label class="contact-form-w3ls">Entrer le libelle de la session</label>
                                    <input placeholder="Entrer le libelle de la session" name="first name" type="text" required="">
                                </div>
                                <div class="w3ls-text sec-right">
                                    <label class="contact-form-w3ls">Entrer sa duree</label>
                                    <input placeholder="Entrer sa duree" name="first name" type="text" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <input type="submit" value="Enregistrer">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection