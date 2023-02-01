<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Announcement') }}
        </h2>
        <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
            <a href = "{{url('/create-announcement')}}"class="btn btn-primary">Add</a>
        </td>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Header</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Sub Header</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Description</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Image</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">User Id</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $data)
                        <tr scope="row">
                            
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              <a href = "{{url('/announcementpage')}}"class="btn btn-light">{{$data->header}}</a>
                          </td>
                            
                            <td scope="row"class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->sub_header}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->description}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->photo}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->user_id}}</td>
                            {{-- <th scope = "col"> <a href="{{ route('dashboard.announcementupdate', ['id' => $data->id]) }} "
                              type="button" class="btn btn-success">Update</a></th>
                            <th scope = "col"> <a href="{{ route('dashboard.delete', ['id' => $data->id]) }} "
                              type="button" class="btn btn-danger">Delete</a></th> --}}
                          </tr>


                          
                          @empty
                            
                          
                        
                        @endforelse
                        
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

</x-app-layout>