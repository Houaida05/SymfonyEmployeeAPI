<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Serializer\Groups({"list"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Serializer\Groups({"list","detail"})
     * @Assert\NotBlank
     * @Assert\Length(min=3, max= 30)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     * @Serializer\Groups({"list","detail"})
     * @Assert\NotBlank
     * @Assert\Length(min=3, max= 30)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Serializer\Groups({"list","detail"})
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not valid."
     * )
     */
    private $email;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


    public function toArray(){
        return[
            'id'=>$this->getId(),
            'firstname'=> $this->getFirstname(),
            'lastname'=> $this->getLastname(),
            'email'=> $this->getEmail(),
        ];
    }
}
