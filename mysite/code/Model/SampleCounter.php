<?php
use SilverStripe\ORM\DataObject;
use Marcz\SSCounter\SSCounterField;

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
            SSCounterField::create('InfoCounter', 'Info Count', 0)
                ->addExtraClass('sscounter-info'),
            SSCounterField::create('SuccessCounter', 'Success Count', 1)
                ->addExtraClass('sscounter-success'),
            SSCounterField::create('WarningCounter', 'Warning Count', 2)
                ->addExtraClass('sscounter-warning'),
            SSCounterField::create('DangerCounter', 'Danger Count', 3)
                ->addExtraClass('sscounter-danger')
        ]);
        $fields->addFieldsToTab('Root.HappySad', [
            SSCounterField::create('HappyCounter', 'Happy Count', 4)
                ->addExtraClass('sscounter-happy'),
            SSCounterField::create('SadCounter', 'Sad Count', 5)
                ->addExtraClass('sscounter-sad')
        ]);

        return $fields;
    }
}
