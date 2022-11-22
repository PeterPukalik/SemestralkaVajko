<?php

namespace App\Models;

use App\Core\Model;

class Houses extends Model
{


    protected int $cena;
    protected string $nazov ;
    protected string $foto ;
    protected string $popis;
    protected string $info ;
    protected int $id;

    /**
     * @return int
     */
    public function getCena(): int
    {
        return $this->cena;
    }

    /**
     * @return string
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @param int $cena
     */
    public function setCena(int $cena): void
    {
        $this->cena = $cena;
    }


    /**
     * @return string
     */
    public function getNazov(): string
    {
        return $this->nazov;
    }

    /**
     * @param string $nazov
     */
    public function setNazov(string $nazov): void
    {
        $this->nazov = $nazov;
    }

    /**
     * @return string
     */
    public function getFoto(): string
    {
        return $this->foto;
    }

    /**
     * @param string $foto
     */
    public function setFoto(string $foto): void
    {
        $this->foto = $foto;
    }

    /**
     * @return string
     */
    public function getPopis(): string
    {
        return $this->popis;
    }

    /**
     * @param string $popis
     */
    public function setPopis(string $popis): void
    {
        $this->popis = $popis;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $info
     */
    public function setInfo(string $info): void
    {
        $this->info = $info;
    }


}
