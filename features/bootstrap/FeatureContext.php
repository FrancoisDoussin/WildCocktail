<?php

use Behat\Mink\Exception\ExpectationException;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    /**
     * @When I wait :arg1 seconds
     */
    public function iWaitSeconds($arg1)
    {
        $this->getSession()->wait($arg1*1000);
    }

    /**
     * @Then I fill in wysiwyg on field :locator with :value
     */
    public function iFillInWysiwygOnFieldWith($locator, $value) {
        $el = $this->getSession()->getPage()->findField($locator);

        if (empty($el)) {
            throw new ExpectationException('Could not find WYSIWYG with locator: ' . $locator, $this->getSession());
        }

        $fieldId = $el->getAttribute('id');

        if (empty($fieldId)) {
            throw new Exception('Could not find an id for field with locator: ' . $locator);
        }

        $this->getSession()
            ->executeScript("CKEDITOR.instances[\"$fieldId\"].setData(\"$value\");");
    }

    /**
     * @Then I scrollTo :arg1 px
     */
    public function iScrollPx($arg1)
    {
        var_dump('window.scrollTo(0,'.$arg1.');');
        $this->getSession()->executeScript('window.scrollTo(0,'.$arg1.');');
    }

}
