@extends('layout.main')
@push('title')
<title>form</title>
@endpush
@section('main-section')
<form action="{{url('/')}}/form" method="POST">
    @csrf
    <x-Inputs name="name" type="text" label="Full Name" placeholder="Enter your name"/>
    <x-Inputs name="email" type="email" label="Email" placeholder="Enter your Email"/>
    <x-Inputs name="pasword" type="password" label="Password" placeholder="Enter your Password"/>
    <x-Inputs name="password_confirmation" type="password" label="Confirm Password" placeholder="Reenter Password"/>
    {{-- <label for="">name:</label>
    <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
    <span style="color:red;">
        @error('name')
           {{$message}} 
        @enderror
    </span>
     <br>
    <label for="">email:</label>
    <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
    <span style="color:red;">
        @error('email')
            {{$message}}
        @enderror
    </span>
    <br>
    <label for="">password:</label>
    <input type="text" name="password" placeholder="Enter your password">
    <span style="color:red;">
        @error('password')
            {{$message}}
        @enderror
    </span>
    <br>
    <label for="">Confirm password:</label>
    <input type="text" name="password_confirmation" placeholder="Enter your password">
    <span style="color:red;">
        @error('password_confirmation')
            {{$message}}
        @enderror
    </span>
    <br>  --}}
    <button name="submit">submit</button>
</form>
@endsection