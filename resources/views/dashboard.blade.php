<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot> -->

    <div class="container mx-auto py-6">
        <div class="flex justify-center">
            <select onchange="location = this.value;" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="/Playgroup">Playgroup</option>
                <option value="/Pp1">Pp1 portal</option>
                <option value="/Pp2">PP2 portal</option>
                <option value="/Grade">Grades portal</option>
            </select>
        </div>

        <div id="slider" class="my-6">
            <div class="main-slider">
                <div class="single-slide">
                    <img src="assets/images/ecd6.jpeg" alt="Slider Image">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
