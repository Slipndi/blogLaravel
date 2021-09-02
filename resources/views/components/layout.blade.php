<!DOCTYPE html>

<title>Cré@ries</title>
<link rel="stylesheet" href="https://www.unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class='md:flex md:justify-between md:items-center'>
            <div>
                <a href='/' class=''>
                    <h1 class='font-extrabold md:text-3xl ld:text-5xl uppercase' style="font-family: 'Bungee Shade', cursive;"><span class='text-indigo-600'>C</span>ré<span class='text-indigo-300'>a</span>rie<span class='text-indigo-600'>s</span></h1>
                </a>
            </div>
            <div class='mt-8 md:mt-0 flex items-center'>
                @auth
                    <span class='text-xs font-bold uppercase'>Bienvenue, {{ auth()->user()->name }}</span>
                    <form action="/logout" method="post">
                        @csrf
                        <button type='submit' class="text-xs text-indigo-500 hover:text-indigo-600 font-semibold ml-4 rounded-full uppercase">Déconnexion</button>
                    </form>

                @else
                    <a href="/inscription" class="text-xs font-bold uppercase mr-6">Inscription</a>
                    <a href="/connexion" class="text-xs font-bold uppercase">Connexion</a>
                @endauth
                <a href="#" class="text-xs bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-4 ml-4 rounded-full uppercase">Tenez-vous à jour</a>
            </div>
        </nav>
        {{ $slot }}
        <footer class='text-center border border-black border-opacity-5 rounded-xl bg-gray-100 py-16 mt-16 px-10'>
            <img src="/assets/images/lary-newsletter-icon.png" alt='newsletter' class='mx-auto' style='width:145px;' />
            <h5 class="text-3xl">
                j'ai toujours l'impression d'être suivi, pas vous ?
            </h5>
            <p class='text-sm mt-3'>
                Garantie sans bug && harcèlement
            </p>
            </div>
            <div class="mt-10">
                <div class='relative inline-block mx-auto lg:bg-gray-200 rounded-full'>
                    <form action="" method="POST" action='#' class='lg:flex items-center'>
                        <div class='lg:py-3 lg:px-5 flex items-center'>
                            <label for="email" class='hidden lg:inline-block'>
                                    <img src="/assets/images/mailbox-icon.svg" action='/' alt="newsletter" />
                                </label>
                            <input id='email' name='email' type="text" placeholder="jesuismagnifique@monmail.com" class='lg:bg-transparent pl-4 focus-within:outline-none' size='30'>
                        </div>
                        <button type='submit' class='bg-indigo-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 hover:bg-indigo-600'>
                            Inscription
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <x-flash_message />
</body>
