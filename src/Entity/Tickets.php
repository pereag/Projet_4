<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketsRepository")
 */
class Tickets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visitor_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visitor_firstname;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_of_ticket;

    /**
     * @ORM\Column(type="date")
     */
    private $visit_date;

    /**
     * @ORM\Column(type="time")
     */
    private $visit_time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="integer")
     */
    private $order_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visitor_email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisitorName(): ?string
    {
        return $this->visitor_name;
    }

    public function setVisitorName(string $visitor_name): self
    {
        $this->visitor_name = $visitor_name;

        return $this;
    }

    public function getVisitorFirstname(): ?string
    {
        return $this->visitor_firstname;
    }

    public function setVisitorFirstname(string $visitor_firstname): self
    {
        $this->visitor_firstname = $visitor_firstname;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getTypeOfTicket(): ?string
    {
        return $this->type_of_ticket;
    }

    public function setTypeOfTicket(string $type_of_ticket): self
    {
        $this->type_of_ticket = $type_of_ticket;

        return $this;
    }

    public function getVisitDate(): ?\DateTimeInterface
    {
        return $this->visit_date;
    }

    public function setVisitDate(\DateTimeInterface $visit_date): self
    {
        $this->visit_date = $visit_date;

        return $this;
    }

    public function getVisitTime(): ?\DateTimeInterface
    {
        return $this->visit_time;
    }

    public function setVisitTime(\DateTimeInterface $visit_time): self
    {
        $this->visit_time = $visit_time;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getOrderNumber(): ?int
    {
        return $this->order_number;
    }

    public function setOrderNumber(int $order_number): self
    {
        $this->order_number = $order_number;

        return $this;
    }

    public function getVisitorEmail(): ?string
    {
        return $this->visitor_email;
    }

    public function setVisitorEmail(string $visitor_email): self
    {
        $this->visitor_email = $visitor_email;

        return $this;
    }
}
