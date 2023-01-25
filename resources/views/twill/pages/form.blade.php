@extends('twill::layouts.form')

@section('contentFields')
    <x-twill::block-editor />
@stop

@section('sideFieldset')
    <x-twill::checkbox name="in_menu" label="Im Menü anzeigen" default="true" />
@endsection
