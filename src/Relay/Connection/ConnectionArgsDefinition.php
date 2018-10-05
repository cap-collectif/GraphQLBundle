<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Relay\Connection;

use Overblog\GraphQLBundle\Definition\Builder\MappingInterface;

final class ConnectionArgsDefinition implements MappingInterface
{
    /**
     * @param array $config
     *
     * @return array
     */
    public function toMappingDefinition(array $config): array
    {
        return [
            'after' => [
                'type' => 'String',
                'description' => 'Returns the elements in the list that come after the specified cursor.',
            ],
            'first' => [
                'type' => 'Int',
                'description' => 'Returns the first `n` elements from the list.',
                'defaultValue' => 100
            ],
            'before' => [
                'type' => 'String',
                'description' => 'Returns the elements in the list that come before the specified cursor.'
            ],
            'last' => [
                'type' => 'Int',
                'description' => 'Returns the last `n` elements from the list.'
            ],
        ];
    }
}
