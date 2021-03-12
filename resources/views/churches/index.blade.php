<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Church') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					<div class="text-2xl">
						List of Church
					</div>

					<div class="mt-4 text-gray-500">
						This is the church page
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>