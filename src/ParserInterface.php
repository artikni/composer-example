<?php

namespace artyosmky\parser;
/**
 *
 * Artyom Ni
 */
interface ParserInterface {
   /*

    * @param string $url
    * @param string $tag
    * @return array
    *     */
    
    public function process(string $url, string $tag): array;
}
