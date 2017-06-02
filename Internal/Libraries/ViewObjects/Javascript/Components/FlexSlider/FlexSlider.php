<?php namespace ZN\ViewObjects\Javascript\Components;

class FlexSlider extends ComponentsExtends implements FlexSliderInterface
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
    // Generate
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $id   = 'datepicker'
    // @param array  $attr = NULL
    //
    //--------------------------------------------------------------------------------------------------------
    public function generate(String $id = 'filexslider', Array $attr = NULL) : String
    {
        $attr['id'] = $id;

        return $this->load('FlexSlider/View', $attr);
    }
}
