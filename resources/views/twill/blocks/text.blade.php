@twillBlockTitle('Text')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('text')

<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::wysiwyg name="text" label="Text" :required="true" :toolbar-options="['bold', 'link', 'list-ordered', 'list-unordered']" />
<x-twill::medias name="variable_image" label="Bild" />
