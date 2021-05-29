<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Add new roles
                     <x-nav-link :href="route('role')" >
                        {{ __('List Roles') }}
                    </x-nav-link>
                </div>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('role.store') }}">
                    @csrf
                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="status" class="inline-flex items-center">
                            <input type="hidden" name="status" value="0">
                            <input id="status" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="status" value="1">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Status') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>
