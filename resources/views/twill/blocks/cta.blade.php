@twillBlockTitle('Call to Action')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('text')
<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::input name="link" type="url" label="Link" :required="true" />
<x-twill::input name="link_text" label="Link Text" :required="true" />
