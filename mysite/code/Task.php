<?php

namespace SilverStripe\Taskmanager;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DateField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class Task extends DataObject
{
    private static $table_name = 'Task';

    private static $db = [
        'Title' => 'Varchar',
        'Complete By' => 'Date',
        'Description' => 'Text',
    ];

    private static $has_one = [
       'TasksPage' => TasksPage::class,
   ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            DateField::create('Date'),
            TextareaField::create('Description')
        );

        return $fields;
    }
}
