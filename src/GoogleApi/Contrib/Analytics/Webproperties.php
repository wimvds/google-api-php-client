<?php

namespace GoogleApi\Contrib\Analytics;

use GoogleApi\Service\Model;

class Webproperties extends Model
{

    public $username;

    public $kind;

    protected $__itemsType = 'Webproperty';

    protected $__itemsDataType = 'array';

    public $items;

    public $itemsPerPage;

    public $previousLink;

    public $startIndex;

    public $nextLink;

    public $totalResults;

    public function setUsername ($username)
    {
        $this->username = $username;
    }

    public function getUsername ()
    {
        return $this->username;
    }

    public function setKind ($kind)
    {
        $this->kind = $kind;
    }

    public function getKind ()
    {
        return $this->kind;
    }

    public function setItems(/* array(Webproperty) */ $items)
    {
        $this->assertIsArray($items, 'Webproperty', __METHOD__);
        $this->items = $items;
    }

    public function getItems ()
    {
        return $this->items;
    }

    public function setItemsPerPage ($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getItemsPerPage ()
    {
        return $this->itemsPerPage;
    }

    public function setPreviousLink ($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    public function getPreviousLink ()
    {
        return $this->previousLink;
    }

    public function setStartIndex ($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    public function getStartIndex ()
    {
        return $this->startIndex;
    }

    public function setNextLink ($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink ()
    {
        return $this->nextLink;
    }

    public function setTotalResults ($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults ()
    {
        return $this->totalResults;
    }
}