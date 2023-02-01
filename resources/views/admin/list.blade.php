<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Users') }}
        </h2>
        <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
            <a href = "{{url('/create-user')}}"class="btn btn-primary">Add</a>
        </td>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">ID</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">email</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">update</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr scope="row">
                            
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$user->id}}</td>
                            <td scope="row"class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$user->name}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$user->email}}</td>
                            
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <a href = "{{url('edit-user/'.$user->id)}}"class="btn btn-primary">update</a>
                                
                            </td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <form action="{{url('delete-user/'.$user->id)}}" method="POST">
                                    @csrf

                                    @method('DELETE')
                                    <x-primary-button class="btn btn-danger">Delete</x-primary-button>
                                </form>

                                
                            </td>
                          </tr> 
                          @empty
                            
                          
                        
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

</x-admin-layout>