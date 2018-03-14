<?php

namespace Modules\Locales\Entities\Traits;

use Dimsav\Translatable\Translatable;

trait EribuTranslatable {

    use Translatable {
         //MyTranslatable::translations insteadof Translatable;
    }

    /**
     * Boot translations for model
     */
    public function bootTranslations() {
        if ((bool)config('translatable.enabled') === false) {
            $this->translatedAttributes = [];
        }
    }
    
  
    /**
     * @param array $options
     *
     * @return bool
     */
    public function save(array $options = []) {
        
        if ($this->exists) {
            if (count($this->getDirty()) > 0) {
                // If $this->exists and dirty, parent::save() has to return true. If not,
                // an error has occurred. Therefore we shouldn't save the translations.
                if (parent::save($options)) {
                    return $this->saveTranslations();
                }

                return false;
            } else {
                // If $this->exists and not dirty, parent::save() skips saving and returns
                // false. So we have to save the translations
                if ($saved = $this->saveTranslations()) {
                    $this->fireModelEvent('saved', false);
                    $this->fireModelEvent('updated', false);
                }

                return $saved;
            }
        } elseif (parent::save($options)) {
            // We save the translations only if the instance is saved in the database.
            return $this->saveTranslations();
        }

        return false;
    }

    /**
     * @return bool
     */
    protected function saveTranslations() {
        $saved = true;
        foreach ($this->translations as $translation) {
            if ($saved && $this->isTranslationDirty($translation)) {
                if (!empty($connectionName = $this->getConnectionName())) {
                    $translation->setConnection($connectionName);
                }

                $translation->setAttribute($this->getRelationKey(), $this->getKey());
                $saved = $translation->save();
            }
        }

        return $saved;
    }

}
