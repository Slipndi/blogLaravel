@props(['active'=>false])
@php
    $class='block text-left px-4 text-sm leading-6 hover:bg-indigo-600 hover:text-white focus:bg-indigo-600 focus:text-white';
    if($active) $class .='!important bg-indigo-600 text-white';
@endphp

<a {{ $attributes(['class'=>$class])}}>{{ $slot }}</a>
