<?php

namespace AvoRed\Framework\AdminConfiguration;

use AvoRed\Framework\AdminConfiguration\Contracts\AdminConfiguration as AdminConfigurationContracts;
use AvoRed\Framework\AdminConfiguration\Contracts\DropdownFieldContract;

class AdminConfiguration implements AdminConfigurationContracts, DropdownFieldContract
{
    /**
     * @var string $label
     */
    protected $label;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var callable $options
     */
    protected $options;

    /**
     * @var string $type
     *
     */
    protected $type;

    /**
     * @var string $key
     */
    protected $key;

    public function label($label = null)
    {
        if (null !== $label) {
            $this->label = $label;

            return $this;
        }

        return $this->label;
    }

    public function key($key = null)
    {
        if (null !== $key) {
            $this->key = $key;

            return $this;
        }

        return $this->key;
    }

    public function name($name = null)
    {
        if (null !== $name) {
            $this->name = $name;

            return $this;
        }

        return $this->name;
    }

    public function type($type = null)
    {
        if (null === $type) {
            return $this->type;
        }

        $this->type = $type;

        return $this;
    }

    public function options($callable = null)
    {
        if (null === $callable) {
            if (is_callable($this->options)) {
                return call_user_func($this->options);
            }

            $rep = new $this->options;

            return $rep->options();
        }

        $this->options = $callable;

        return $this;
    }
}
