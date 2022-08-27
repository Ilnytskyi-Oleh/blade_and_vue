@extends('layouts.index')
@section('content')
    <div class="w-full ">
        <div class="text-center text-xl bg-slate-300 py-6"> Users </div>
        <div class="text-center">
            <users-component :users="{{$users}}"></users-component>
        </div>
    </div>
@endsection
