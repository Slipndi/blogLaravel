@props(['trigger'])
    <div x-data="{ show: false}"  @click.away="show=false">
        <div @click="show = !show">
            {{ $trigger }}
        </div>

        <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 z-10 rounded-xl overflow-auto max-h-72" style="display: none" >
            {{ $slot }}
        </div>
    </div>


