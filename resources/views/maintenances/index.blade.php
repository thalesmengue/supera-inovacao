@extends('layouts.app')

@section('content')

    <div class="px-4 sm:px-6 lg:px-8 mt-16">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Maintenances</h1>
                <p class="mt-2 text-sm text-gray-700 mt-4">Here stay all the maintenances registered for the vehicles</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{route('maintenances.create')}}">
                    <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent
                bg-indigo-600 px-4 py-2 text-sm mt-4 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add Maintenance
                    </button>
                </a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID
                                </th>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Vehicle
                                </th>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Description
                                </th>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Date
                                </th>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Status
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @isset($maintenances)
                                @foreach($maintenances as $maintenance)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"> {{$maintenance->id}} </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"> {{$maintenance->vehicle->brand}} - {{$maintenance->vehicle->model}} - {{$maintenance->vehicle->version}}</td>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"> {{ $maintenance->description }} </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"> {{ $maintenance->date->format('d/m/Y - H:i') }}</td>
                                        @if($maintenance->status_id === 1)
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-500 sm:pl-6"> Scheduled </td>
                                        @elseif($maintenance->status_id === 2)
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-red-500 sm:pl-6"> Completed </td>
                                        @endif
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a href="{{route('maintenances.show', $maintenance->id)}}"
                                               class="text-indigo-600 hover:text-indigo-900">Show</a>
                                            <a href="{{route('maintenances.destroy', $maintenance->id)}}"
                                               class="text-red-600 hover:text-red-900 ml-6">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
