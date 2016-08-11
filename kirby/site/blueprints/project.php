<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
  hidemobile:
      label: Hide Mobile
      type: checkbox
      text: Check to hide on mobile devices
  draft:
      label: Draft
      type: checkbox
      text: Hide this page from non-logged-in users?