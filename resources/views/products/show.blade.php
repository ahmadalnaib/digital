<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$product->title}}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h2 class="text-lg mb-2">{{$product->title}}</h2>
          <div>${{$product->price}}</div>
          <p>{{$product->description}}</p>

          <x-button class="mt-3">
            ADD TO CART
          </x-button>
        </div>
         

        </div>
      </div>
  </div>
</x-app-layout>
