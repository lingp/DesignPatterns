<?php
/**
 * 纸质书实现类
 * Date: 2018-03-28
 * Time: 10:15
 */

namespace Structural\Adapter;


class Book implements PaperBookInterface
{
    public function open()
    {
        // TODO: Implement open() method.
        echo "paper";
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
    }
}