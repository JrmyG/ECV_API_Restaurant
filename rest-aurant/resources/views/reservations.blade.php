@extends('layouts.app')

    @section('body')
        <div id="reservation">
        <section id="entrees">

            <p> Entrées </p>

            <div id="entree">
            <entree-component />
            </div>

        </section>

        <section id="plats">

            <p> Plats </p>

            <div id="plat">
                <plat-component />
            </div>

        </section>

        <section id="desserts">

            <p> Desserts </p>

            <div id="dessert">
                <dessert-component />
            </div>

        </section>

        <section>
                <button> Valider la commande </button>

        </section>
        </div>
    @endsection