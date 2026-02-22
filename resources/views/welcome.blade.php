@extends('layout.master')

@section('main')
    <h1>Page Home</h1>

    <x-alert type="danger">
        ta7it lmomtaz
    </x-alert>

    <x-usertable nom="zakaria" :users="$users" />

@endsection
@section('title')
Home

@endsection


