<?php

namespace miamioh\Behat\Classes;
use Behat\Gherkin\Node\ScenarioNode;

class Scenario extends ScenarioNode
{

  public function __toString(): string
  {
      return $this->getTitle();
  }
  public function asArray(): array
  {
    return array('Name'=>$this->getTitle(),'Tags'=>$this->getTagsAsString());
  }

  public function getTagsAsString() {
    return implode(',',$this->getTags());
  }

}
