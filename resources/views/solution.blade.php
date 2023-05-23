@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            font-size: 100%;
        }

        body {
            display: grid;
            place-items: center;
            /* overflow: hidden; */
        }

        .carousel {
            position: relative;
            width: 65vw;
            height: 300px;
            border: 5px solid #000;
            overflow: hidden;
        }

        .carousel>button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        .carousel__btn--right {
            right: 0;
        }

        .carousel__slider {
            position: absolute;
            left: 0;
            display: flex;
            width: 100%;
            height: 100%;
            z-index: -5;
            transition: transform 650ms ease-in-out;
        }

        .carousel__slide {
            display: grid;
            place-items: center;
            min-width: 100%;
            font: 900 1rem helvetica, sans-serif;
            border: .5px solid rgba(0, 0, 0, .5);
        }
    </style>

    {{-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv --}}

    <main class='carousel'>
        <button class='carousel__btn--right'>⮁</button>
        <button class='carousel__btn--left'>⮃</button>
        <div class='carousel__slider'>
            <div class='carousel__slide'>0</div>
        </div>
    </main>

    {{-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv --}}
    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Solution ";
        document.getElementById('img-bg-header').style.background =
            "url(addons/img/referenceBg1.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
    </script>
    <script>
        const slider = document.querySelector('.carousel__slider');
        let i = 0;
        let unit = 100;
        let time = 650;
        let active;

        function createSlide(increment, method) {
            const slide = document.createElement('div');
            slide.className = 'carousel__slide';
            slide.textContent = increment;
            slider[method](slide);
        }

        function toLeft() {
            if (active) return;
            createSlide(--i, 'prepend');
            slider.style.left = `${i*unit}%`;
            slider.style.transform = `translateX(${-i*unit}%)`;
            setTimeout(() => slider.children[1].remove(), time);
        }

        function toRight() {
            if (active) return;
            createSlide(++i, 'append');
            slider.style.transform = `translateX(${-i*unit}%)`;
            setTimeout(() => {
                slider.style.left = `${i*unit}%`;
                slider.children[0].remove();
            }, time);
        }

        const start = () => active = true;
        const end = () => active = false;

        function activate(e) {
            e.target.className === 'carousel__btn--left' && toLeft();
            e.target.className === 'carousel__btn--right' && toRight();
        }

        window.addEventListener('click', activate, false);
        slider.addEventListener('transitionstart', start, false);
        slider.addEventListener('transitionend', end, false);
    </script>

@endsection
