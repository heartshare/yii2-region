<?php
/**
 * Created by PhpStorm.
 * User: kyocera
 * Date: 2017/6/28
 * Time: 17:46
 */

namespace rowe\region;


class RegionListWidget extends RegionWidget
{
    public $targetModel;
    public $targetAttribute;

    public function  init()
    {
        if (!$this->targetModel) {
            throw new InvalidParamException('the target model can not be null!');
        }
        return parent::init();
    }

    public function run()
    {
        $html = parent::run(); // TODO: Change the autogenerated stub

    }
}