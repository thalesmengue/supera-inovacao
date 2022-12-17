@extends('layouts.app')

@section('content')

    <x-forms.create_maintenance :vehicles="$vehicles" :statuses="$statuses" />

@endsection
