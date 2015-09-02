<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  hidemobile:
        label: Hide Mobile
        type: checkbox
        text: Check to hide on mobile devices