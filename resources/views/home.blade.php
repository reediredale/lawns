@extends ('app')

    @section ('content')

    <div class="mt-16">
        
        <h1 class="font-semibold text-xl text-center">Lawn Care Near Me</h1>
        
            <div class="mt-16">
                <div>
                    <ul>  
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
                    </ul>
                </div>
            </div>

        <h2 class="font-semibold text-lg text-center">Popular Articles</h2>

    </div>
    @endsection

