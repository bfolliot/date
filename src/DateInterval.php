<?php

namespace BFolliot\Date;


/**
 * Add functionality to \DateInterval
 * 
 * @author Bryan Folliot <dev@bryanfolliot.fr>
 */
class DateInterval extends \DateInterval
{

    /**
     * Return the interval specification.
     * 
     * @return string The interval specification.
     */
    public function toSpec()
    {
        $intervalSpec = 'P';

        // Reading all non-zero date parts.
        $date = array_filter(array(
            'Y' => $this->y,
            'M' => $this->m,
            'D' => $this->d,
        ));

        // Adding the date part.
        foreach($date as $suffix => $value){
            $intervalSpec .= $value . $suffix;
        }

        // Reading all non-zero time parts.
        $time = array_filter(array(
            'H' => $this->h,
            'M' => $this->i,
            'S' => $this->s,
        ));

        // Adding the time part.
        if(!empty($time)){
            $intervalSpec .= 'T';
            foreach($time as $suffix => $value){
                $intervalSpec .= $value . $suffix;
            }            
        }

        return $intervalSpec;
    }
}
