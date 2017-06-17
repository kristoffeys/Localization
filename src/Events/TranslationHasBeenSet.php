<?php namespace Arcanedev\Localization\Events;

use Illuminate\Database\Eloquent\Model;

/**
 * Class     TranslationHasBeenSet
 *
 * @package  Arcanedev\Localization\Events
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class TranslationHasBeenSet
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /** @var \Illuminate\Database\Eloquent\Model */
    public $model;

    /** @var string */
    public $attribute;

    /** @var string */
    public $locale;

    /** @var mixed */
    public $oldValue;

    /** @var mixed */
    public $newValue;

    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * TranslationHasBeenSet constructor.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string                               $attribute
     * @param  string                               $locale
     * @param  mixed                                $oldValue
     * @param  mixed                                $newValue
     */
    public function __construct(Model $model, $attribute, $locale, $oldValue, $newValue)
    {
        $this->model     = $model;
        $this->attribute = $attribute;
        $this->locale    = $locale;
        $this->oldValue  = $oldValue;
        $this->newValue  = $newValue;
    }
}
