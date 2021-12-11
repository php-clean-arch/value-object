<?php

namespace PhpCleanArch\ValueObjects;

/**
 * This dummy always mismatch other value-objects
 */
final class DummyValueObject implements ValueObjectInterface
{
    /**
     *  @see \PhpCleanArch\ValueObjects\ValueObjectInterface
     */
    public function equals(ValueObjectInterface $other): bool
    {
        return false;
    }
}