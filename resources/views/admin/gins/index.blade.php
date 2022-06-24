<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Gins')}}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <table class="table w-full table-zebra">
            <thead>
            <tr>
                <th>Name</th>
                <th>Distillery</th>
                <th>Rating</th>
                <th>Status</th>
                <th class="flex justify-between">
                    <span class="pt-2">Actions</span>
                    <a href="{{route('gins.create')}}"
                       class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">
                        Add Gin
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($gins as $key=>$gin)
                <tr class="hover:bg-indigo-100 {{ $key %2 == 0 ? 'bg-gray-100' : '' }}">
                    <td class="px-1 py-2 w-20">{{$gin->name}}</td>
                    <td class="px-1 py-2 w-20">{{$gin->distillery->name}}</td>
                    <td class="px-1 py-2 w-20">{{$gin->rating>"" ? $gin->rating : "-"}} @if($gin->rating!="Unrated") / 10 @endif</td>
                    <td class="px-1 py-2 w-20" >{{$gin->status>"" ? $gin->status : "-"}}</td>
                    <td class="px-1 py-2 w-20">
                        <a href="{{ route('gins.show' , $gin->id) }}"
                           class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50">Details</a>
                        <a href="{{ route('gins.edit', $gin->id) }}"
                           class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5">
                    {{$gins->onEachSide(1)->links()}}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</x-app-layout>
