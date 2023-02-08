@twillBlockTitle('Kontakt')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('b-mail')
<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::input name="description" label="Text" type="textarea" :rows="3" :required="true" />
<x-twill::input name="email" label="E-Mail" :required="true" />
<x-twill::input name="adress" label="Adresse" :maxlength="100" :required="true" type="textarea" :rows="3" />
