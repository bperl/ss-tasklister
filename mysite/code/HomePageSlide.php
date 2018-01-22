<?php

namespace SilverStripe\Taskmanager;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePageSlide extends DataObject
{
  private static $table_name = 'HomePageSlide';

  private static $db = [
      'Title' => 'Varchar',
  ];

  private static $has_one = [
      'Photo' => Image::class,
      'HomePage' => HomePage::class,
  ];

  public function getCMSFields()
  {
      $fields = FieldList::create(
          TextField::create('Title'),
          $photo = UploadField::create('Photo')
      );
      $photo->setFolderName('carousel-photos');
      return $fields;
  }
}
