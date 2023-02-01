<?php

declare(strict_types=1);

namespace Lendable\ComposerLicenseChecker\Exception;

final class FailedRunningComposer extends \RuntimeException
{
    /**
     * @param non-empty-string $message
     */
    private function __construct(string $message, ?\Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }

    /**
     * @param non-empty-string $reason
     */
    public static function withReason(string $reason): self
    {
        return new self(\sprintf('Failed to provide packages: %s', $reason));
    }
}
