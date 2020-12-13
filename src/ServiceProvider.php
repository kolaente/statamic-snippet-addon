<?php

namespace Kolaente\Snippet;

use Kolaente\Snippet\Modifiers\TextSnippet;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
        TextSnippet::class,
    ];
}