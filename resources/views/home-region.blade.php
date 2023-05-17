          
                @include ('layouts.head')

                <h1 class="text-center text-xl">Lawn Care</h1>
                <!-- Posts -->
                
                <div class="mt-16">
                @foreach ($locale as $local)
                    <div class="">
                        <a href="/local/{{ $local->slug }}" class="">
                        
                            <div>
                     
                                <h2 class=" text-xl font-semibold text-gray-900">
                                   {{ $local->town }}
                                </h2>

                            </div>
                            
                        </a>
                    </div>
                    @endforeach
                </div>

 
                @include ('layouts.footer')
