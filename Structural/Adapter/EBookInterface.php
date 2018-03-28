<?php
/**
 *  EBookInterface 是电子接口
 * Date: 2018-03-28
 * Time: 10:22
 */

namespace Structural\Adapter;


interface EBookInterface
{
    // 电子书翻页
    public function pressNext();

    public function pressStart();
}