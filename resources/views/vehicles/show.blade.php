@extends('layouts.app')

@section('content')

    <section class="pt-16 bg-blueGray-50">
        <div class="w-full lg:w-4/12 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="leading-normal mb-2 text-blueGray-400 uppercase text-center font-extrabold">
                                Vehicle informations
                            </p>
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-10 flex gap-1.5">
                            <div>
                                <p class="font-bold">Vehicle Owner: </p>
                            </div>
                            <div>
                                <p class="mr-2">{{$vehicle->owner}}</p>
                            </div>
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-6 flex gap-1.5">
                            <div>
                                <p class="font-bold">Brand: </p>
                            </div>
                            <div>
                                <p class="mr-2">{{$vehicle->brand}}</p>
                            </div>
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-6 flex gap-1.5">
                            <div>
                                <p class="font-bold">Model: </p>
                            </div>
                            <div>
                                <p class="mr-2">{{$vehicle->model}}</p>
                            </div>
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-6 flex gap-1.5">
                            <div>
                                <p class="font-bold">Model Year: </p>
                            </div>
                            <div>
                                <p class="mr-2">{{$vehicle->model_year}}</p>
                            </div>
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-6 flex gap-1.5">
                            <div>
                                <p class="font-bold">Version: </p>
                            </div>
                            <div>
                                <p class="mr-2">{{$vehicle->version}}</p>
                            </div>
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-6 flex gap-1.5">
                            <div>
                                <p class="font-bold">Registration Plate: </p>
                            </div>
                            <div>
                                <p class="mr-2">{{$vehicle->plate}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div>
                                <form method="post" action="{{ route("vehicles.destroy", $vehicle->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-6">Delete</button>
                                </form>
                            </div>
                            <div class="flex flex-row ml-12">
                                <a href="{{route("vehicles.edit", $vehicle->id)}}"
                                   class="text-blue-600 hover:text-blue-900">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
