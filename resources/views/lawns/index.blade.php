        
@extends ('app')


<h1>
@section('title')Lawns Test@stop
    </h1>

@section ('content')
    
    <div class="">
    @foreach ($lawns as $lawn)
        <div class="">
            @php
            $slug = Str::slug($lawn->name, '-');
            @endphp

            <a href="/lawns/{{ $slug }}" class="">
            
        <div>

                    <h2 class=" text-xl font-semibold text-gray-900">
                        {{ $lawn->name }}
                    </h2>

                </div>
                
            </a>
        </div>
        @endforeach
    </div>

@endsection
