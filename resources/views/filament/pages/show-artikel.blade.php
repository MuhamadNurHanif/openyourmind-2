<x-filament::page>
    <section class="container mx-auto px-10 py-0">
        <div class="flex justify-center py-5">
            <div class="class="flex justify-center py-5"">

                {{-- judul --}}
                <h3 class="text-3xl font-extrabold text-gray-900 mb-6" style="margin-bottom: 20px;">{{ $record->judul }}
                </h3>

                {{-- tgl publish --}}
                <p class="text-gray-500" style="margin-bottom: 50px;">
                    Dipublikasikan pada
                    {{ \Carbon\Carbon::parse($record->tgl_published)->isoFormat('dddd, D MMMM YYYY') }}
                </p>

                {{-- gambar --}}
                @if ($record->gambar)
                    <div class="card bg-white overflow-hidden rounded-lg mb-5">
                        <img src="{{ asset($record->gambar) }}"
                            class="img-fluid rounded-4 w-40% md:w-3/4 lg:w-1/2 h-auto object-cover mx-auto">
                    </div>
                @endif

                {{-- deskripsi --}}
                <div class="c-blog-detail-body py-3">
                    <p class="font-serif text-base md:text-lg lg:text-xl text-gray-800 leading-relaxed">
                        {!! $record->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-filament::page>
