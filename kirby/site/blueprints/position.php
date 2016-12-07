<?php if(!defined('KIRBY')) exit ?>

title: Position
pages: true
files: true

fields:
    title:
        label: Title
        type: text
        required: true
    description:
        label: Description
        type: textarea
        required: true
    requirements_heading:
        label: Requirements Heading
        type: text
        required: true
    requirements:
        label: Requirements
        type: textarea
        required: true
    bonus_points:
        label: Bonus Points
        type: textarea
        required: false