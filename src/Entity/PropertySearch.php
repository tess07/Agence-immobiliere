<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\Common\Collections\ArrayCollection;
=======
>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch {
  /**
   * @var int|null
   */
  private $maxPrice;
  /**
   * @var int|null
   * @Assert\Range(min=10, max=600)
   */
  private $minSurface;
<<<<<<< HEAD
    /**
     * @var ArrayCollection
     */
  private $criteres;

  public function __construct()
  {
    $this->criteres = new ArrayCollection();
  }
=======

>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
  /**
   * Get the value of maxPrice
   *
   * @return  int|null
   */ 
  public function getMaxPrice(): ?int
  {
    return $this->maxPrice;
  }

  /**
   * Set the value of maxPrice
   *
   * @param  int|null  $maxPrice
   *
   * @return  PropertySearch
   */ 
  public function setMaxPrice(int $maxPrice): PropertySearch
  {
    $this->maxPrice = $maxPrice;

    return $this;
  }

  /**
   * Get the value of minSurface
   *
   * @return  int|null
   */ 
  public function getMinSurface(): ?int
  {
    return $this->minSurface;
  }

  /**
   * Set the value of minSurface
   *
   * @param  int|null  $minSurface
   *
   * @return  PropertySearch
   */ 
  public function setMinSurface(int $minSurface): PropertySearch
  {
    $this->minSurface = $minSurface;

    return $this;
  }
<<<<<<< HEAD

  /**
   * Get the value of criteres
   *
   * @return  ArrayCollection
   */ 
  public function getCriteres()
  {
    return $this->criteres;
  }

  /**
   * Set the value of criteres
   *
   * @param  ArrayCollection  $criteres
   *
   * @return  self
   */ 
  public function setCriteres(ArrayCollection $criteres)
  {
    $this->criteres = $criteres;

    return $this;
  }
=======
>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
}