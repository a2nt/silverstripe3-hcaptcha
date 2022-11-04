<?php
/**
 * @package Hcaptcha
 */

/**
 * Protecter class to handle spam protection interface
 */
class HcaptchaProtector implements SpamProtector
{

    /**
     * Return the Field that we will use in this protector
     *
     * @return string
     */
    public function getFormField($name = "HcaptchaField", $title = "Captcha", $value = null)
    {
        $field = new HcaptchaField($name, $title, $value);
        $field->useSSL = Director::is_https();

        return $field;
    }

    /**
     * Not used by Hcaptcha
     */
    public function setFieldMapping($fieldMapping)
    {
    }

}
