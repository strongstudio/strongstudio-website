<?php if(!defined('KIRBY')) exit ?>

title: Case Study
pages: true
files: true

fields:
    title:
        label: Title
        type: text
        required: true
    tagline:
        label: Tagline
        type: text
        required: true
    bgcolor:
        label: Background Color
        type: text
        width: 1/2
        default: ffffff
    services1:
        label: Services Col One
        type: textarea
    services2:
        label: Services Col Two
        type: textarea
    challenge:
        label: Challenge
        type: textarea
    solution:
        label: Solution
        type: textarea
    results:
        label: Results
        type: textarea
