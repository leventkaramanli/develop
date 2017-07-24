<?php namespace ZN\ViewObjects\Sheet\Helpers;

use ZN\ViewObjects\SheetTrait;
use CallController;

class Animation extends CallController
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Style Sheet Trait
    //--------------------------------------------------------------------------------------------------------
    //
    // methods
    //
    //--------------------------------------------------------------------------------------------------------
    use SheetTrait;

    //--------------------------------------------------------------------------------------------------------
    // Animation
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function name(String $name) : Animation
    {
        $this->transitions .= $this->_transitions("animation-name:$name;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Direction
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $direction
    //
    //--------------------------------------------------------------------------------------------------------
    public function direction(String $direction = 'reverse') : Animation
    {
        $this->transitions .= $this->_transitions("animation-direction:$direction;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Status
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function status(String $status) : Animation
    {
        $this->transitions .= $this->_transitions("animation-play-state:$status;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Fill
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function fill(String $fill) : Animation
    {
        $this->transitions .= $this->_transitions("animation-fill-mode:$fill;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Repeat
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function repeat(String $repeat) : Animation
    {
        $this->transitions .= $this->_transitions("animation-iteration-count:$repeat;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Duration
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function duration(String $duration) : Animation
    {
        if( is_numeric($duration) )
        {
            $duration = $duration."s";
        }

        $this->transitions .= $this->_transitions("animation-duration:$duration;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Delay
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function delay(String $delay) : Animation
    {
        if( is_numeric($delay) )
        {
            $delay = $delay."s";
        }

        $this->transitions .= $this->_transitions("animation-delay:$delay;".EOL);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Easing
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function easing(String $easing) : Animation
    {
        $this->transitions .= $this->_transitions("animation-timing-function:$easing;".EOL);

        return $this;
    }
}