<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{__('Countries')}}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <table class="table w-full table-zebra">
            <thead>
            <tr>
                <th>Name</th>
                <th class="flex justify-between">
                    <span class="pt-2">Actions</span>
                    <a href="{{route('countries.create')}}"
                       class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">
                        Add Country
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($countries as $key=>$country)
                <tr class="hover:bg-indigo-100 {{ $key %2 == 0 ? 'bg-gray-100' : '' }}">
                    <td class="px-1 py-2 w-50">{{$country->name}}</td>
                    <td class="w-50">
                        <a href="{{ route('countries.show' , $country->id) }}"
                           class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50">Details</a>
                        <a href="{{ route('countries.edit', $country->id) }}"
                           class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5">
                    {{$countries->onEachSide(1)->links()}}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</x-app-layout>
