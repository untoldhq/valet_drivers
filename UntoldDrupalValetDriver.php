<?php

class UntoldDrupalValetDriver extends DrupalValetDriver {
    private function documentRoot($sitePath) {
        return $sitePath . '/drupal';
    }

    public function serves($sitePath, $siteName, $uri) {
        return parent::serves($this->documentRoot($sitePath), $siteName, $uri);
    }

    public function isStaticFile($sitePath, $siteName, $uri) {
        return parent::isStaticFile($this->documentRoot($sitePath), $siteName, $uri);
    }

    public function frontControllerPath($sitePath, $siteName, $uri) {
        return parent::frontControllerPath($this->documentRoot($sitePath), $siteName, $uri);
    }
}