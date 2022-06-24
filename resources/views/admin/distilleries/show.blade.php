<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Distillery Details')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <dl class="grid grid-cols-6 gap-2">
                        <dt class="col-span-1">ID</dt>
                        <dd class="col-span-5">{{$distillery->id}}</dd>
                        <dt class="col-span-1">Name</dt>
                        <dd class="col-span-5">{{$distillery->name}}</dd>
                        <dt class="col-span-1">Country</dt>
                        <dd class="col-span-5">{{$distillery->country->name}}</dd>
                        <dt class="col-span-1">Actions</dt>
                        <dd class="col-span-5">
                            <form
                                action="{{route('distilleries.destroy', ['distillery'=>$distillery])}}"
                                method="post" )>
                                @csrf
                                @method('delete')
                                <a href="{{route('distilleries.edit', ['distillery'=>$distillery->id])}}"
                                   class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50">Update</a>
                                <button onclick="return confirm('Are you sure you want to delete this distillery?')"
                                        class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">Delete
                                </button>
                                </a>
                            </form>
                        </dd>
                    </dl>
                    <hr>
                    <table class="table w-full table-zebra">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gins as $key=>$gin)
                            <tr class="hover">
                                <td class="small">{{ $key + 1 }}</td>
                                <td>{{$gin->name}}</td>
                                <td>{{$gin->rating}}</td>
                                <td>{{$gin->status ?? "-"}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <p class="pt-6">
                    <a href="{{route('distilleries.index')}}"
                       class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50">Back to Distilleries</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
