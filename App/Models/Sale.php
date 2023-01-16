<?php

namespace App\Models;

use App\Core\Model;

class Sale extends Model
{

    protected int $id;
    protected string $name='';
    protected string $photo;
    protected string $city;


    /**
     * @param string $name
     * @param string $photo
     */
    public function __construct(string $name='', string $photo='',string $city='')
    {
        $this->name = $name;
        $this->photo = $photo;
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }


    /**
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

}