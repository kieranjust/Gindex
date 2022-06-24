<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Distilleries') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <table class="table-auto border-collapse border border-gray-200 w-full">
            <thead>
            <tr class="py-2 w-full">
                <th class="py-2 w-1/2">Name</th>
                <th class="py-2 w-1/4">Country</th>
                <th class="flex justify-between py-2">
                    <span class="">Actions</span>
                    <span>
                    <a href="{{route('distilleries.create')}}"
                       class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">
                        Add Distillery
                    </a>
                        </span>
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach($distilleries as $key=>$distillery)
                    <tr class="hover:bg-indigo-100 {{ $key %2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="px-1 py-2">{{ $distillery->name }}</td>
                        <td class="px-1 py-2">{{ $distillery->country->name }}</td>
                        <td class="px-1 py-2">
                            <a href="{{route('distilleries.show' , $distillery->id)}}"
                               class="rounded bg-green-500 p-2 mr-2 text-gray-50">Details</a>
                            </a>
                            <a href="{{route('distilleries.edit', $distillery->id)}}"
                               class="rounded bg-indigo-500 p-2 mr-2 text-gray-50">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="6">
                    {{$distilleries->onEachSide(1)->links()}}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</x-app-layout>
