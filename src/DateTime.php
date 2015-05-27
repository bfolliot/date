<?php

namespace BFolliot\Date;


/**
 * Add functionality to \DateTime
 * 
 * @author Bryan Folliot <dev@bryanfolliot.fr>
 */
class DateTime extends \DateTime
{

    /**
     * Format according to locale settings
     * @param (string) $format : Format accepted by strftime().
     * @return Returns a string formatted according format. Month and weekday names and other language-dependent strings respect the current locale set with setlocale(). 
     */
    public function strftime($format)
    {
        return strftime($format, $this->getTimestamp());
    }
}
