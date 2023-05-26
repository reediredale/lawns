@extends ('app')

@section ('title')Lawn Care in {{ $lawn->name }}@endsection

@section ('content')

    <div class="pt-16 max-w-2xl mx-auto container">
        <div>
    
            <h2 class="text-center text-5xl font-semibold text-gray-900">Lawn Care in {{ $lawn->name }}, {{ $lawn->state }}</h2>

            <p class="text-center mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ $lawn->region }}, {{ $lawn->state }}
            </p>

        </div>
           
        <!-- Recommended Lawn Type and Product Recommendations -->
        
        <h2 class="text-lg font-bold mt-16">Recommended Lawn Type and Products</h2>

        <!-- Recommended Services -->

        <h2 class="text-lg font-bold mt-16">Lawn Care Services</h2>

        <!-- Lawn Care Recommendations and weather data, tip of the week etc -->
        
        <h2 class="text-lg font-bold mt-16">Lawn Care Recommendations</h2>

        <!-- About Your Area -->

        <h2 class="text-lg font-bold mt-16">Lawn Care {{ $lawn->name }}, {{ $lawn->state_code }}</h2>

        <!-- Reviews and Testimonials -->
        
        <h2 class="text-lg font-bold mt-16">Epic Lawns Reviews</h2>

        <!-- Articles -->

        <h2 class="text-lg font-bold mt-16">Epic Lawns Articles</h2>

        <!-- Become a Lawn Care Specialist -->

        <div class="text-center  p-6 lg:p-8">
            <a href="/">Back to lawns &rarr;</a>
        </div>

    </div>
</div>
@endsection
