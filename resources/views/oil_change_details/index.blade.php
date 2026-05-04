<x-layout>
    <div class="flex items-center justify-center">
        <form method="POST" action="/check">
            @csrf
            <div class="space-y-12 pt-10">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Oil Change Details</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Input your details and check to see if you're due for an oil change</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-input value="{{ old('current_odometer') }}"/>


                        <x-input label="Date of Previous Oil Change"
                                 type="date"
                                 name="previous_oil_change_date"
                                 value="{{ old('previous_oil_change_date') }}"/>

                        <x-input label="Odometer at Previous Oil Change"
                                 type="number"
                                 name="previous_odometer"
                                 value="{{ old('previous_odometer') }}"/>

                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</x-layout>
