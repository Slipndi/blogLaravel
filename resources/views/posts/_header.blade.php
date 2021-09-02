<header class='max-w-2xl mx-auto mt-10 text-center'>
    <h1 class='text-5xl'>
        Bienvenue sur
        <span class='font-extrabold uppercase' style="font-family: 'Bungee Shade', cursive;"><span class='text-indigo-600'>C</span>ré<span class='text-indigo-300'>a</span>rie<span class='text-indigo-600'>s</span></span>
    </h1>
    <p class='text-xs mt-4'>
        Quand à 37 balais, tu te décide à reprendre ta vie en main, tu créé un blog pour raconter le parcours d'un simple développeur junior qui se forme en cours du soir.
    </p>
    <div class='space-y-2 lg:space-y-0 lg:space-x-4 mt-3'>

        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category_dropdown />
        </div>
        <!-- autres filtres
        <div class='relative flex lg:inline-flex items-center bg-gray-100 rounded-xl'>
            <select name="categorie" id="categorie" class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-bold">
                <option value="autresFiltres" disabled selected >Autres filtres</option>
                <option value="filtre1">filtre1</option>
                <option value="filtre2">filtre2</option>
                <option value="filtre3">filtre3</option>
            </select>
            <x-icon name="down_arrow" class='absolute pointer-events-none' style="right: 12px;"/>
        </div>
    -->
        <!--Recherche-->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form action="/" method="GET">
                @if(request('category'))
                <input type="hidden" name='category' value="{{ request('category') }}">
                @endif
                <input type="text"
                placeholder='Recherche'
                name='recherche'
                class="focus-within:outline-none bg-transparent placeholder-black font-bold text-sm"
                value="{{ request('recherche') }}"/>
            </form>
        </div>
    </div>
</header>
