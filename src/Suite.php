<?php
namespace miamioh\Behat\Classes;

class Suite
{
  /** @var String */
  private $name;

  public function __construct(string $name) {
    $this->name = $name;

  }

  public function __toString(): string
  {
      return $this->getName();
  }

  public function getName() {
    return $this->name;
  }

  public function asArray(): array
  {
    return array('Name'=>$this->getName());
  }


}
