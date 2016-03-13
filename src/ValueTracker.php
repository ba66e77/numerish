<?php
/**
 * @file
 *
 * A class for tracking a static value.
 */
namespace ba66e77\numerish;

/**
 *
 */
class ValueTracker {

    protected $value;
    protected $title;
    protected $description;
    protected $moreInfoURL;

    /**
     * Constructor function.
     *
     */
    public function __construct($value, $title = null, $description = null, $moreInfoURL = null) {
        $this->value = $value;
        $this->title = $title;
        $this->description = $description;
        $this->moreInfoURL = $moreInfoURL;
    }

    public function __set($name, $value) {
        try {
            $this->validateParameter($name, $value);
            $this->$name = $value;
        }
        catch (Exception $e) {
            throw new Exception("Unable to set $name");
        }
    }

    /**
     * Encapsulates validation of the attributes supplied to the object.
     *
     * @parameter $attributeName;
     * @parameter $value;
     *
     * @return true
     */
    protected function validateParameter($attributeName, $value) {
        switch ($attributeName) {
            case 'value':
                throw new \Exception("No validator for $attributeName");
                break;
            case 'title':
                throw new \Exception("No validator for $attributeName");
                break;
            case 'description':
                throw new \Exception("No validator for $attributeName");
                break;
            case 'moreInfoURL':
                throw new \Exception("No validator for $attributeName");
                break;
            default:
                throw new \UnexpectedValueException("Unexpected attributeName supplied. Got $attributeName.");
        }
        return true;
    }
}

?>
