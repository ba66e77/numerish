<?php
/**
 * @file
 *
 * A class for tracking a static value.
 */
namespace ba66e77\numerish;

/**
 * Class ValueTracker
 *
 * @package ba66e77\numerish
 */
class ValueTracker {

    protected $value;
    protected $title;
    protected $description;
    protected $moreInfoURL;

  /**
   * ValueTracker constructor.
   *
   * @param      $value
   * @param null $title
   * @param null $description
   * @param null $moreInfoURL
   */
    public function __construct($value, $title = null, $description = null, $moreInfoURL = null) {
        foreach (array('value', 'title', 'description', 'moreInfoURL') as $var) {
            if (!is_null($$var)) {
                $this->validateParameter($var, $$var);
                $this->$var = $$var;
            }
        }
    }

  /**
   * @param $name
   * @param $value
   *
   * @throws \Exception
   */
    public function __set($name, $value) {
        try {
            $this->validateParameter($name, $value);
            $this->$name = $value;
        }
        catch (\Exception $e) {
            throw new \Exception("Unable to set $name");
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
    public function validateParameter($attributeName, $value) {
        switch ($attributeName) {
            case 'value':
                if (!is_numeric($value)) {
                    throw new \UnexpectedValueException("Value supplied must be numeric.");
                }
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
