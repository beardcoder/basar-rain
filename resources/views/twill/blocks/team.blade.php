@twillBlockTitle('Team')
@twillBlockTitleField('title', [
    'hidePrefix' => true,
])
@twillBlockIcon('b-membership')

<x-twill::input name="title" label="Titel" :required="true" />
<x-twill::repeater type="team_member" />
