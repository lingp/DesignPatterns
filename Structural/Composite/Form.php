<?php
/**
 * 组合节点必须实现组件接口，这对
 * Date: 2018-04-04
 * Time: 10:52
 */

namespace Structural\Composite;


class Form extends FormElement
{
    protected $elements = [];

    // 遍历所有元素并调用它们的render方法，然后返回完整的表单
    // 显示，但是从外部来看，并没有看见组合过程，就像是单个表单实例一样
    public function render($indent = 0)
    {
        $form_code = "";

        foreach ($this->elements as $element)
        {
            $form_code .= $element->render($indent + 1) . PHP_EOL;
        }

        return $form_code;
    }

    public function addElement(FormElement $element)
    {
        array_push($this->elements, $element);
    }

}