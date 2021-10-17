<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emprinteur;

    /**
     * @ORM\ManyToOne(targetEntity=Livre::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livre;

    /**
     * @ORM\Column(type="date")
     */
    private $reserverPour;

    /**
     * @ORM\Column(type="date")
     */
    private $reserverA;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $renduLe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmprinteur(): ?User
    {
        return $this->emprinteur;
    }

    public function setEmprinteur(?User $emprinteur): self
    {
        $this->emprinteur = $emprinteur;

        return $this;
    }

    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    public function setLivre(?Livre $livre): self
    {
        $this->livre = $livre;

        return $this;
    }

    public function getReserverPour(): ?\DateTimeInterface
    {
        return $this->reserverPour;
    }

    public function setReserverPour(\DateTimeInterface $reserverPour): self
    {
        $this->reserverPour = $reserverPour;

        return $this;
    }

    public function getReserverA(): ?\DateTimeInterface
    {
        return $this->reserverA;
    }

    public function setReserverA(\DateTimeInterface $reserverA): self
    {
        $this->reserverA = $reserverA;

        return $this;
    }

    public function getRenduLe(): ?\DateTimeInterface
    {
        return $this->renduLe;
    }

    public function setRenduLe(?\DateTimeInterface $renduLe): self
    {
        $this->renduLe = $renduLe;

        return $this;
    }
}
