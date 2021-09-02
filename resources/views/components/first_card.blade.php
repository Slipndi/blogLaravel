@props(['post'])
<article class='border border-black border-opacity-0 rounded-xl hover:border-opacity-10 hover:bg-gray-100 transition-colors duration-500 mt-5'>
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            {{-- TODO --}}
            <img src="\assets\images\illustration-1.png" alt="Illustration du Post" class='rounded-2xl' />
        </div>
        <div class="flex-1 flex flex-col justify-between ml-4">
            <header class='mt-8 lg:mt-0'>
                    <x-post_category_button :category="$post->category"/>
                <div>
                    <h1 class='text-2xl font-semibold mt-1'><a href="\posts\{{ $post->slug }}">{{ $post->title }}</a></h1>
                    <span class='mt-2 block text-gray-400 text-xs'>
                        Publié <time> {{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            <div class="text-sm mt-6">
                {!! $post->excerpt !!}
            </div>
            <footer class="flex justify-between items-center mt-8">
                <div class='flex items-center text-sm'>
                    <img src="\assets\images\lary-avatar.svg" alt="Lary avatar" />
                    <div class='ml-3'>
                    <a href='/?author={{ $post->author->username}}'>
                        <h5 class='font-bold'>{{ $post->author->name }}</h5>
                        <h6>le magnifique @Créaries</h6>
                    </a>
                    </div>
                </div>
                <div class='hidden lg:block'>
                    <a href="\posts\{{ $post->slug }}" class='text-sm font-semibold bg-gray-200 rounded-full py-2 px-5'>Détails</a>
                </div>
            </footer>
        </div>
    </div>
</article>
