<?php
// config for Exula/LaravelDelayedAttributes
return [

    //This package uses a Laravel Cache driver to store the attributes.
    'cache_key_prefix' => 'delayed-attributes',

    //How long to keep the attributes in the cache before flushing them to the database.
    'flush_after' => '5 minutes',

    'use_queue' => true,

    //The queue connection to use.
    'queue_connection' => 'default',

    //The queue name to use.
    'queue_name' => 'default',

    /*
     The default job to use for flushing the attributes.
     Feel free to override this job if you would like
     To use a different implementation.
    */
    'queue_job' => Exula\LaravelDelayedAttributes\Jobs\FlushAttributesJob::class,

    // Attributes used on Eloquent Models for defining delayed attributes.
    'delayed_attributes_definition' => 'delayed_attributes',


];
