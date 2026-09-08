<?php

namespace Creational\StaticFactory;

class XmlReader implements DataReader
{
    public function readData(string $fileName): void
    {
        echo "is Xml reader";
    }
}