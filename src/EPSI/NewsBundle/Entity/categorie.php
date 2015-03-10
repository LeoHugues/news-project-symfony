<?php

namespace EPSI\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPSI\NewsBundle\Repository\categorieRepository")
 */
class categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieName", type="string", length=100)
     *
     * @Assert\NotBlank(message="Veuillez attribuer une catégorie à la news")
     * @Assert\Length(min = "3", minMessage="Le nom de la catégorie dois faire plus de 3 caractères")
     */
    private $categorieName;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categorieName
     *
     * @param string $categorieName
     * @return categorie
     */
    public function setCategorieName($categorieName)
    {
        $this->categorieName = $categorieName;

        return $this;
    }

    /**
     * Get categorieName
     *
     * @return string 
     */
    public function getCategorieName()
    {
        return $this->categorieName;
    }
}
