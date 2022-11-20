<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="bg-red flex justify-end">
                </div>
                <form wire:submit.prevent="store" action="#" method="POST">
                    @csrf
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:mx-6 lg:mx-8">
                            <div class="flex">
                                <div class="mb-3 xl:w-96 p-2">
                                    <label for="name" class="form-label inline-block mb-2 text-gray-700 font-bold" >{{ __('Name') }}</label>
                                    <input type="text" name="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " id="name" placeholder="{{ __('Enter Name') }}" wire:model.lazy="name"/>
                                    @error('name') 
                                        <span class="error">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>
                            <div class="flex">
                                <div class="mb-3 xl:w-96 p-2">
                                    <label for="author" class="form-label inline-block mb-2 text-gray-700 font-bold" >{{ __('Author') }}</label>
                                    <input type="text" name="author" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " id="author" placeholder="{{ __('Enter Author') }}" wire:model.lazy="author"/>
                                    @error('author') 
                                        <span class="error">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>
                            <div class="flex">
                                <div class="mb-3 xl:w-96 p-2">
                                    <label for="status" class="form-label inline-block mb-2 text-gray-700 font-bold" >{{ __('Status') }}</label>
                                    <div class="form-check form-switch mb-7 block">
                                      <input class="form-check-input appearance-none w-9 -ml-10 rounded-full float-left h-5 align-top bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm" type="checkbox" role="switch" name="status" wire:model.lazy="status">
                                    </div>
                                    @error('status') 
                                        <span class="error">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>
                            <div class="flex">
                                <div class="mb-3 xl:w-96 p-2">
                                    <x-button>{{ __('Save') }}</x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
