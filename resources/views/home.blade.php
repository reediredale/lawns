@extends ('app')

    @section ('content')

    <div class="pt-16 pb-16 max-w-2xl mx-auto container">

        <div class="pb-16">
            <h1 class="font-semibold text-5xl text-center">Lawn Care Near Me</h1>
            <p class="text-center">Australia's #1 lawn care website.</p>
            <form action="">
                
            </form>
        </div>
        
        <div id="regions" class="">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($lawns as $lawn)
                <div>
                    <a href="/lawns/{{ $lawn->slug }}" class="">
                        <h3 class="text-md font-semibold text-gray-900">
                            {{ $lawn->name }}, {{ $lawn->state_code }}
                        </h3>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection

