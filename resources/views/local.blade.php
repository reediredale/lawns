
                <!-- Posts -->
@extends ('app')

@section ('content')
                <div class="mt-16">
                    <div class="">
                        <div class="">
                            <div>
                     
                                <h2 class="text-center mt-6 text-xl font-semibold text-gray-900 dark:text-white">Get Lawn Care in {{ $local->town }}, {{ $local->city }}</h2>

                                <p class="text-center mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ $local->city }}, {{ $local->state }}
                                </p>

                            </div>
                        
                        </div>
                    </div>
                </div>

                <div class="text-center  p-6 lg:p-8">
                    <a href="/locale">Back to locale &rarr;</a>
                </div>

@endsection
