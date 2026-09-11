<?php

namespace Uom\UomUi\Components;

use Illuminate\View\Component;
use InvalidArgumentException;

class Button extends Component
{
    public const VARIANTS = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'light',
        'dark',
        'link',
    ];

    public const OUTLINE_VARIANTS = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'light',
        'dark',
    ];

    public const SIZES = [
        'sm',
        'lg',
    ];

    public const TYPES = [
        'button',
        'submit',
        'reset',
    ];

    public const TAGS = [
        'button',
        'a',
    ];

    public function __construct(
        public string $variant = 'primary',
        public bool $outline = false,
        public ?string $size = null,
        public string $type = 'button',
        public string $tag = 'button',
        public ?string $href = null,
        public bool $disabled = false,
        public bool $nowrap = false,
        public bool $block = false,
        public bool $toggle = false,
        public bool $active = false,
    ) {
        $this->validateProps();
    }

    protected function validateProps(): void
    {
        if (! in_array($this->variant, self::VARIANTS, true)) {
            throw new InvalidArgumentException(
                "Invalid button variant [{$this->variant}]."
            );
        }

        if ($this->outline &&
            ! in_array($this->variant, self::OUTLINE_VARIANTS, true)) {
            throw new InvalidArgumentException(
                "Outline is not supported for button variant [{$this->variant}]."
            );
        }

        if ($this->size !== null &&
            ! in_array($this->size, self::SIZES, true)) {
            throw new InvalidArgumentException(
                "Invalid button size [{$this->size}]."
            );
        }

        if (! in_array($this->type, self::TYPES, true)) {
            throw new InvalidArgumentException(
                "Invalid button type [{$this->type}]."
            );
        }

        if (! in_array($this->tag, self::TAGS, true)) {
            throw new InvalidArgumentException(
                "Invalid button tag [{$this->tag}]."
            );
        }
    }

    public function classes(): array
    {
        return [
            'btn',
            $this->outline
                ? "btn-outline-{$this->variant}"
                : "btn-{$this->variant}",
            "btn-{$this->size}" => $this->size !== null,
            'text-nowrap' => $this->nowrap,
            'w-100' => $this->block,
            'disabled' => $this->disabled && $this->tag === 'a',
            'active' => $this->active,
        ];
    }

    public function render()
    {
        return view('uomui::components.button');
    }
}