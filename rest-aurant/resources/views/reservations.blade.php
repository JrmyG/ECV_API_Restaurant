@extends('layouts.app')


    @section('body')
        <div id="reservation">
        <section id="entrees">

            <p> Entrées </p>

            <div id="app">
            <entree-component />
            </div>

        </section>

        <section id="plats">

            <p> Plats </p>

            <select>
                <option value="">--Choisissez votre plat--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>

        </section>

        <section id="desserts">

            <p> Desserts </p>

            <select>
                <option value="">--Choisissez votre dessert--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>

        </section>

        <section>
                <button> Valider la commande </button>

        </section>
        </div>
    @endsection