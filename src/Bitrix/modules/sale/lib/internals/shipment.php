<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ShipmentTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> STATUS_ID string(1) mandatory
 * <li> PRICE_DELIVERY unknown mandatory
 * <li> ALLOW_DELIVERY string(1) optional
 * <li> DATE_ALLOW_DELIVERY datetime optional
 * <li> EMP_ALLOW_DELIVERY int optional
 * <li> DEDUCTED string(1) optional
 * <li> DATE_DEDUCTED datetime optional
 * <li> EMP_DEDUCTED_ID int optional
 * <li> REASON_UNDO_DEDUCTED string(255) optional
 * <li> RESERVED string(1) optional
 * <li> DELIVERY_ID int mandatory
 * <li> DELIVERY_DOC_NUM string(20) optional
 * <li> DELIVERY_DOC_DATE datetime optional
 * <li> TRACKING_NUMBER string(255) optional
 * <li> XML_ID string(255) optional
 * <li> PARAMS string mandatory
 * <li> DELIVERY_NAME string(128) mandatory
 * <li> CANCELED string(1) optional
 * <li> DATE_CANCELED datetime optional
 * <li> EMP_CANCELED_ID int optional
 * <li> REASON_CANCELED string(255) optional
 * <li> MARKED string(1) optional
 * <li> DATE_MARKED datetime optional
 * <li> EMP_MARKED_ID int optional
 * <li> REASON_MARKED string(255) optional
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class ShipmentTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns path to the file which contains definition of the class.
     *
     * @return string
     */
    public static function getFilePath()
    {
    }
    public static function getUfId()
    {
    }
    /**
     * @param $id
     * @return Main\Entity\DeleteResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function deleteWithItems($id)
    {
    }
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for ALLOW_DELIVERY field.
     *
     * @return array
     */
    public static function validateAllowDelivery()
    {
    }
    /**
     * Returns validators for DEDUCTED field.
     *
     * @return array
     */
    public static function validateDeducted()
    {
    }
    /**
     * Returns validators for REASON_UNDO_DEDUCTED field.
     *
     * @return array
     */
    public static function validateReasonUndoDeducted()
    {
    }
    /**
     * Returns validators for RESERVED field.
     *
     * @return array
     */
    public static function validateReserved()
    {
    }
    /**
     * Returns validators for DELIVERY_DOC_NUM field.
     *
     * @return array
     */
    public static function validateDeliveryDocNum()
    {
    }
    /**
     * Returns validators for TRACKING_NUMBER field.
     *
     * @return array
     */
    public static function validateTrackingNumber()
    {
    }
    /**
     * Returns validators for XML_ID field.
     *
     * @return array
     */
    public static function validateXmlId()
    {
    }
    /**
     * Returns validators for DELIVERY_NAME field.
     *
     * @return array
     */
    public static function validateDeliveryName()
    {
    }
    /**
     * Returns validators for CANCELED field.
     *
     * @return array
     */
    public static function validateCanceled()
    {
    }
    /**
     * Returns validators for REASON_CANCELED field.
     *
     * @return array
     */
    public static function validateReasonCanceled()
    {
    }
    /**
     * Returns validators for MARKED field.
     *
     * @return array
     */
    public static function validateMarked()
    {
    }
    /**
     * Returns validators for REASON_MARKED field.
     *
     * @return array
     */
    public static function validateReasonMarked()
    {
    }
    /**
     * Returns validators for SYSTEM field.
     *
     * @return array
     */
    public static function validateSystem()
    {
    }
    /**
     * Returns validators for TRACKING_DESCRIPTION field.
     *
     * @return array
     */
    public static function validateTrackingDescription()
    {
    }
}