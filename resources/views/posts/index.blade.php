<x-layout>
      @include('posts._header')
      <main class='max-w-6xl mx-auto lg:mt-20 space-y-6'>
        @if ($posts->count())
            <x-post_grid :posts="$posts"/>
            {{ $posts->links() }}
        @else
            <p class='text-center mt-10'>Il n'y a rien ici pour le moment</p>
        @endif
      </main>
</x-layout>
