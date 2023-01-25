@twillBlockTitle('Hero')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('image')
<x-twill::medias name="image" label="Bild" />
<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::input name="text" label="Text" type="textarea" :rows="3" :required="true" />
<x-twill::input name="link" type="url" label="Link" :required="true" />
