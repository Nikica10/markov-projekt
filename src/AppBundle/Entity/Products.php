<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductsRepository")
 */
class Products
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
     * @ORM\Column(name="productName", type="string", length=255)
     */
    private $productName;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfOrders", type="integer")
     */
    private $numberOfOrders;


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
     * Set productName
     *
     * @param string $productName
     *
     * @return Products
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set numberOfOrders
     *
     * @param integer $numberOfOrders
     *
     * @return Products
     */
    public function setNumberOfOrders($numberOfOrders)
    {
        $this->numberOfOrders = $numberOfOrders;

        return $this;
    }

    /**
     * Get numberOfOrders
     *
     * @return int
     */
    public function getNumberOfOrders()
    {
        return $this->numberOfOrders;
    }
	
	/**
     * Set Orders
     *
     * @param Orders $Orders
     *
     * @return Products
     */
    public function setBuyer(Orders $orders)
    {
        $this->orders = $orders;
        return $this;
    }
}

