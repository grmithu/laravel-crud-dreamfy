<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post a Dream') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <form class="max-w-sm mx-auto"  action="{{ route('dreams.store') }}" method="POST">

                        @csrf

                        <label for="content" name="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Dream</label>

                        <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" placeholder="Share your dream..." maxlength="300"></textarea>


                        <x-primary-button type="submit">Post Your Dream</x-primary-button>

                    </form>






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
