{{-- payment-step.blade.php --}}
<div class="flex items-center space-x-3 group">
    <div class="flex w-12 h-12">
        <i class="bi bi-circle text-orange-500 text-4xl transition-transform transform group-hover:text-red-600 group-hover:translate-x-4"></i>
        <i class="text-orange-500 text-4xl flex items-center justify-center transition-transform transform group-hover:scale-125 group-hover:-translate-y-5 group-hover:-translate-x-1">{{ $stepNumber }}</i>
    </div>
    <div>
    <h3 class="text-neutral-100 text-3xl ml-2">{{ $description }}</h3>
    <p class="text-neutral-200 text-lg ml-2">{{ $note }}</p>
    </div>
</div>

{{-- Arrow --}}
@if(!$last)
<div class="flex justify-center">
    <i class="bi bi-arrow-down text-4xl text-yellow-400"></i>
</div>
@endif
