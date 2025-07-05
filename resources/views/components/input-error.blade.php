@props(['for', 'padding'=>''])

@error($for)
<p {{ $attributes->merge(['class' => 'text-sm text-danger '.$padding]) }}>{{ $message }}</p>
@enderror