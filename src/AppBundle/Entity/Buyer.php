<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Buyer
 *
 * @ORM\Table(name="buyer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuyerRepository")
 */
class Buyer
{
	/**
	* @ORM\OneToMany(targetEntity="Orders", mappedBy="products")
	*/
	private $orders;

	public function __construct()
	{
        $this->products = new ArrayCollection();
    }
	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="buyerName", type="string", length=255)
     */
    private $buyerName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set buyerName
     *
     * @param string $buyerName
     *
     * @return Buyer
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    /**
     * Get buyerName
     *
     * @return string
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Buyer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}

