<?php
/**
 * 纸质书接口
 * Date: 2018-03-28
 * Time: 10:12
 */
namespace Structural\Adapter;

interface PaperBookInterface
{
    // 翻页方法
    public function turnPage();

    // 打开书方法
    public function open();
}

