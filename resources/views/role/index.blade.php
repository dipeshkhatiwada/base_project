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
                    List of all roles
                     <x-nav-link :href="route('role.create')" >
                        {{ __('Add new') }}
                    </x-nav-link>
                </div>
                <table class="table-fixed" style="width:100%;">
                    <thead>
                        <tr>
                        <th class="w-1/2 ...">S.N</th>
                        <th class="w-1/4 ...">Name</th>
                        <th class="w-1/4 ...">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $key=>$role)
                            <tr style="text-align: center;">
                                <td>{{++$key}}</td>
                                <td>{{$role->name}}</td>
                                <td>
                                    <x-nav-link :href="route('role.edit',$role->id)" >
                                        {{ __('Edit') }}
                                    </x-nav-link>
                                    <!-- <a href="">Delete</a> -->
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="text-align:center">No Data Found! </td>
                            </tr>
                        @endforelse()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
