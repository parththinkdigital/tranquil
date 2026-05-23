@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Welcome back!</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        This is your frontend dashboard. The admin panel has been removed and the application now prioritizes public-facing pages.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
