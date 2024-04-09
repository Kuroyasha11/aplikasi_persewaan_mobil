{{-- Tutorial $hasError di view--}}
{{-- :hasError="$errors->has('$nameOfInput')" --}}
{{-- divClass = Class untuk div --}}
{{-- inputClass = Class untuk input --}}
{{-- labelClass = Class untuk label --}}
{{-- :checked = "input has true"--}}
{{-- placeholder = Kalimat untuk label checkbox --}}
<div class="custom-control custom-checkbox {{{$divClass}}}">
    <input type="checkbox" class="custom-control-input {{$inputClass}} {{$hasError ? 'is-invalid' : ''}}" id="{{$name}}"
           name="{{$name}}" @checked($checked)>
    <x-label-form class="custom-control-label {{$labelClass}} {{$hasError ? 'text-danger' : ''}}"
                  for="{{$name}}">{{$placeholder}}</x-label-form>
</div>

