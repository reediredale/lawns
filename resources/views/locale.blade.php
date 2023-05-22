        
@extends ('app')

@section ('content')

    <div class="mt-16">
    @foreach ($locale as $local)
        <div class="">
            <a href="/locale/{{ $local->slug }}" class="">
            
                <div>
            
                    <h2 class=" text-xl font-semibold text-gray-900">
                        {{ $local->town }}
                    </h2>

                </div>
                
            </a>
        </div>
        @endforeach
    </div>

@endsection
