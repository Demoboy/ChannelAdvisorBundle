<?php

namespace KMJ\ChannelAdvisorBundle\Traits;

/**
 * Description of SortableRequest
 *
 * @author kaelinjacobson
 */
trait SortableRequest {

    //put your code here
    protected $sortField = "Title";
    protected $sortDirection = "Ascending";

    public function getSortField() {
        return $this->sortField;
    }

    public function getSortDirection() {
        return $this->sortDirection;
    }

    public function setSortField($sortField) {
        if (!in_array($sortField, $this->getPossibleSortDiections())) {
            throw new \InvaildArgumentException("Sort field is not possible");
        }
        
        $this->sortField = $sortField;
        return $this;
    }

    public function setSortDirection($sortDirection) {
        if (!in_array($sortDirection, $this->getPossibleSortDirections())) {
            throw new \InvaildArgumentException("Sort direction is not possible");
        }
        
        $this->sortDirection = $sortDirection;
        return $this;
    }
    
    public function getPossibleSortDiections() {
        return array(
            'Sku',
            'Title',
        );
    }
    
    public function getPossibleSortDirections() {
        return array(
            'Ascending',
            'Descending',
        );
    }

}

?>
