<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Users') }}
        </h2>
        <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
            <a href = "{{url('/list-announcement')}}"class="btn btn-primary">Add</a>
        </td>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Header</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Sub Header</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Description</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Photo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($announcements as $announcement)
                        <tr scope="row">
                            
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$announcement->header}}</td>
                            <td scope="row"class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$announcement->sub_header}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$announcement->description}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$announcement->photo}}</td>

                          </tr>
                          @empty
                            
                          
                        
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

</x-app-layout>