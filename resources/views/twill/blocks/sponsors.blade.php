@twillBlockTitle('Sponsoren')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('slideshow')
<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::repeater type="sponsor" />
