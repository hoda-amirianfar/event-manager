@extends('layouts.app')

@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="text-primary">
                        Event Manager
                    </h1>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 mt-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="/events" class="underline text-gray-900 dark:text-white">
                                        <h4>Events</h4> 
                                    </a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    We have some special events for you with discount. Try it to find best event and improve your job.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="/categories" class="underline text-gray-900 dark:text-white">
                                        <h4>Categories</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    We can see our categories here. 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>

@endsection
