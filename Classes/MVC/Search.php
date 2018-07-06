<?php

namespace Qnvt\ExpositionQnvt\MVC;



class Search
{
    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param string $intitule
     * @return Search
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Search
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }



}
