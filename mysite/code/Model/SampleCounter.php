<?php
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;

class SampleCounter extends DataObject
{
    private static $db = [
        'Name' => 'Varchar',
        'InfoCounter' => 'Int',
        'SuccessCounter' => 'Int',
        'WarningCounter' => 'Int',
        'DangerCounter' => 'Int',
        'HappyCounter' => 'Int',
        'SadCounter' => 'Int',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('InfoCounter', 'Info Count', 0),
            TextField::create('SuccessCounter', 'Success Count', 1),
            TextField::create('WarningCounter', 'Warning Count', 2),
            TextField::create('DangerCounter', 'Danger Count', 3),
            TextField::create('HappyCounter', 'Happy Count', 4),
            TextField::create('SadCounter', 'Sad Count', 5)
        ]);

        return $fields;
    }
}
