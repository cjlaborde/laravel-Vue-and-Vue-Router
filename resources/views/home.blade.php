@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0 text-center">
                    <h2 class="text-gray-800 tw-mb-8 text-3xl">Generate Token</h2>
                </div>

                <div class="h-32">
                    <div class="w-full flex pt-6">
                       
                        <form method="POST" action="/settings/access" class="mx-auto">
                            @method('PATCH')
                            @csrf
                    
                            <button class="button bg-blue-500 text-white">Generate New Access Token</button>
                           
                        </form>
                    </div>
                    <div class="w-full flex text-center flex-col">
                        @if (session('message'))
                            <p class="text-gray-800 mt-3">We have generated a new token for you. You will only see this once, so please store it somewhere safer:</p>
                            <p class="text-green-400 mt-3">{{ session('message') }}</p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
