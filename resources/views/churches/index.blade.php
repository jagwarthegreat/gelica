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
						@forelse($churches as $church)
						<div class="col-3 p-2 mb-1" style="border: 1px solid #ddd;border-radius: 4px;">
							<div class="flex items-center flex-wrap">
								<img src="{{ url('/images/church_logo.jpg') }}" alt="Images" style="width: 40px; height: 40px;border-radius: 50%;object-fit: cover;">
								<h1>{{ $church->name }}</h1>
							</div>
						</div>
						@empty
						<span>No encoded church.</span>
						@endforelse
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>