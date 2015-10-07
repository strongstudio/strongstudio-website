<?php if(!defined('KIRBY')) exit ?>

title: Staff
pages: true
files: true

fields:
    title:
        label: Title
        type: text
        required: true
    name:
        label: Name
        type: text
        required: true
    position:
        label: Position
        type: text
        required: true
    bio:
        label: Bio
        type: textarea
        required: true