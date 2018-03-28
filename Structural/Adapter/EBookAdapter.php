<?php
/**
 *  EBookAdapter 是电子书适配器类
 *
 * 该适配器实现了 PaperBookInterface 接口,
 * 但是你不必修改客户端使用纸质书的代码
 * Date: 2018-03-28
 * Time: 10:20
 */

namespace Structural\Adapter;


class EBookAdapter implements PaperBookInterface
{
    protected $eBook;

    // 注入了电子书接口EBookInterface
    public function __construct(EBookInterface $ebook)
    {
        $this->eBook = $ebook;
    }

    public function open()
    {
        $this->eBook->pressStart();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}