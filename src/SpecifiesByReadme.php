<?php declare(strict_types=1);

namespace MLL\GraphQLScalars;

use GraphQL\Type\Definition\ScalarType;

/**
 * @phpstan-import-type ScalarConfig from ScalarType
 */
final class SpecifiesByReadme
{
    /** @phpstan-return ScalarConfig */
    public static function readmeSpecification(string $anchor): array
    {
        return [
            'specifiedByURL' => "https://github.com/mll-lab/graphql-php-scalars#{$anchor}",
        ];
    }
}
