<?php

namespace Wearesho\Bobra\Payments;

/**
 * Class TransactionCollection
 * @package Wearesho\Bobra\Payments
 */
class TransactionCollection extends \ArrayObject implements \JsonSerializable
{
    /**
     * TransactionCollection constructor.
     * @param TransactionInterface[] $input
     * @param int $flags
     * @param string $iteratorClass
     */
    public function __construct(array $input = [], int $flags = 0, string $iteratorClass = "ArrayIterator")
    {
        foreach ($input as $item) {
            $this->checkItem($item);
        }

        parent::__construct($input, $flags, $iteratorClass);
    }

    /**
     * @param TransactionInterface $value
     */
    public function append(mixed $value): void
    {
        $this->checkItem($value);
        parent::append($value);
    }

    /**
     * @param mixed $index
     * @param TransactionInterface $newval
     */
    public function offsetSet(mixed $index, mixed $newval): void
    {
        $this->checkItem($newval);
        parent::offsetSet($index, $newval);
    }

    /**
     * @inheritdoc
     */
    public function jsonSerialize(): array
    {
        return (array)$this;
    }

    protected function checkItem(mixed $value): void
    {
        if (!$value instanceof Transactioninterface) {
            throw new \InvalidArgumentException(
                'All items have to be instance of ' . TransactionInterface::class
            );
        }
    }
}
