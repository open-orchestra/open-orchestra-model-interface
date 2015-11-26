<?php

namespace OpenOrchestra\ModelInterface\Manager;

interface DocumentForEmbedManagerInterface
{
    /**
     * Take a embed document array representation to return id
     *
     * @param array $data
     *
     * @return string
     */
    public function transform($data);

    /**
     * Take a id to turn it into a embed document array representation
     *
     * @param array $data
     *
     * @return array
     */
    public function reverseTransform($id);
}
