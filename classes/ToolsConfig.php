<?php

namespace jars\http;

class ToolsConfig extends \Tools\Config
{
    public function defaults(): array
    {
        return ['hidden' => true];
    }

    public function includePath(): ?string
    {
        return 'vendor/oranfry/jars-http';
    }

    public function router(): string
    {
        return HttpRouter::class;
    }

    public function title(): string
    {
        return 'Jars HTTP';
    }
}
