{{-- Tutorial $hasError di view--}}
{{-- :hasError="$errors->has('$nameOfInput')" --}}
<input type="{{$type}}"
       {{ $attributes->class(['form-control', 'is-invalid' => $hasError]) }} name="{{$name}}" id="{{$name}}"/>
