<?php


class ProductLoaderInterface implements \Symfony\Component\Serializer\Mapping\Loader\LoaderInterface
{
    public function loadClassMetadata(\Symfony\Component\Serializer\Mapping\ClassMetadataInterface $classMetadata): bool {
        return true;
    }
}
