<?php

namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FileOptions
 */
class FileOptions extends \Protobuf\AbstractMessage
{
    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;
    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;
    /**
     * java_package optional string = 1
     *
     * @var string
     */
    protected $java_package = null;
    /**
     * java_outer_classname optional string = 8
     *
     * @var string
     */
    protected $java_outer_classname = null;
    /**
     * java_multiple_files optional bool = 10
     *
     * @var bool
     */
    protected $java_multiple_files = null;
    /**
     * java_generate_equals_and_hash optional bool = 20
     *
     * @var bool
     */
    protected $java_generate_equals_and_hash = null;
    /**
     * java_string_check_utf8 optional bool = 27
     *
     * @var bool
     */
    protected $java_string_check_utf8 = null;
    /**
     * optimize_for optional enum = 9
     *
     * @var \google\protobuf\FileOptions\OptimizeMode
     */
    protected $optimize_for = null;
    /**
     * go_package optional string = 11
     *
     * @var string
     */
    protected $go_package = null;
    /**
     * cc_generic_services optional bool = 16
     *
     * @var bool
     */
    protected $cc_generic_services = null;
    /**
     * java_generic_services optional bool = 17
     *
     * @var bool
     */
    protected $java_generic_services = null;
    /**
     * py_generic_services optional bool = 18
     *
     * @var bool
     */
    protected $py_generic_services = null;
    /**
     * deprecated optional bool = 23
     *
     * @var bool
     */
    protected $deprecated = null;
    /**
     * cc_enable_arenas optional bool = 31
     *
     * @var bool
     */
    protected $cc_enable_arenas = null;
    /**
     * objc_class_prefix optional string = 36
     *
     * @var string
     */
    protected $objc_class_prefix = null;
    /**
     * csharp_namespace optional string = 37
     *
     * @var string
     */
    protected $csharp_namespace = null;
    /**
     * javanano_use_deprecated_package optional bool = 38
     *
     * @var bool
     */
    protected $javanano_use_deprecated_package = null;
    /**
     * uninterpreted_option repeated message = 999
     *
     * @var \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    protected $uninterpreted_option = null;
    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * Check if 'java_package' has a value
     *
     * @return bool
     */
    public function hasJavaPackage()
    {
    }
    /**
     * Get 'java_package' value
     *
     * @return string
     */
    public function getJavaPackage()
    {
    }
    /**
     * Set 'java_package' value
     *
     * @param string $value
     */
    public function setJavaPackage($value = null)
    {
    }
    /**
     * Check if 'java_outer_classname' has a value
     *
     * @return bool
     */
    public function hasJavaOuterClassname()
    {
    }
    /**
     * Get 'java_outer_classname' value
     *
     * @return string
     */
    public function getJavaOuterClassname()
    {
    }
    /**
     * Set 'java_outer_classname' value
     *
     * @param string $value
     */
    public function setJavaOuterClassname($value = null)
    {
    }
    /**
     * Check if 'java_multiple_files' has a value
     *
     * @return bool
     */
    public function hasJavaMultipleFiles()
    {
    }
    /**
     * Get 'java_multiple_files' value
     *
     * @return bool
     */
    public function getJavaMultipleFiles()
    {
    }
    /**
     * Set 'java_multiple_files' value
     *
     * @param bool $value
     */
    public function setJavaMultipleFiles($value = null)
    {
    }
    /**
     * Check if 'java_generate_equals_and_hash' has a value
     *
     * @return bool
     */
    public function hasJavaGenerateEqualsAndHash()
    {
    }
    /**
     * Get 'java_generate_equals_and_hash' value
     *
     * @return bool
     */
    public function getJavaGenerateEqualsAndHash()
    {
    }
    /**
     * Set 'java_generate_equals_and_hash' value
     *
     * @param bool $value
     */
    public function setJavaGenerateEqualsAndHash($value = null)
    {
    }
    /**
     * Check if 'java_string_check_utf8' has a value
     *
     * @return bool
     */
    public function hasJavaStringCheckUtf8()
    {
    }
    /**
     * Get 'java_string_check_utf8' value
     *
     * @return bool
     */
    public function getJavaStringCheckUtf8()
    {
    }
    /**
     * Set 'java_string_check_utf8' value
     *
     * @param bool $value
     */
    public function setJavaStringCheckUtf8($value = null)
    {
    }
    /**
     * Check if 'optimize_for' has a value
     *
     * @return bool
     */
    public function hasOptimizeFor()
    {
    }
    /**
     * Get 'optimize_for' value
     *
     * @return \google\protobuf\FileOptions\OptimizeMode
     */
    public function getOptimizeFor()
    {
    }
    /**
     * Set 'optimize_for' value
     *
     * @param \google\protobuf\FileOptions\OptimizeMode $value
     */
    public function setOptimizeFor(\google\protobuf\FileOptions\OptimizeMode $value = null)
    {
    }
    /**
     * Check if 'go_package' has a value
     *
     * @return bool
     */
    public function hasGoPackage()
    {
    }
    /**
     * Get 'go_package' value
     *
     * @return string
     */
    public function getGoPackage()
    {
    }
    /**
     * Set 'go_package' value
     *
     * @param string $value
     */
    public function setGoPackage($value = null)
    {
    }
    /**
     * Check if 'cc_generic_services' has a value
     *
     * @return bool
     */
    public function hasCcGenericServices()
    {
    }
    /**
     * Get 'cc_generic_services' value
     *
     * @return bool
     */
    public function getCcGenericServices()
    {
    }
    /**
     * Set 'cc_generic_services' value
     *
     * @param bool $value
     */
    public function setCcGenericServices($value = null)
    {
    }
    /**
     * Check if 'java_generic_services' has a value
     *
     * @return bool
     */
    public function hasJavaGenericServices()
    {
    }
    /**
     * Get 'java_generic_services' value
     *
     * @return bool
     */
    public function getJavaGenericServices()
    {
    }
    /**
     * Set 'java_generic_services' value
     *
     * @param bool $value
     */
    public function setJavaGenericServices($value = null)
    {
    }
    /**
     * Check if 'py_generic_services' has a value
     *
     * @return bool
     */
    public function hasPyGenericServices()
    {
    }
    /**
     * Get 'py_generic_services' value
     *
     * @return bool
     */
    public function getPyGenericServices()
    {
    }
    /**
     * Set 'py_generic_services' value
     *
     * @param bool $value
     */
    public function setPyGenericServices($value = null)
    {
    }
    /**
     * Check if 'deprecated' has a value
     *
     * @return bool
     */
    public function hasDeprecated()
    {
    }
    /**
     * Get 'deprecated' value
     *
     * @return bool
     */
    public function getDeprecated()
    {
    }
    /**
     * Set 'deprecated' value
     *
     * @param bool $value
     */
    public function setDeprecated($value = null)
    {
    }
    /**
     * Check if 'cc_enable_arenas' has a value
     *
     * @return bool
     */
    public function hasCcEnableArenas()
    {
    }
    /**
     * Get 'cc_enable_arenas' value
     *
     * @return bool
     */
    public function getCcEnableArenas()
    {
    }
    /**
     * Set 'cc_enable_arenas' value
     *
     * @param bool $value
     */
    public function setCcEnableArenas($value = null)
    {
    }
    /**
     * Check if 'objc_class_prefix' has a value
     *
     * @return bool
     */
    public function hasObjcClassPrefix()
    {
    }
    /**
     * Get 'objc_class_prefix' value
     *
     * @return string
     */
    public function getObjcClassPrefix()
    {
    }
    /**
     * Set 'objc_class_prefix' value
     *
     * @param string $value
     */
    public function setObjcClassPrefix($value = null)
    {
    }
    /**
     * Check if 'csharp_namespace' has a value
     *
     * @return bool
     */
    public function hasCsharpNamespace()
    {
    }
    /**
     * Get 'csharp_namespace' value
     *
     * @return string
     */
    public function getCsharpNamespace()
    {
    }
    /**
     * Set 'csharp_namespace' value
     *
     * @param string $value
     */
    public function setCsharpNamespace($value = null)
    {
    }
    /**
     * Check if 'javanano_use_deprecated_package' has a value
     *
     * @return bool
     */
    public function hasJavananoUseDeprecatedPackage()
    {
    }
    /**
     * Get 'javanano_use_deprecated_package' value
     *
     * @return bool
     */
    public function getJavananoUseDeprecatedPackage()
    {
    }
    /**
     * Set 'javanano_use_deprecated_package' value
     *
     * @param bool $value
     */
    public function setJavananoUseDeprecatedPackage($value = null)
    {
    }
    /**
     * Check if 'uninterpreted_option' has a value
     *
     * @return bool
     */
    public function hasUninterpretedOptionList()
    {
    }
    /**
     * Get 'uninterpreted_option' value
     *
     * @return \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    public function getUninterpretedOptionList()
    {
    }
    /**
     * Set 'uninterpreted_option' value
     *
     * @param \Protobuf\Collection<\google\protobuf\UninterpretedOption> $value
     */
    public function setUninterpretedOptionList(\Protobuf\Collection $value = null)
    {
    }
    /**
     * Add a new element to 'uninterpreted_option'
     *
     * @param \google\protobuf\UninterpretedOption $value
     */
    public function addUninterpretedOption(\google\protobuf\UninterpretedOption $value)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
    }
}