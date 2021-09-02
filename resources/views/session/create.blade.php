<x-layout>
    <section class='px-6 py-8'>
        <div>
            <main class='max-w-lg mx-auto mt-10 bg-indigo-500 p-6 rounded-2xl border border-indigo-800 shadow-md'>
                <h1 class='text-center text-2xl font-bold mb-3 text-white'>Connexion</h1>
                <form action="/session" method="POST" class='mt-10'>
                    @csrf
                        <div class="mb-6 mt-8">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-white ">
                                E-mail
                            </label>
                            <input type="email"
                                   class='border border-indigo-800 p-2 w-full'
                                   name='email'
                                   id='email'
                                   value="{{ old('email') }}"
                                   required
                            />
                            @error('email')
                            <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                        <div class="mb-6 mt-8">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-white ">
                                Mot de passe
                            </label>
                            <input type="password"
                                   class='border border-indigo-800 p-2 w-full'
                                   name='password'
                                   id='password'
                                   required
                            />
                        @error('password')
                            <p class="text-red-500 text-xs font-bold mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                        <input type='submit' value='connexion' class='float-right border-2 rounded-xl px-6 py-2 mx-auto bg-white text-indigo-800 hover:bg-indigo-500 hover:text-white hover:border-indigo-800' />
                </form>
            </main>
        </div>
    </section>

</x-layout>

