<?php

namespace SilverStripe\Taskmanager;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Page;

class TasksPage extends Page
{
  private static $table_name = 'TasksPage';

  private static $has_many = [
        'Tasks' => Task::class,
  ];

  private static $owns = [
        'Tasks',
  ];

  public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Tasks', GridField::create(
            'Tasks',
            'Tasks on this page',
            $this->Tasks(),
            GridFieldConfig_RecordEditor::create()
        ));
        return $fields;
    }
}
