<?php

class Product
{

  protected $category;
  protected $product;
  private $title;
  private $img;
  private $price;
  private $iconCategory;




  function __construct($_category, $_product, $_title, $_img, $_price, $_iconCategory)
  {

    $this->setCategory($_category);
    $this->setProduct($_product);
    $this->setTitle($_title);
    $this->setImg($_img);
    $this->setPrice($_price);
    $this->setIconCategory($_iconCategory);
  }


  /**
   * Get the value of category
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of category
   *
   * @return  self
   */
  public function setCategory($category)
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Get the value of product
   */
  public function getProduct()
  {
    return $this->product;
  }

  /**
   * Set the value of product
   *
   * @return  self
   */
  public function setProduct($product)
  {
    $this->product = $product;

    return $this;
  }

  /**
   * Get the value of title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of img
   */
  public function getImg()
  {
    return $this->img;
  }

  /**
   * Set the value of img
   *
   * @return  self
   */
  public function setImg($img)
  {
    $this->img = $img;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of iconCategory
   */
  public function getIconCategory()
  {
    return $this->iconCategory;
  }

  /**
   * Set the value of iconCategory
   *
   * @return  self
   */
  public function setIconCategory($iconCategory)
  {
    $this->iconCategory = $iconCategory;

    return $this;
  }
}
