@extends('layouts.app')

@section('content')

    <x-forms.edit_maintenance :vehicles="$vehicles" :statuses="$statuses" :maintenance="$maintenance"/>

@endsection
