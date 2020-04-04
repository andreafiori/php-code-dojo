<?php

namespace design_patterns\structural\bridge\book;

class BridgeBookTitleAuthor extends BridgeBook
{
    /**
     * Show title and author
     *
     * @return string
     */
    public function showTitleAuthor() {
        return $this->showTitle() . ' by ' . $this->showAuthor();
    }
}
