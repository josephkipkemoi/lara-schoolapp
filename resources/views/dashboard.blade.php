<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @foreach(auth()->user()->role as $role)
                {{$role->role}}
            @endforeach
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if(auth()->user()->role[0]->id == 3)
                    <a href={{route('personnel.create')}} class="btn btn-primary">Add Personnel</a>
                    <a href={{route('event.create')}} class="btn btn-primary">Add Event</a>
                    <a href={{route('report.create')}} class="btn btn-primary">Add Report</a>
                    <a href={{route('download.create')}} class="btn btn-primary">Add Download Files</a>
                    <a href={{route('photo.create')}} class="btn btn-primary">Add Photo</a>
                    <a href={{route('about.create')}} class="btn btn-primary">Add Biography</a>
                    <a href={{route('management.create')}} class="btn btn-primary">Add School Management</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
