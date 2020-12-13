<?php

namespace Kolaente\Snippet\Modifiers;

use Statamic\Modifiers\Modifier;

class TextSnippet extends Modifier
{
    protected static $handle = 'snippet';

    /**
     * Creates a text snippet of a given string. A snippet is an "intelligent substring": It will try to end the
     * snippet at the end of a sentence (after a dot) within a given boundary. If no sentence ends within the
     * boundary, it will end after the first word in the boundary and add "..." to the end of the snippet.
     * This will avoid having words cut off in the middle after a fixed boundary.
     *
     * @param mixed $value The value to be modified
     * @param array $params Any parameters used in the modifier
     * @param array $context Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $lengthMin = $params[0] ?? 200;
        $lengthMax = $params[1] ?? 250;

        $firstSentenceEnd = strpos($value, '.', $lengthMin);
        if ($firstSentenceEnd <= $lengthMax) {
            return substr($value, 0, $firstSentenceEnd + 1);
        }

        $firstSpace = strpos($value, ' ', $lengthMin) ?? $lengthMax;

        return substr($value, 0, $firstSpace + 1) . '...';
    }
}
