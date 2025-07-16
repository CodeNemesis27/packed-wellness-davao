<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packed Wellness Davao</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ url('./frontend/assets/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">

    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="{{ url('./frontend/assets/images/hero-banner.png') }}"
        media="min-width(768px)">
    <link rel="preload" as="image" href="{{ url('./frontend/assets/images/hero-banner-bg.png') }}"
        media="min-width(768px)">
    <link rel="preload" as="image" href="{{ url('./frontend/assets/images/hero-bg.jpg') }}">

</head>

<body id="top">

    {{-- Header --}}
    <header class="header" data-header>
        <div class="container">

            <h1>
                <a href="#" class="logo">Packed Wellness Davao<span class="span">.</span></a>
            </h1>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li class="nav-item">
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="navbar-link" data-nav-link>About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#food-menu" class="navbar-link" data-nav-link>Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="#testimonials" class="navbar-link" data-nav-link>Testimonials</a>
                    </li>

                    <li class="nav-item">
                        <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
                    </li>

                </ul>
            </nav>

            <div class="header-btn-group">
                {{-- <button class="search-btn" aria-label="Search" data-search-btn>
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <button class="btn btn-hover">Reservation</button> --}}

                <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
                </button>
            </div>

        </div>
    </header>

    <main>
        <article>

            {{-- Hero Section --}}
            <section class="hero" id="home"
                style="background-image: url('./frontend/assets/images/hero-bg.jpg')">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">Health goals made easy,</p>

                        <h2 class="h1 hero-title">We've got it all prepped for you!</h2>

                        <p class="hero-text">
                            Nourish your wellness with nutritious ready-to-eat meals delivered fresh every morning,
                            packed securely for your convenience.
                        </p>

                    </div>

                    <figure class="hero-banner">
                        <img src="./frontend/assets/images/hero-banner-bg.png" width="820" height="716"
                            alt="" aria-hidden="true" class="w-100 hero-img-bg">

                        <img src="./frontend/assets/images/hero-banner.png" width="700" height="637" loading="lazy"
                            alt="Burger" class="w-100 hero-img">
                    </figure>

                </div>
            </section>

            {{-- Promo --}}
            <section class="section section-divider white promo">
                <div class="container">

                    <ul class="promo-list has-scrollbar">

                        {{-- @foreach ($meal_categories as $meal_category)
                            <li class="promo-item">
                                <div class="promo-card">

                                    <div class="card-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                            fill="none" xmlns:v="https://vecta.io/nano">
                                            <g clip-path="url(#A)" fill="#ff9d2d">
                                                <path
                                                    d="M43.033.002L42.563 0c-7.896 0-15.555 1.546-22.767 4.597-6.965 2.946-13.22 7.163-18.592 12.535l-.043.044c-1.548 1.551-1.546 4.075.004 5.625l2.256 2.257c.754.754 1.76 1.17 2.832 1.17h.001a3.98 3.98 0 0 0 2.834-1.171l.04-.04a1.7 1.7 0 0 1 1.21-.499h.021a1.73 1.73 0 0 1 1.238.537l4.596 4.807c.466.488 1.095.761 1.768.768h.028c.663 0 1.285-.258 1.756-.729.975-.975.993-2.58.04-3.577l-3.308-3.46c-.295-.309-.311-.797-.035-1.087a.76.76 0 0 1 .554-.239h.001a.76.76 0 0 1 .553.236l1.041 1.09c.95.994 2.49 1.079 3.507.195a2.5 2.5 0 0 0 .865-1.787 2.53 2.53 0 0 0-.696-1.858l-.755-.79a1.72 1.72 0 0 1-.454-1.511c.099-.549.444-1.003.944-1.245a46.86 46.86 0 0 1 20.561-4.69l.419.002c1.07.011 2.07-.399 2.827-1.149a3.96 3.96 0 0 0 1.179-2.828V3.984A4 4 0 0 0 43.033.002h0zm2.2 7.199a2.21 2.21 0 0 1-.659 1.581 2.18 2.18 0 0 1-1.575.641l-.435-.002a48.6 48.6 0 0 0-21.325 4.865A3.44 3.44 0 0 0 19.33 16.8a3.46 3.46 0 0 0 .912 3.037l.756.79a.76.76 0 0 1-.052 1.106c-.303.263-.789.226-1.085-.083l-1.041-1.089a2.53 2.53 0 0 0-1.822-.779 2.5 2.5 0 0 0-1.827.784c-.929.976-.912 2.518.037 3.512l3.308 3.46a.82.82 0 0 1-.012 1.121.74.74 0 0 1-.523.215c-.197-.002-.381-.083-.519-.226l-4.596-4.808a3.47 3.47 0 0 0-2.487-1.08h-.042a3.44 3.44 0 0 0-2.449 1.011l-.014.014-.009.009-.022.022c-.423.423-.988.656-1.591.656s-1.168-.232-1.591-.655L2.404 21.56a2.23 2.23 0 0 1 0-3.145l.042-.042A56.54 56.54 0 0 1 20.48 6.214c6.994-2.958 14.423-4.458 22.083-4.458l.454.002h0a2.24 2.24 0 0 1 2.215 2.226v3.218zm-.908 6.202a.88.88 0 0 0-.878.878v43.292c0 .412-.314.574-.411.614s-.433.147-.724-.144L11.436 27.166a.88.88 0 0 0-1.242 0 .88.88 0 0 0 0 1.242l30.877 30.877c.469.469 1.073.715 1.696.715.314 0 .633-.063.942-.19a2.38 2.38 0 0 0 1.494-2.237V14.281a.88.88 0 0 0-.878-.878h0zm-6.657-1.125c-2.112 0-3.83 1.718-3.83 3.83s1.718 3.83 3.83 3.83 3.83-1.718 3.83-3.83-1.718-3.83-3.83-3.83zm0 5.903c-1.143 0-2.074-.93-2.074-2.074s.93-2.073 2.074-2.073 2.073.93 2.073 2.073-.93 2.074-2.073 2.074zM22.575 34.938a3.55 3.55 0 0 0 3.547 3.547 3.55 3.55 0 0 0 3.547-3.547 3.55 3.55 0 0 0-3.547-3.547 3.55 3.55 0 0 0-3.547 3.547h0zm3.547-1.791c.987 0 1.791.803 1.791 1.791s-.803 1.791-1.791 1.791-1.791-.803-1.791-1.791.804-1.791 1.791-1.791zm12.81-2.283a3.68 3.68 0 0 0-3.672 3.672 3.68 3.68 0 0 0 3.672 3.672 3.68 3.68 0 0 0 3.672-3.672 3.68 3.68 0 0 0-3.672-3.672zm0 5.588a1.92 1.92 0 0 1-1.916-1.915 1.92 1.92 0 0 1 1.916-1.916 1.92 1.92 0 0 1 1.915 1.916 1.92 1.92 0 0 1-1.915 1.915zm2.97 8.702a3.92 3.92 0 0 0-3.913-3.912h-.645a3.92 3.92 0 0 0-3.913 3.912 1.7 1.7 0 0 0 1.697 1.697h.23l-.037.687a1.57 1.57 0 0 0 .427 1.16c.294.31.709.488 1.136.488h1.562a1.57 1.57 0 0 0 1.136-.488c.294-.31.45-.733.428-1.16l-.037-.687h.23a1.7 1.7 0 0 0 1.697-1.697h0zm-2.515-.059a1.2 1.2 0 0 0-.87.374c-.225.238-.345.562-.327.889l.057 1.073h-1.16l.057-1.073a1.2 1.2 0 0 0-1.198-1.263h-.758a2.16 2.16 0 0 1 2.156-2.097h.645a2.16 2.16 0 0 1 2.155 2.097h-.758zm-9.689-26.32a4.46 4.46 0 0 0-4.454 4.455v.76a4.46 4.46 0 0 0 4.454 4.455c1.017 0 1.844-.827 1.844-1.843v-.437l.975.052a1.69 1.69 0 0 0 1.251-.46c.335-.318.526-.764.526-1.225v-1.841c0-.461-.192-.908-.526-1.225s-.792-.485-1.251-.46l-.975.052v-.437c0-1.017-.827-1.844-1.844-1.844zm2.84 3.986v1.697l-1.43-.076c-.344-.017-.682.107-.931.343s-.392.569-.392.912v.963c0 .049-.039.087-.087.087A2.7 2.7 0 0 1 27 23.99v-.761a2.7 2.7 0 0 1 2.698-2.698c.048 0 .087.039.087.087v.964c0 .343.143.676.392.912a1.26 1.26 0 0 0 .931.343l1.43-.076z" />
                                            </g>
                                            <defs>
                                                <clipPath id="A">
                                                    <path fill="#fff" d="M0 0h60v60H0z" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                    <h3 class="h3 card-title">{{ $meal_category->title }}</h3>

                                    <p class="card-text">
                                        {{ $meal_category->description }}
                                    </p>

                                    <img src="/storage/{{ $meal_category->image }}" width="300" height="300"
                                        loading="lazy" alt="{{ $meal_category->title }}" class="w-100 card-banner"
                                        style="border-radius: 50%;">

                                </div>
                            </li>
                        @endforeach --}}

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                    <svg fill="#ff9d2d" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60"
                                        viewBox="0 0 192.922 192.922" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M190.855,124.768c-13.729-7.213-27.341-9.727-42.457-6.298c-8.749-35.575-17.59-69.916-48.909-92.693 C77.731,9.953,40.535-6.53,16.755,15.159c-26.876,24.513-18.036,63.74,2.782,89.458c27.243,33.655,62.833,35.272,102.58,39.979 c-6.237,13.719-5.654,28.92,3.554,41.504c1.535,2.098,3.593,2.581,5.955,1.561c15.738-6.792,23.186-21.15,23.34-37.42 c15.144,0.155,30.151-5.426,37.423-19.627C193.412,128.616,193,125.895,190.855,124.768z M24.302,18.579 c14.567-10.894,33.568-7.157,50.25,0.98c-0.286,0.512-0.499,1.098-0.536,1.832c-1.526,30.52-27.325,54.498-57.392,56.781 c-1.298,0.099-2.046,0.949-2.29,1.916C4.228,58.877,3.24,34.331,24.302,18.579z M150.459,141.281 c-2.263-0.198-4.545,2.147-4.383,4.383c1.007,13.944-3.366,25.76-15.147,32.584c-6.424-10.966-6.351-23.428-3.498-35.903 c0.279-1.223-0.625-2.174-1.626-2.351c-0.332-0.432-0.749-0.805-1.331-0.989c-30.718-9.79-61.408-6.777-87.434-29.052 c-8.157-6.981-15.781-16.493-21.264-26.98c0.258,0.089,0.524,0.17,0.848,0.175c32.539,0.528,67.025-25.189,65.096-59.76 c7.13,4.14,13.592,8.866,18.771,13.249c25.9,21.917,32.562,53.989,40.25,85.271c0.572,2.326,2.497,3.151,4.328,2.896 c0.847,1.478,2.469,2.499,4.598,1.981c11.843-2.876,22.263-1.434,32.87,3.402C175.15,139.979,162.594,142.346,150.459,141.281z">
                                                </path>
                                                <path
                                                    d="M50.178,29.573c0.196-1.502-0.22-3.077-1.39-4.13c-1.058-1.175-2.195-2.239-3.351-3.319c-0.905-0.846-2.044-1.31-3.2-1.399 c-0.017-0.015-0.034-0.028-0.051-0.043c-3.658-3.095-8.334,1.582-5.239,5.239c0.014,0.017,0.028,0.034,0.043,0.051 c0.089,1.156,0.553,2.295,1.399,3.2c1.08,1.155,2.144,2.293,3.319,3.349c1.053,1.171,2.628,1.586,4.13,1.39 c1.065-0.107,2.102-0.542,2.951-1.39C49.637,31.673,50.071,30.638,50.178,29.573z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <h3 class="h3 card-title">Pescatarian</h3>

                                <p class="card-text">
                                    Your seafood-powered choice packed with lean proteins and heart-healthy Omega-3s
                                </p>

                                <img src="./frontend/assets/images/featured-1.jpg" width="300" height="300"
                                    loading="lazy" alt="Maxican Pizza" class="w-100 card-banner"
                                    style="border-radius: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                    <svg fill="#ff9d2d" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="60" height="60" viewBox="0 0 192.033 192.033"
                                        xml:space="preserve" stroke="#ff9d2d">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M191.113,105.986c1.692-8.273,1.126-16.985-2.34-25.276c-10.091-24.138-39.793-28.733-61.787-20.54 c-1.016,0.378-1.769,0.981-2.315,1.694c-17.68-10.29-25.467-30.676-42.222-42.138c-18.314-12.529-40.691-9.76-59.028,1.571 c-8.107,5.01-13.427,11.406-16.567,18.592c-0.305,0.214-0.563,0.508-0.69,0.925c-7.937,26.091-9.113,56.953,1.856,82.479 c11.96,27.832,36.085,43.608,64.361,52.105c51.047,15.339,126.41-2.481,118.868-68.976 C191.23,106.258,191.147,106.14,191.113,105.986z M55.633,20.416c31.655-2.202,40.623,39.367,67.98,47.297 c0.225,0.065,0.429,0.046,0.64,0.057c0.943,1.798,2.85,2.945,5.387,2.026c25.549-9.251,57.242,3.893,50.938,35.228 c-4.963,24.669-33.031,34.035-54.771,35.683c-35.817,2.713-77.595-10.198-98.753-40.367C4.531,68.226,9.677,23.613,55.633,20.416z M70.252,165.718c-25.413-7.385-46.366-23.832-56.043-48.758c-4.132-10.643-5.702-21.833-6.072-33.173 c5.379,14.777,14.488,28.634,23.893,38.04c31.166,31.17,95.743,39.658,133.753,18.344c6.259-3.51,11.677-8.311,15.955-13.9 C170.217,171.363,112.499,177.996,70.252,165.718z">
                                                </path>
                                                <path
                                                    d="M84.964,69.353c-1.868-9.725-8.698-17.135-16.786-22.379c-4.467-2.896-11.089-5.737-17.103-5.659 c0.03-1.174-0.814-2.337-2.187-1.786c-12.891,5.173-20.632,16.387-15.376,30.192c4.43,11.636,16.542,21.375,28.851,23.203 C75.947,94.943,87.624,83.207,84.964,69.353z M60.539,84.551c-8.493-2.314-15.653-9.136-19.567-16.831 c-3.835-7.538-1.119-14.599,3.927-20.086c0.174,0.049,0.341,0.111,0.532,0.126c13.34,1.002,30.307,8.983,31.947,24.236 C78.487,82.323,69.142,86.894,60.539,84.551z">
                                                </path>
                                                <path
                                                    d="M63.447,62.258c-2.584-2.846-7.726-4.963-11.359-5.869c-2.375-0.592-4.762,2.535-2.908,4.393 c-0.395,3.872-0.954,7.773,0.656,11.443c2.144,4.886,8.817,5.414,13.355,5.5c1.17,0.022,2.576-0.883,2.773-2.111 C66.727,70.838,66.883,66.043,63.447,62.258z M54.458,69.321c-0.72-1.83-0.885-3.903-0.951-5.968 c1.575,0.708,3.182,1.36,4.672,2.256c2.286,1.375,2.627,3.899,2.468,6.357C58.174,71.898,55.309,71.486,54.458,69.321z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <h3 class="h3 card-title">High Protein</h3>

                                <p class="card-text">
                                    Your muscle-building ally packed with protein to fuel your day with strength and
                                    energy
                                </p>

                                <img src="./frontend/assets/images/featured-2.jpg" width="300" height="300"
                                    loading="lazy" alt="Soft Drinks" class="w-100 card-banner"
                                    style="border-radius: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                    <svg fill="#ff9d2d" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="60" height="60" viewBox="0 0 195.516 195.516"
                                        xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M164.115,115.332c-14.185-25.196-44.102-73.999-78.783-71.788c5.048-10.472,7.108-24.964-3.741-32.167 c-11.873-7.884-19.49,3.57-22.549,14.094C47.2,15.232,30.403-5.668,14.465,1.448c-8.64,3.858-7.493,18.088-3.986,24.67 c5.203,9.764,17.595,13.488,28.167,16.757c-6.477,1.916-13.548,5.504-10.782,12.586c3.741,9.58,18.286,7.396,27.345,4.814 c-3.452,5.82-4.998,13.182-4.278,21.536c1.643,19.074,14.653,33.719,27.463,46.666c17.108,17.292,35.624,33.407,55.228,47.805 c10.302,7.566,29.999,23.334,44.203,18.241C203.773,185.218,170.961,127.493,164.115,115.332z M40.868,55.166 c-4.689,0.567-6.245-1.664-4.67-6.693c3.211-1.629,6.579-2.777,10.105-3.443c1.916-0.479,1.782-3.189,0-3.734 c-9.762-2.989-20.138-7.505-27.985-14.146c-5.342-4.521-7.523-16-0.995-20.812c3.387-2.496,9.576,1.056,12.498,2.593 c11.349,5.971,19.354,16.026,29.481,23.532c1.328,0.984,3.616-0.008,3.914-1.593c1.379-7.316,6.874-23.475,16.838-14.493 c8.529,7.688,0.991,21.538-4.013,28.642c-0.508,0.721-0.697,1.44-0.651,2.106c-5.994,0.961-11.015,3.318-14.933,6.788 c-0.595-0.491-1.402-0.747-2.419-0.478C52.273,54.958,46.796,55.682,40.868,55.166z M178.275,185.754 c-4.754,9.725-25.992-3.444-45.678-18.689c0.325-0.316,0.564-0.746,0.603-1.322c0.542-8.216,5.11-16.083,11.952-20.697 c2.015-1.359,0.289-4.088-1.858-3.18c-8.98,3.799-13.678,13.192-13.983,22.625c-12.53-9.927-23.998-20.232-29.58-25.359 c1.46-8.127,5.896-14.816,12.209-20.531c1.589-1.439-0.69-3.53-2.292-2.292c-6.833,5.28-11.101,12.254-12.623,20.318 c-0.06-0.056-0.146-0.136-0.199-0.186c-2.914-2.725-5.85-5.49-8.757-8.301c3.059-13.775,9.463-26.371,18.299-37.399 c1.29-1.61-0.968-3.918-2.292-2.292c-9.066,11.137-15.432,23.907-17.723,38.029c-3.217-3.155-6.378-6.383-9.387-9.729 c0.268-6.495,0.99-12.756,3.962-18.726c1.149-2.309-2.419-4.296-3.416-1.997c-2.482,5.723-3.26,11.474-3.402,17.459 c-2.427-2.864-4.734-5.813-6.858-8.882c-5.872-8.482-8.913-18.723-9.055-28.968c-0.213-15.329,12.19-22.019,25.308-24.835 c0.624-0.134,1.04-0.474,1.281-0.903c27.498-1.148,52.079,36.085,64.83,55.468c9.259,14.076,17.169,29.159,23.359,44.828 C176.782,159.832,183.276,175.522,178.275,185.754z">
                                                </path>
                                                <path
                                                    d="M137.334,117.057c-11.418,8.091-21.286,19.443-22.838,33.827c-0.228,2.115,3.193,2.517,3.669,0.497 c3.032-12.863,10.932-22.555,21.803-29.817C142.769,119.693,140.07,115.118,137.334,117.057z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <h3 class="h3 card-title">Vegan</h3>

                                <p class="card-text">
                                    Your plant-powered partner that fuels your body the wholesome and natural way
                                </p>

                                <img src="./frontend/assets/images/featured-3.jpg" width="300" height="300"
                                    loading="lazy" alt="French Fry" class="w-100 card-banner"
                                    style="border-radius: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                    <svg fill="#ff9d2d" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="60" height="60" viewBox="0 0 196.401 196.401"
                                        xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M195.651,163.093c-0.048-2.288-1.288-3.771-2.889-4.497c-0.365-0.665-0.876-1.195-1.491-1.572 c1.312-1.906,1.028-4.952-1.879-5.717c-31.824-8.357-61.587-28.731-87.559-48.246c-27.379-20.57-50.02-44.279-63.888-75.781 c-0.433-0.983-2.148-0.741-2.325,0.304c-5.09,30.027,34.415,60.415,54.341,76.472c27.118,21.854,59.56,43.894,93.698,53.404 c-0.049,0.046-0.101,0.086-0.147,0.134c-1.791,1.573-1.854,4.383-1.854,6.771v1.846c-61.554-7.954-102.713-50.074-142.014-93.983 c-0.825-0.922-2.234,0.256-1.665,1.285c28.079,50.725,86.331,90.986,143.679,98.563v1.256c0,0.608,0.113,1.139,0.28,1.625 c-40.543,11.657-83.277-12.745-114.026-37.811C51.61,123.856,36.817,107.773,27.528,88.77c-8.513-17.416-4.575-29.649,2.268-46.2 c0.332-0.802-0.662-1.764-1.453-1.453c-2.083,0.817-3.904,1.883-5.504,3.139c-0.052-0.048-0.067-0.107-0.125-0.153 c-5.384-4.302-9.569-9.83-13.361-15.554c5.245-4.861,10.957-9.855,17.423-12.875c1.729,5.527,2.559,11.268,4.019,16.881 c0.486,1.866,3.524,2.016,3.914,0c1.45-7.482-1.299-14.653-3.062-21.845c-0.416-1.696-2.205-2.532-3.816-2.166 C17.483,10.89,8.516,17.551,1.211,25.052c-1.185,1.217-1.693,3.436-0.634,4.915c5.106,7.132,10.559,14.013,17.939,18.892 c-6.5,9.235-6.348,23.269-3.686,33.697c5.738,22.479,24.136,41.833,40.859,56.827c19.852,17.8,43.238,31.916,68.231,41.152 c19.118,7.064,46.091,12.316,64.284,0.057c0.239-0.161,0.394-0.375,0.577-0.571c1.769,0.583,3.823,0.204,5.206-1.127 c1.352-0.584,2.192-1.955,2.328-3.515C196.688,171.12,195.739,167.257,195.651,163.093z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <h3 class="h3 card-title">KETO</h3>

                                <p class="card-text">
                                    Fat-burning diet program with low carbs and high energy for your fat-burning
                                    journey
                                </p>

                                <img src="./frontend/assets/images/featured-4.jpg" width="300" height="300"
                                    loading="lazy" alt="Burger Kingo" class="w-100 card-banner"
                                    style="border-radius: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                    <svg fill="#ff9d2d" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="60" height="60" viewBox="0 0 190.301 190.301"
                                        xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M168.268,39.733c-12.26-21.188-39.373-27.574-61.361-19.81c-0.076-5.887-0.703-11.771-1.818-17.65 c-0.239-1.257-1.533-2.006-2.711-2.063c-7.301-0.359-14.745-0.499-21.809,1.633c-2.308,0.696-3.269,3.223-2.165,5.321 c2.652,5.037,5.968,10.203,9.931,14.676c-21.164,0.479-53.421-7.392-66.118,12.834c-15.23,24.261-9.55,53.147-3.177,79.135 c5.895,24.037,14.974,55.54,35.365,71.561c16.066,12.622,34.955-1.07,41.019-17.568c9.042,16.265,24.499,28.1,42.249,14.606 c19.043-14.478,27.287-43.473,33.539-65.342C178.611,91.181,182.356,64.082,168.268,39.733z M87.005,7.695 c4.331-0.936,8.715-1.424,13.157-1.714c1.45,6.755,1.498,14.187,0.553,21.219c-2.144-2.57-4.162-6.003-5.842-8.16 C92.054,15.424,89.37,11.645,87.005,7.695z M162.176,110.398c-4.693,18.111-11.139,36.091-20.854,52.137 c-13.604,22.469-29.07,15.6-44.271-1.319c-0.383-0.426-0.809-0.612-1.231-0.683c-1.278-1.505-3.62-2.035-5.3-0.286 c-6.577,6.848-10.252,17.104-19.948,20.28c-9.035,2.96-17.465-9.589-21.462-15.565c-11.972-17.902-18.46-39.94-23.474-60.678 c-5.084-21.024-9.212-48.428,5.458-66.737c7.03-8.774,20.946-7.238,30.861-7.019c10.545,0.233,20.796-1.15,30.867-4.206 c1.83,1.584,3.765,3.013,5.828,4.187c-5.604-0.048-14.88,0.925-16.355,6.826c-0.179,0.715,0.112,1.432,0.74,1.818 c3.869,2.379,9.469,0.147,13.831,0.03c3.114-0.084,6.215,0.391,9.206,1.22c3.541,0.981,5.946,3.846,9.42,4.833 c2.362,0.671,3.945-1.5,3.624-3.624c-0.859-5.694-6.977-8.801-12.843-10.192c0.228-1.595,0.313-3.19,0.431-4.785 c22.938-1.652,42.413-0.82,54.99,21.738C172.27,67.339,167.289,90.672,162.176,110.398z">
                                                </path>
                                                <path
                                                    d="M67.691,146.567c-3.6-4.497-8.13-7.642-11.266-12.645c-3.718-5.931-5.571-12.759-5.232-19.725 c0.114-2.353-3.597-2.857-4.105-0.556c-3.008,13.635,1.465,34.576,17.336,38.535C67.915,153.049,69.715,149.095,67.691,146.567z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <h3 class="h3 card-title">Medical Nutrition</h3>

                                <p class="card-text">
                                    Customized per health nutrition for better strength, healing, health and recovery
                                </p>

                                <img src="./frontend/assets/images/featured-5.jpg" width="300" height="300"
                                    loading="lazy" alt="Chicken Masala" class="w-100 card-banner"
                                    style="border-radius: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            {{-- About Section --}}
            <section class="section section-divider gray about" id="about">
                <div class="container">

                    <div class="about-banner">
                        <img src="./frontend/assets/images/about-banner.png" width="509" height="459"
                            loading="lazy" alt="Burger with Drinks" class="w-100 about-img">

                        {{-- <img src="./frontend/assets/images/sale-shape-red.png" width="216" height="226"
                            alt="get up to 50% off now" class="abs-img scale-up-anim"> --}}
                    </div>

                    <div class="about-content">

                        <h2 class="h2 section-title">
                            Best Packed Meals and Snacks
                            <span class="span">in Town!</span>
                        </h2>

                        <p class="section-text">
                            Meal planning is one of the most effective ways to stay consistent, avoid overeating,
                            and reach your health goals, without the stress of daily meal decisions.
                        </p>

                        <ul class="about-list">

                            <li class="about-item">
                                <ion-icon name="checkmark-outline"></ion-icon>

                                <span class="span">Eat Healthier</span>
                            </li>

                            <li class="about-item">
                                <ion-icon name="checkmark-outline"></ion-icon>

                                <span class="span">Lose Weight</span>
                            </li>

                            <li class="about-item">
                                <ion-icon name="checkmark-outline"></ion-icon>

                                <span class="span">Improve Energy</span>
                            </li>

                            <li class="about-item">
                                <ion-icon name="checkmark-outline"></ion-icon>

                                <span class="span">Reduce Cravings</span>
                            </li>

                            <li class="about-item">
                                <ion-icon name="checkmark-outline"></ion-icon>

                                <span class="span">Feel Better Overall</span>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>

            {{-- Food Menu Section --}}
            <section class="section food-menu" id="food-menu">
                <div class="container">

                    <p class="section-subtitle">Our Shop</p>

                    <h2 class="h2 section-title">
                        Our Weekly <span class="span">Meal Plan</span>
                    </h2>

                    <p class="section-text">
                        Browse and explore through our different variety of mealed plans from Monday to Friday.
                    </p>

                    <ul class="fiter-list">
                        <li><button class="filter-btn active" data-day="All">All</button></li>
                        <li><button class="filter-btn" data-day="Monday">Monday</button></li>
                        <li><button class="filter-btn" data-day="Tuesday">Tuesday</button></li>
                        <li><button class="filter-btn" data-day="Wednesday">Wednesday</button></li>
                        <li><button class="filter-btn" data-day="Thursday">Thursday</button></li>
                        <li><button class="filter-btn" data-day="Friday">Friday</button></li>
                    </ul>


                    <ul class="food-menu-list">
                        @foreach ($weekly_meals as $weekly_meal)
                            <li class="food-item" data-day="{{ $weekly_meal->day }}">
                                <div class="food-menu-card">

                                    <div class="card-banner">
                                        <img src="/storage/{{ $weekly_meal->product->image }}" width="300"
                                            height="300" loading="lazy" alt="{{ $weekly_meal->product->name }}"
                                            style="border-radius: 50%; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25); transform: translateY(2px);"
                                            class="w-100">

                                        <div class="badge">{{ $weekly_meal->category }}</div>
                                    </div>

                                    <div class="wrapper">
                                        <p class="category">{{ $weekly_meal->product->meal_category }}</p>
                                        <div class="rating-wrapper">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </div>

                                    <h3 class="h3 card-title">{{ $weekly_meal->product->name ?? 'No product' }}</h3>

                                    <div class="price-wrapper">
                                        <p class="price-text">Price:</p>
                                        <data class="price">₱{{ $weekly_meal->product->price }}</data>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </section>

            {{-- Call to Action Section --}}
            <section class="section section-divider white cta"
                style="background-image: url('./frontend/assets/images/hero-bg.jpg')">
                <div class="container">

                    <div class="cta-content">

                        <h2 class="h2 section-title">
                            Packed with Wellness,
                            <span class="span">Powered with Nature!</span>
                        </h2>

                        <p class="section-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod et soluta sint laudantium
                            explicabo, at quos? Accusamus fuga velit dolor quidem molestiae adipisci numquam mollitia,
                            dicta suscipit ab cumque facilis!
                        </p>

                    </div>

                    <figure class="cta-banner">
                        <img src="./frontend/assets/images/cta-banner.png" width="700" height="637"
                            loading="lazy" alt="Burger" class="w-100 cta-img">

                        {{-- <img src="./frontend/assets/images/sale-shape.png" width="216" height="226"
                            loading="lazy" alt="get up to 50% off now" class="abs-img scale-up-anim"> --}}
                    </figure>

                </div>
            </section>



            {{-- Testimonials Section --}}
            <section class="section section-divider white testi" id="testimonials">
                <div class="container">

                    <p class="section-subtitle">Testimonials</p>

                    <h2 class="h2 section-title">
                        Our Customers <span class="span">Reviews</span>
                    </h2>

                    <p class="section-text">
                        Food is any substance consumed to provide nutritional
                        support for an organism.
                    </p>

                    <ul class="testi-list has-scrollbar">

                        <li class="testi-item">
                            <div class="testi-card">

                                <div class="profile-wrapper">

                                    <figure class="avatar">
                                        <img src="./frontend/assets/images/avatar-1.jpg" width="80"
                                            height="80" loading="lazy" alt="Robert William">
                                    </figure>

                                    <div>
                                        <h3 class="h4 testi-name">Robert William</h3>

                                        <p class="testi-title">CEO Kingfisher</p>
                                    </div>

                                </div>

                                <blockquote class="testi-text">
                                    "I would like to personally thank you for your
                                    outstanding
                                    product."
                                </blockquote>

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                            </div>
                        </li>

                        <li class="testi-item">
                            <div class="testi-card">

                                <div class="profile-wrapper">

                                    <figure class="avatar">
                                        <img src="./frontend/assets/images/avatar-1.jpg" width="80"
                                            height="80" loading="lazy" alt="Robert William">
                                    </figure>

                                    <div>
                                        <h3 class="h4 testi-name">Robert William</h3>

                                        <p class="testi-title">CEO Kingfisher</p>
                                    </div>

                                </div>

                                <blockquote class="testi-text">
                                    "I would like to personally thank you for your
                                    outstanding
                                    product."
                                </blockquote>

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                            </div>
                        </li>

                        <li class="testi-item">
                            <div class="testi-card">

                                <div class="profile-wrapper">

                                    <figure class="avatar">
                                        <img src="./frontend/assets/images/avatar-1.jpg" width="80"
                                            height="80" loading="lazy" alt="Robert William">
                                    </figure>

                                    <div>
                                        <h3 class="h4 testi-name">Robert William</h3>

                                        <p class="testi-title">CEO Kingfisher</p>
                                    </div>

                                </div>

                                <blockquote class="testi-text">
                                    "I would like to personally thank you for your
                                    outstanding
                                    product."
                                </blockquote>

                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                            </div>
                        </li>




                    </ul>

                </div>
            </section>

            {{-- Delivery Section --}}
            <section class="section section-divider gray delivery">
                <div class="container">

                    <div class="delivery-content">

                        <h2 class="h2 section-title">
                            A Moments Of Delivered On <span class="span">Right Time</span> & Place
                        </h2>

                        <p class="section-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum fugit, itaque, rem
                            reiciendis mollitia repudiandae iste autem error maxime facere rerum hic asperiores corrupti
                            optio inventore perspiciatis eligendi, eaque dolorem.
                        </p>

                    </div>

                    <figure class="delivery-banner">
                        <img src="./frontend/assets/images/delivery-banner-bg.png" width="700" height="602"
                            loading="lazy" alt="clouds" class="w-100">

                        <img src="./frontend/assets/images/delivery-boy.svg" width="1000" height="880"
                            loading="lazy" alt="delivery boy" class="w-100 delivery-img" data-delivery-boy>
                    </figure>

                </div>
            </section>

            {{-- Blogs Section --}}
            <section class="section section-divider white blog" id="blog">
                <div class="container">

                    <p class="section-subtitle">Latest Blog Posts</p>

                    <h2 class="h2 section-title">
                        This Is All About <span class="span">Foods</span>
                    </h2>

                    <p class="section-text">
                        Food is any substance consumed to provide nutritional support for an organism.
                    </p>

                    <ul class="blog-list">

                        <li>
                            <div class="blog-card">

                                <div class="card-banner">
                                    <img src="./frontend/assets/images/blog-1.jpg" width="600" height="390"
                                        loading="lazy" alt="What Do You Think About Cheese Pizza Recipes?"
                                        class="w-100">

                                    <div class="badge">KETO</div>
                                </div>

                                <div class="card-content">

                                    <div class="card-meta-wrapper">

                                        <a href="#" class="card-meta-link">
                                            <ion-icon name="calendar-outline"></ion-icon>

                                            <time class="meta-info" datetime="2022-01-01">May 23 2025</time>
                                        </a>

                                    </div>

                                    <h3 class="h3 card-title">
                                        Balanced and delicious - Meal prep made easy
                                    </h3>

                                    <p class="card-text">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam dolor unde,
                                        rerum nesciunt in animi error ab doloremque, dolore iste facilis! Libero
                                        explicabo repellendus exercitationem optio nam architecto illum nostrum!
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <div class="card-banner">
                                    <img src="./frontend/assets/images/blog-2.jpg" width="600" height="390"
                                        loading="lazy" alt="Making Chicken Strips With New Delicious Ingridents."
                                        class="w-100">

                                    <div class="badge">OMAD</div>
                                </div>

                                <div class="card-content">

                                    <div class="card-meta-wrapper">

                                        <a href="#" class="card-meta-link">
                                            <ion-icon name="calendar-outline"></ion-icon>

                                            <time class="meta-info" datetime="2022-01-01">Jun 03 2025</time>
                                        </a>

                                    </div>

                                    <h3 class="h3 card-title">
                                        Fuel your day with power bowls of goodness
                                    </h3>

                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sequi odio facilis
                                        ea quis debitis vitae dicta nisi ipsam dignissimos! Totam rerum assumenda cum
                                        hic numquam enim odio delectus facere.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <div class="card-banner">
                                    <img src="./frontend/assets/images/blog-3.jpg" width="600" height="390"
                                        loading="lazy" alt="Innovative Hot Chessyraw Pasta Make Creator Fact."
                                        class="w-100">

                                    <div class="badge">SALAD</div>
                                </div>

                                <div class="card-content">

                                    <div class="card-meta-wrapper">

                                        <a href="#" class="card-meta-link">
                                            <ion-icon name="calendar-outline"></ion-icon>

                                            <time class="meta-info" datetime="2022-01-01">Jul 30 2025</time>
                                        </a>

                                    </div>

                                    <h3 class="h3 card-title">
                                        Savor the flavor - Beef and veggie for a wholesome boost
                                    </h3>

                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptatem
                                        consequuntur sed pariatur corrupti dignissimos. Distinctio modi delectus dolorum
                                        ipsam possimus excepturi mollitia, suscipit maiores odio aliquam ducimus rem
                                        corporis.
                                    </p>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

        </article>
    </main>

    {{-- Footer --}}
    <footer class="footer">

        <div class="footer-top" style="background-image: url('./frontend/assets/images/footer-illustration.png')">
            <div class="container">

                <div class="footer-brand" style="width: 400px;">

                    <a href="" class="logo">Packed Wellness Davao<span class="span">.</span></a>

                    <p class="footer-text">
                        Financial experts support or help you to to <br>
                        find out which way you can raise your funds more.
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="https://www.facebook.com/packedwellnessdavao" class="social-link"
                                target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/packedwellnessdavao/?fbclid=IwY2xjawLbMIZleHRuA2FlbQIxMABicmlkETFKTWp6S3dQeFNNR25jSDVrAR4wIgD-9GFjUOclYiTMSDUMVU1xGQq6Naj4lBo8Lf9DCwKLRjcUgBF_tphsPw_aem_1TB3lFs9Dtq1-aHm2ziuCA#"
                                class="social-link" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Contact Info</p>
                    </li>

                    <li>
                        <p class="footer-list-item">
                            0915-381-3434</p>
                    </li>

                    <li>
                        <p class="footer-list-item">packedwellnessdvo@gmail.com</p>
                    </li>

                    <li>
                        <address class="footer-list-item">Brgy. Matina, Davao City</address>
                    </li>

                    <li>
                        <p class="footer-list-item">facebook.com/packedwellnessdavao</p>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Opening Hours</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Monday to Friday</p>
                    </li>

                    <li>
                        <p class="footer-list-item">08:00 AM to 8:00 PM</p>
                    </li>





                </ul>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-text">
                    &copy; 2025. Packed Wellness Davao. All Rights Reserved.
                </p>
            </div>
        </div>

    </footer>

    {{-- Back To Top button --}}
    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    {{-- Custom JS Link --}}
    <script src="./frontend/assets/js/script.js" defer></script>

    {{-- IonIcon Link --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const foodItems = document.querySelectorAll('.food-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const selectedDay = this.getAttribute('data-day');

                    // Remove "active" from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add "active" to clicked button
                    this.classList.add('active');

                    // Show/hide items
                    foodItems.forEach(item => {
                        const itemDay = item.getAttribute('data-day');

                        if (selectedDay === 'All' || selectedDay === itemDay) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
