@twillBlockTitle('Text')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('text')

<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::wysiwyg name="text" label="Text" :required="true" :toolbar-options="['bold', 'link', 'list-ordered', 'list-unordered']" />
<x-twill::medias name="variable_image" label="Bild" />

@php
  $selectOptions = [
      [
          'value' => 'small',
          'label' => 'Klein',
      ],
      [
          'value' => 'large',
          'label' => 'Groß',
      ],
  ];
@endphp

<x-twill::select name="space" default="large" label="Abstand" placeholder="Abstand" :options="$selectOptions" />
