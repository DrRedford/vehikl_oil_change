<x-layout>


        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">
                    @if($oilChangeDetails->oil_change_needed)
                            You are due for an oil change!
                    @else
                        Your oil is still good. Drive on!
                    @endif
                    </p>
                    <p class="mt-6 text-lg/8 text-gray-700">Below are the details you submitted.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <x-display_data data="{{ $oilChangeDetails->current_odometer }}" />
                        <x-display_data title="Date of Previous Oil Change" data="{{ $oilChangeDetails->previous_oil_change_date->format('M d, Y') }}" />
                        <x-display_data title="Odometer at Previous Oil Change" data="{{ $oilChangeDetails->previous_odometer }}" />
                    </dl>
                </div>
            </div>
        </div>

</x-layout>
