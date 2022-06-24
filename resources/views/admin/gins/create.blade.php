<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Add Gin')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('gins.store')}}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="bg-red-300 border border-red-800 text-black rounded p-2 ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-control">
                        <label class="label" for="name">
                            <span class="label-text">Gin Name</span>
                        </label>
                        <input type="text"
                               name="name" id="name"
                               placeholder="Gin Name" class="input input-bordered"
                               value="{{old('name')}}">
                    </div>
                    <br>
                    <div class="form-control">
                        <label class="label" for="distillery">
                            <span class="label-text">Distillery</span>
                        </label>
                        <select name="distillery" id="distillery"
                                class="select select-bordered w-full max-w-xs">
                            <option value="0">Select Distillery</option>
                            @foreach($distilleries as $key=>$distillery)
                                <option value="{{$distillery->id}}">{{$distillery->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-control">
                        <label class="label" for="rating">
                            <span class="label-text">Gin Rating</span>
                        </label>
                        <select name="rating" id="rating"
                                class="select select-bordered w-full max-w-xs">
                            <option value="" disabled selected >Select Rating</option>
                            <option  value="1">1/10</option>
                            <option  value="2">2/10</option>
                            <option  value="3">3/10</option>
                            <option  value="4">4/10</option>
                            <option  value="5">5/10</option>
                            <option  value="6">6/10</option>
                            <option  value="7">7/10</option>
                            <option  value="8">8/10</option>
                            <option  value="9">9/10</option>
                            <option  value="10">10/10</option>
                            <option  value="Unrated">Unrated</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-control">
                        <label class="label" for="status">
                            <span class="label-text">Status</span>
                        </label>
                        <select name="status" id="status"
                                class="select select-bordered w-full max-w-xs">
                            <option value="0">Select Status</option>
                            <option value="Full Bottle">Full Bottle</option>
                            <option value="Mostly Full Bottle">Mostly Full Bottle</option>
                            <option value="Half Bottle">Half Bottle</option>
                            <option value="Nearly Empty">Nearly Empty</option>
                            <option value="Empty">Empty</option>
                        </select>
                    </div>
                    <br>
                    <div class="py-6">
                        <button class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50"
                                type="submit">Save New Gin
                        </button>
                        <a class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50"
                           href="{{route('gins.index')}}">
                            Back to Gins
                        </a>
                        <button class="rounded bg-red-500 p-2 mr-2 my-1 text-gray-50" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
