<?php

namespace Knowband\Spinandwin\Block\Adminhtml\Tab;

class LookAndFeel extends \Magento\Backend\Block\Widget implements \Magento\Backend\Block\Widget\Tab\TabInterface
{
    private $sp_helper;
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Knowband\Spinandwin\Helper\Data $helper,
        array $data = []
    ) {
        $this->sp_helper = $helper;
        parent::__construct($context, $data);
    }

    public function getTabLabel()
    {
        return __('Look and Feel');
    }

    public function getTabTitle()
    {
        return __('Look and Feel');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }

    public function getSettings($key)
    {
        return $this->sp_helper->getSavedSettings($key);
    }
    
    public function getMediaUrl()
    {
        return $this->sp_helper->getMediaUrl();
    }
    
    public function getThemes()
    {
        
        return array(
            '1' => __('None'),
            'rose_day' => __('Rose Day'),
            'propose_day' => __('Propose Day'),
            'chocolate_day' => __('Chocolate Day'),
            'teddy_day' => __('Teddy Day'),
            'promise_day' => __('Promise Day'),
            'hug_day' => __('Hug Day'),
            'kiss_day' => __('Kiss Day'),
            'valentine_day' => __('Valentine\'s Day'),
            '2' => __('Xmas Theme 1'),
            '3' => __('Xmas Theme 2'),
            'merry_christmas_1' => __('Merry Christmas - Theme 1'),
            'merry_christmas_2' => __('Merry Christmas - Theme 2'),
            'merry_christmas_3' => __('Merry Christmas - Theme 3'),
            'merry_christmas_4' => __('Merry Christmas - Theme 4'),
            'merry_christmas_5' => __('Merry Christmas - Theme 5'),    
            'blackfriday_theme_1' => __('Black Friday Theme1'),
            'blackfriday_theme_2' => __('Black Friday Theme2'),
            'blackfriday_theme_3' => __('Black Friday Theme3'),
            'blackfriday_theme_4' => __('Black Friday Theme4'),
            'diwali_theme_1' => __('Diwali Theme1'),
            'diwali_theme_2' => __('Diwali Theme2'),
            'diwali_theme_3' => __('Diwali Theme3'),
            'diwali_theme_4' => __('Diwali Theme4'),
            'diwali_theme_5' => __('Diwali Theme5'),
            'easter_theme_1' => __('Easter Theme1'),
            'easter_theme_2' => __('Easter Theme2'),
            'easter_theme_3' => __('Easter Theme3'),
            'holloween_theme_1' => __('Halloween Theme1'),
            'holloween_theme_2' => __('Halloween Theme2'),
            'holloween_theme_3' => __('Halloween Theme3'),
            'holloween_theme_4' => __('Halloween Theme4'),
            'thanking_theme_1' => __('Thanks Giving Theme1'),
        );
    }    
    
    public function getWheelDesign()
    {
        return array(
            '1' => __('Wheel Design 1'),
            '2' => __('Wheel Design 2'),
        );
    }
    
}
