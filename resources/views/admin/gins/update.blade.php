<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Edit Gins')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if ($errors->any())
                    <div class="bg-red-300 border border-red-800 text-black rounded p-2 ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('gins.update', [$gin->id])}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-control">
                        <label class="label" for="name">
                            <span class="label-text">Name</span>
                        </label>
                        <input type="text"
                               name="name" id="name"
                               placeholder="name" class="input input-bordered"
                               value="{{old('name') ?? $gin->name }}">
                    </div>
                    <br>
                    <div class="form-control">
                        <label class="label" for="distillery">
                            <span class="label-text">Distillery</span>
                        </label>
                        <select name="distillery" id="distillery"
                                class="select select-bordered w-full max-w-xs">
                            @foreach($distilleries as $key=>$distillery)
                                <option value="{{$distillery->id}}"
                                        @if($gin->distillery_id == $distillery->id)
                                            selected="selected"
                                        @endif
                                >{{$distillery->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                    <div class="form-control">
                        <label class="label" for="rating">
                            <span class="label-text">Rating</span>
                        </label>
                        <select name="rating" id="rating"
                                class="select select-bordered w-full max-w-xs">
                            <option value="" disabled @if($gin->rating ?? old('rating') ) selected @endif >Select Rating</option>
                            <option @if($gin->rating==1) selected @endif value="1">1/10</option>
                            <option @if($gin->rating==2) selected @endif value="2">2/10</option>
                            <option @if($gin->rating==3) selected @endif value="3">3/10</option>
                            <option @if($gin->rating==4) selected @endif value="4">4/10</option>
                            <option @if($gin->rating==5) selected @endif value="5">5/10</option>
                            <option @if($gin->rating==6) selected @endif value="6">6/10</option>
                            <option @if($gin->rating==7) selected @endif value="7">7/10</option>
                            <option @if($gin->rating==8) selected @endif value="8">8/10</option>
                            <option @if($gin->rating==9) selected @endif value="9">9/10</option>
                            <option @if($gin->rating==10) selected @endif value="10">10/10</option>
                            <option @if($gin->rating=="Unrated") selected @endif value="Unrated">Unrated</option>
                        </select>
                    </div>
                        <br>
                    <div class="form-control">
                        <label class="label" for="status">
                            <span class="label-text">Status</span>
                        </label>
                        <select name="status" id="status"
                                class="select select-bordered w-full max-w-xs">
                            <option @if($gin->status=="Full Bottle") selected @endif value="Full Bottle">Full Bottle</option>
                            <option @if($gin->status=="Mostly Full Bottle") selected @endif value="Mostly Full Bottle">Mostly Full Bottle</option>
                            <option @if($gin->status=="Half Bottle") selected @endif value="Half Bottle">Half Bottle</option>
                            <option @if($gin->status=="Nearly Empty") selected @endif value="Nearly Empty">Nearly Empty</option>
                            <option @if($gin->status=="Empty") selected @endif value="Empty">Empty</option>
                        </select>

                    </div>
                    <div class="py-6">
                        <button class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50"
                                type="submit">Update Gin
                        </button>
                        <a class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50"
                           href="{{route('gins.index')}}">
                            Back to Gins
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
