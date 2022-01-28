@include('components.header')
<x-guest-layout>
    <x-slot name="slot">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    @foreach ($mainCategories as $mainCategory)
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full" src="{{ $mainCategory->path_to_image }}">
                            </div>
                            <h2 class="inline-flex text-xl font-medium title-font text-gray-900 mt-5">
                                {{ $mainCategory->name }}
                            </h2>
                        </div>
                    @endforeach
                </div>
            </div>
          </section>
    </x-slot>
</x-guest-layout>
