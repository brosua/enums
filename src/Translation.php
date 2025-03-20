<?php

declare(strict_types=1);

namespace Brosua\Enums;

use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Core\Localization\LanguageServiceFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;

trait Translation
{
    public function getLabel(): string
    {
        $translationString = $this->getTranslationString();
        $label = self::getTranslationService()->sL($translationString);
        if (!$label && $this instanceof \BackedEnum) {
            return $this->value;
        }
        return $label ?: $this->name;
    }

    protected static function getTranslationService(): LanguageService
    {
        $languageServiceFactory = GeneralUtility::makeInstance(
            LanguageServiceFactory::class,
        );
        $request = $GLOBALS['TYPO3_REQUEST'];
        return $languageServiceFactory->createFromSiteLanguage(
            $request->getAttribute('language')
            ?? $request->getAttribute('site')->getDefaultLanguage(),
        );
    }

    public function getTranslationString(): string
    {
        return self::getLanguageFilePath() . $this->name;
    }

    protected static function getLanguageFilePath(): string
    {
        return '';
    }
}
