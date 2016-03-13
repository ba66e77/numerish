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
    protected $descripion;
    protected $moreInfoURL;

    /**
     * Constructor function.
     *
     */
    public function __construct(int $value, string $title = '', string   $description = '', string $moreInfoURL) {
        $this->value = $value;
        $this->title = $title;
        $this->descriptoin = $description;
        $this->moreInfoURL = $moreInfoURL;
    }

    public function __set(sting $name, mixed $value) {
        try {
            $this->validateParameter($name, $value);
            $this->$name = $value;
        }

    }

    /**
     * Encapsulates validation of the attributes supplied to the object.
     *
     * @parameter $attributeName;
     * @parameter $value;
     */
    protected function validateParameter(string $attributeName, $value) {
        switch ($attributeName) {
            case 'value':
            case 'title':
            case 'description':
            case 'moreInfoURL':
            default:
              throw new UnexpectedValueException("Unexpected attributeName supplied or supplied attribute does not have defined validation. Got $attributeName.")
        }

    }
}

?>
