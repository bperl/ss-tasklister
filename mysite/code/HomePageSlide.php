<?php

namespace SilverStripe\Taskmanager;

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

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
}
