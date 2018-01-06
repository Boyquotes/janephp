<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HeaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Model\\Header';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\Model\Header;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\Model\Header();
        $data = clone $data;
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        if (property_exists($data, 'format')) {
            $object->setFormat($data->{'format'});
            unset($data->{'format'});
        }
        if (property_exists($data, 'items')) {
            $object->setItems($this->denormalizer->denormalize($data->{'items'}, 'Jane\\OpenApi\\Model\\PrimitivesItems', 'json', $context));
            unset($data->{'items'});
        }
        if (property_exists($data, 'collectionFormat')) {
            $object->setCollectionFormat($data->{'collectionFormat'});
            unset($data->{'collectionFormat'});
        }
        if (property_exists($data, 'default')) {
            $object->setDefault($data->{'default'});
            unset($data->{'default'});
        }
        if (property_exists($data, 'maximum')) {
            $object->setMaximum($data->{'maximum'});
            unset($data->{'maximum'});
        }
        if (property_exists($data, 'exclusiveMaximum')) {
            $object->setExclusiveMaximum($data->{'exclusiveMaximum'});
            unset($data->{'exclusiveMaximum'});
        }
        if (property_exists($data, 'minimum')) {
            $object->setMinimum($data->{'minimum'});
            unset($data->{'minimum'});
        }
        if (property_exists($data, 'exclusiveMinimum')) {
            $object->setExclusiveMinimum($data->{'exclusiveMinimum'});
            unset($data->{'exclusiveMinimum'});
        }
        if (property_exists($data, 'maxLength')) {
            $object->setMaxLength($data->{'maxLength'});
            unset($data->{'maxLength'});
        }
        if (property_exists($data, 'minLength')) {
            $object->setMinLength($data->{'minLength'});
            unset($data->{'minLength'});
        }
        if (property_exists($data, 'pattern')) {
            $object->setPattern($data->{'pattern'});
            unset($data->{'pattern'});
        }
        if (property_exists($data, 'maxItems')) {
            $object->setMaxItems($data->{'maxItems'});
            unset($data->{'maxItems'});
        }
        if (property_exists($data, 'minItems')) {
            $object->setMinItems($data->{'minItems'});
            unset($data->{'minItems'});
        }
        if (property_exists($data, 'uniqueItems')) {
            $object->setUniqueItems($data->{'uniqueItems'});
            unset($data->{'uniqueItems'});
        }
        if (property_exists($data, 'enum')) {
            $values = [];
            foreach ($data->{'enum'} as $value) {
                $values[] = $value;
            }
            $object->setEnum($values);
            unset($data->{'enum'});
        }
        if (property_exists($data, 'multipleOf')) {
            $object->setMultipleOf($data->{'multipleOf'});
            unset($data->{'multipleOf'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/^x-/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getFormat()) {
            $data->{'format'} = $object->getFormat();
        }
        if (null !== $object->getItems()) {
            $data->{'items'} = $this->normalizer->normalize($object->getItems(), 'json', $context);
        }
        if (null !== $object->getCollectionFormat()) {
            $data->{'collectionFormat'} = $object->getCollectionFormat();
        }
        if (null !== $object->getDefault()) {
            $data->{'default'} = $object->getDefault();
        }
        if (null !== $object->getMaximum()) {
            $data->{'maximum'} = $object->getMaximum();
        }
        if (null !== $object->getExclusiveMaximum()) {
            $data->{'exclusiveMaximum'} = $object->getExclusiveMaximum();
        }
        if (null !== $object->getMinimum()) {
            $data->{'minimum'} = $object->getMinimum();
        }
        if (null !== $object->getExclusiveMinimum()) {
            $data->{'exclusiveMinimum'} = $object->getExclusiveMinimum();
        }
        if (null !== $object->getMaxLength()) {
            $data->{'maxLength'} = $object->getMaxLength();
        }
        if (null !== $object->getMinLength()) {
            $data->{'minLength'} = $object->getMinLength();
        }
        if (null !== $object->getPattern()) {
            $data->{'pattern'} = $object->getPattern();
        }
        if (null !== $object->getMaxItems()) {
            $data->{'maxItems'} = $object->getMaxItems();
        }
        if (null !== $object->getMinItems()) {
            $data->{'minItems'} = $object->getMinItems();
        }
        if (null !== $object->getUniqueItems()) {
            $data->{'uniqueItems'} = $object->getUniqueItems();
        }
        if (null !== $object->getEnum()) {
            $values = [];
            foreach ($object->getEnum() as $value) {
                $values[] = $value;
            }
            $data->{'enum'} = $values;
        }
        if (null !== $object->getMultipleOf()) {
            $data->{'multipleOf'} = $object->getMultipleOf();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/^x-/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
