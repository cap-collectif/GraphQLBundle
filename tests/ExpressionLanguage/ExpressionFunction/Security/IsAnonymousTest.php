<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Tests\ExpressionLanguage\ExpressionFunction\Security;

use Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security\IsAnonymous;
use Overblog\GraphQLBundle\Tests\ExpressionLanguage\TestCase;

class IsAnonymousTest extends TestCase
{
    protected function getFunctions()
    {
        return [new IsAnonymous()];
    }

    public function testIsAnonymous(): void
    {
        $this->assertExpressionCompile('isAnonymous()', 'IS_AUTHENTICATED_ANONYMOUSLY');
    }
}
