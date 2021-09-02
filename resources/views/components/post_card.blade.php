@props(['post'])

<article
    {{ $attributes(['class'=>'border border-black border-opacity-0 rounded-xl hover:border-opacity-10 hover:bg-gray-100 transition-colors duration-500']) }}
>
    <div class="py-6 px-5">
        <div>
            {{-- TODO --}}
            <img src="/assets/images/illustration-5.png" alt="Illustration du Post" class='rounded-2xl' />
        </div>
        <div class="mt-8 flex flex-col justify-between">
            <header>
                    <x-post_category_button :category="$post->category"/>
                <div>
                    <a href='\posts\{{ $post->slug }}'>
                        <h1 class='text-2xl font-semibold mt-1'>{{ $post->title }}</h1>
                    </a>
                    <span class='mt-2 block text-gray-400 text-xs'>
                        Publié <time> {{$post->updated_at->DiffforHumans()}}</time>
                    </span>

                </div>
            </header>
            <div class="text-sm mt-6">
                    {!! $post->excerpt !!}
            </div>
            <footer class="flex justify-between items-center mt-8">
                <x-post_author :author="$post->author" />
                <div>
                    <a href="\posts\{{$post->slug}}" class='text-sm font-semibold bg-gray-200 rounded-full py-2 px-5'>Détails</a>
                </div>
            </footer>
        </div>
    </div>
</article>
