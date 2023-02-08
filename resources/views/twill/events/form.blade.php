@extends('twill::layouts.form', [
    'additionalFieldsets' => [['fieldset' => 'seo', 'label' => 'SEO']],
])

@section('contentFields')
  <x-twill::block-editor />
@stop

@section('sideFieldset')
  <x-twill::date-picker name="start_date" label="Start Datum" :time24Hr="true" :required="true" />
  <x-twill::date-picker name="end_date" label="End Datum" :time24Hr="true" :required="true" />
  <x-twill::input name="seo_title" label="Seo Title" />
  <x-twill::input name="seo_description" label="Seo Beschreibung" :maxlength="120" type="textarea" :rows="3" />
@endsection
