@extends('twill::layouts.form', [
    'additionalFieldsets' => [['fieldset' => 'seo', 'label' => 'SEO']],
])

@section('contentFields')
  <x-twill::block-editor />
@stop

@section('sideFieldset')
  <x-twill::checkbox name="in_menu" label="Im Menü anzeigen" default="true" />

  <x-twill::input name="seo_title" label="Seo Title" />
  <x-twill::input name="seo_description" label="Seo Beschreibung" :maxlength="120" type="textarea" :rows="3" />
@endsection
