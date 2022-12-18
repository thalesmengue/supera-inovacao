@props(['vehicles', 'statuses', 'maintenance'])
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Edit a maintenance already scheduled</h3>
        <form action="{{route('maintenances.update', $maintenance->id)}}" method="post">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="vehicle_id">Vehicle<label>
                            <select name="vehicle_id" id="vehicle_id"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @foreach($vehicles as $vehicle)
                                    <option value="{{$vehicle->id}}">{{$vehicle->brand}} - {{$vehicle->model}}
                                        - {{$vehicle->plate}}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has("vehicle_id"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("vehicle_id") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="date">Date<label>
                            <input type="datetime-local" placeholder="date" name="date" id="date"
                                   value="{{ $maintenance->date->format('d/m/Y') }}"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("date"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("date") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="description">Description<label>
                            <input type="text" placeholder="description" name="description"
                                   value="{{ $maintenance->description }}"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("description"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("description") }}
                                </div>
                    @endif
                </div>
                <div>
                    <label class="block" for="vehicle_id">Status<label>
                            <select name="statuses" id="statuses"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @foreach($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->status}} 
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has("statuses"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("statuses") }}
                                </div>
                    @endif
                </div>
                <div class="flex justify-center items-center">
                    <button class="px-6 py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-900">register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
