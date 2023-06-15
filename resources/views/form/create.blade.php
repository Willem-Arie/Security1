<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Validation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="section">
                        <div class="container">
                            <div class="columns">
                                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                                    <form method="POST" action="{{route("form.index")}}">
                                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                                            <header class="card-header">
                                                <p class="card-header-title"> {{-- The Card header content --}}
                                                    Add a new foo
                                                </p>
                                            </header>

                                            <div class="card-content">
                                                <div class="content">

                                                    {{-- Here are all the form fields --}}
                                                    <div class="field">
                                                        <label class="label">Name</label>
                                                        <div class="control">
                                                            <input style="color:black" name="name" class="input @error('name') is-danger @enderror"
                                                                   type="text" placeholder="Your name here...">
                                                        </div>
                                                        @error('title')
                                                        <p class="help is-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="field">
                                                        <label class="label">Thud</label>
                                                        <div class="control">
                                            <textarea style="color:black"
                                                      name="thud"
                                                      class="input @error('thud') is-danger @enderror"
                                                      type="number" placeholder="1-9999999"></textarea>
                                                        </div>
                                                        @error('excerpt')
                                                        <p class="help is-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="field">
                                                        <label class="label">Skwal</label>
                                                        <div class="control">
                                            <textarea style="color:black" name="skwal" class="input @error('skwal') is-danger @enderror"
                                                      placeholder="10"></textarea>
                                                        </div>
                                                        @error('body')
                                                        <p class="help is-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="field">
                                                        <label class="label">Wombat</label>
                                                        <div class="control">
                                            <textarea style="color:black" name="wombat" class="textarea @error('wombat') is-danger @enderror"
                                                      placeholder="0 or 1"></textarea>
                                                        </div>
                                                        @error('body')
                                                        <p class="help is-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="field is-grouped">
                                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                                    <div class="control">
                                                        <button type="submit" class="button is-primary">Save</button>
                                                    </div>
                                                    <div class="control">
                                                        <button type="reset" class="button is-warning">Reset</button>
                                                    </div>
                                                    <div class="control">
                                                        <a type="button" href="/foos" class="button is-light">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
