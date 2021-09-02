<x-layout>
    <section class='px-6 py-8'>
    <main class='max-w-6xl mx-auto lg:mt-20 space-y-6 mt-20'>
                <article class="max-w-4-xl lg:grid lg:grid-cols-12 gap-x-10">
                    <!--Côté gauche-->
                    <div class='col-span-4 lg:text-center lg:pt-14 mb-10'>
                        <img src="/assets/images/illustration-1.png" alt="illustration" class='rounded-2xl'>

                        <p class='mt-4 block text-gray-400 text-xs'>
                            Publié <time>{{ $post->created_at->diffForHumans() }}</time>
                        </p>
                        <x-post_author :author="$post->author" />
                    </div>
                    <!--contenu-->
                    <div class='col-span-8'>
                        <div class='hidden lg:flex justify-between mb-7 -mt-10'>
                            <a href="/" class='text-lg relative inline-flex items-center hover:text-indigo-400 transition-colors duration-300'>
                              <x-icon name='left_arrow' /> Retour
                            </a>
                            <x-post_category_button :category="$post->category"/>
                        </div>
                        <H1 class='font-bold text-3xl lg:text-4xl mb-10'>{{ $post->title }}</H1>

                        <div class='space-y-4 lg:text-lg text-justify leading-loose'>
                            {!! $post->body !!}
                        </div>
                    </div>
                </article>
    </main>
</section>
</x-layout>
