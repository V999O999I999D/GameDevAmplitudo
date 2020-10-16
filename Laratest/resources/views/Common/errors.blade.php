@if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{{--@error('username')--}}
{{--    <p>{{ $message }}</p>--}}
{{--@enderror--}}
