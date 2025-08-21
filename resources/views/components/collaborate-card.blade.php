<div class="w-full md:w-1/3 flex flex-col items-center rounded-2xl shadow-xl py-8 px-6 bg-white">
    <h3 class="font-bold text-xl text-center h-12">
        {!! $title !!}
    </h3>
    <div class="rounded-xl h-52 w-full overflow-hidden my-4">
        <img src="{{ asset('assets/img/exclusive_program_school/Colaborate/' . $image) }}" alt="EduALL" class="h-full w-full object-cover">
    </div>
    <div class="w-full">
        <p class="text-base text-justify px-4 leading-5">
            {{ $description }}
        </p>
    </div>
</div>
