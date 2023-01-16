<?php

namespace App\Models;

use App\Core\Model;

class Material extends Model
{

    protected int $id;
    protected string $type_wood;
    protected string $name;
    protected string $benefits;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getTypeWood(): string
    {
        return $this->type_wood;
    }

    /**
     * @param string $type_wood
     */
    public function setTypeWood(string $type_wood): void
    {
        $this->type_wood = $type_wood;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBenefits(): string
    {
        return $this->benefits;
    }

    /**
     * @param string $benefits
     */
    public function setBenefits(string $benefits): void
    {
        $this->benefits = $benefits;
    }


}