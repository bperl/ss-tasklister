<?php

namespace SilverStripe\Taskmanager;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Page;

class HomePage extends Page
{
  private static $table_name = 'HomePage';

  private static $has_many = [
       'HomePageSlides' => HomePageSlide::class,
  ];

  private static $owns = [
       'HomePageSlides',
  ];

  public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Carousel', GridField::create(
            'HomePageSlides',
            'Slides for the Homepage',
            $this->HomePageSlides(),
            GridFieldConfig_RecordEditor::create()
        ));
        return $fields;
    }
}
