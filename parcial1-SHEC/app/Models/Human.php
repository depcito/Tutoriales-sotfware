<?php

namespace App\Models;

use Database\Factories\HumanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    /** @use HasFactory<HumanFactory> */
    use HasFactory;

    /**
     * HUMAN ATTRIBUTES
     * $this->attributes['id'] - int - contains the human primary key (id)
     * $this->attributes['name'] - string - contains the human name
     * $this->attributes['aura'] - int - contains the human aura amount
     * $this->attributes['hierarchy'] - string - contains the human hierarchy (common, moderate or legendary)
     */
    public const HIERARCHY_COMMON = 'common';

    public const HIERARCHY_MODERATE = 'moderate';

    public const HIERARCHY_LEGENDARY = 'legendary';

    protected $fillable = ['name', 'aura', 'hierarchy'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getAura(): int
    {
        return $this->attributes['aura'];
    }

    public function setAura(int $aura): void
    {
        $this->attributes['aura'] = $aura;
    }

    public function getHierarchy(): string
    {
        return $this->attributes['hierarchy'];
    }

    public function setHierarchy(string $hierarchy): void
    {
        $this->attributes['hierarchy'] = $hierarchy;
    }

    public function isLegendary(): bool
    {
        return $this->getHierarchy() === self::HIERARCHY_LEGENDARY;
    }

    public function isCommon(): bool
    {
        return $this->getHierarchy() === self::HIERARCHY_COMMON;
    }

    /**
     * @return array<int, string>
     */
    public static function hierarchies(): array
    {
        return [
            self::HIERARCHY_COMMON,
            self::HIERARCHY_MODERATE,
            self::HIERARCHY_LEGENDARY,
        ];
    }
}
