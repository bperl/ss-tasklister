<?php

namespace SilverStripe\Taskmanager;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Page;

class HomePage extends Page
{
  private static $table_name = 'HomePage';

  private static $has_many = [
       'HomePageSlide' => HomePageSlide::class,
  ];

  public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Carousel', GridField::create(
            'HomePageSlide',
            'Slides for the Homepage',
            $this->HomePageSlide(),
            GridFieldConfig_RecordEditor::create()
        ));
        return $fields;
    }
}
