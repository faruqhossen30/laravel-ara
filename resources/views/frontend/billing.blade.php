@extends('frontend.layouts.app')
@section('content')
    <section id="singepackageSection" >
        <div class="container">
            <div class="row ">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias accusantium, ullam totam laboriosam quidem deleniti id commodi pariatur repudiandae saepe, ad blanditiis corrupti minima ipsa laudantium maxime excepturi. Quis, velit!</p>
                {{$payLink}}
                <x-paddle-button :url="$payLink" class="px-8 py-4">
                    Buy
                </x-paddle-button>

                {{-- <x-paddle-checkout :override="$payLink" class="w-full" /> --}}
            </div>
        </div>
    </section>
@endsection
