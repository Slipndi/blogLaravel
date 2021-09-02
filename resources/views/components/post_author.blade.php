@props(['author'])
<div class='flex items-center text-sm lg:justify-center mt-4'>
    <img src="/assets/images/lary-avatar.svg" alt="Lary avatar" />
    <div class='ml-3 text-left'>
    <a href='/?author={{ $author->username }}'>
        <h5 class='font-bold'>{{ $author->name }}</h5>
        <h6>@Créaries</h6>
    </a>
    </div>
</div>
